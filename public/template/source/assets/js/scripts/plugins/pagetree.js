(function($){
	$.pageTree = function(element, options){
		// merge options
		var obj = this;
		var opts = $.extend({}, $.fn.pageTree.defaults, options);

		// view components
		var $this = $(element);

		// properties
		var nodeSelecotr = opts.nodeSelecotr;
		
		// init functions
		var init = function(){
			initPlugin();
		}
		var initListener = function(){
			// open tree
			$this.find('li .openclose').on({
				click:function(event){
					event.stopImmediatePropagation();
					var handler = $(this);
					var handlerParent = $(this).parent();
					var handlerLi = handlerParent.parent();
					if (handler.hasClass('loaded')){
						openNode(handlerLi, handler);
					} else {
						loadChilds(handlerLi, handler);
					}
				}
			});
		}
		var initPlugin = function(){
			// init plugin
			
			// init listener
			initListener();
		}
		
		// helper functions
		var openNode = function(handlerLi, handler){
			if (handler.hasClass('open')){
				handler.removeClass('icon_a_b_w');
				handlerLi.find('ul:first').slideUp(200);
			} else {
				handler.addClass('icon_a_b_w');
				handlerLi.find('ul:first').slideDown(200);
			}
			handler.toggleClass('open');
		}
		var loadChilds = function(handlerLi, handler){
			$.ajax({
				type:'GET',
				url:'/template/ajax/backend-pages.php',
				data:'',
				success:function(data){
					if (data.pages.length > 0){
						var list = buildList(data);
						/*
						handler.addClass('loaded').slideUp(200, function(){
							handler.addClass('open');
						});
						*/
						handlerLi.append(list);
						openNode(handlerLi, handler);
						initListener();
					}
				}
			});
		}
		var buildList = function(data){
			var returnStr = '<ul class="closed">';
			$.each(data.pages, function(key, value){
				returnStr += '<li><a href="#"><span class="icon icon_a_r_w openclose">&nbsp;</span>'+value.name+'</a></li>';
			});
			returnStr += '</ul>';
			return returnStr;
		}
		
		// public functions
		
		// init
		init();
		
	};
	
	// init
	$.fn.pageTree = function(options){
		return this.each(function() {
            if (undefined === $(this).data('pageTree')) {
                var plugin = new $.pageTree(this, options);
                $(this).data('pageTree', plugin);
            }
        });
	};
	
	// options
	$.fn.pageTree.defaults = {
		nodeSelecotr:'li'
	};
})(jQuery);