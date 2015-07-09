(function($){
	$.tabs = function(element, options){
		// merge options
		var obj = this;
		var opts = $.extend({}, $.fn.tabs.defaults, options);

		// view components
		var $this = $(element);

		// properties
		var container = opts.container;
		var tabSelector = opts.tabSelector;
		var activeClass = opts.activeClass;
		var tabContainerSeletor = opts.tabContainerSeletor;
		
		// init functions
		var init = function(){
			initPlugin();
		}
		var initListener = function(){
			$this.find(tabSelector).on({
				click:function(){
					gotoTab($this.find(tabSelector).index($(this)));
				}
			});
		}
		var initPlugin = function(){
			// init plugin
			gotoTab(0);
			
			// init listener
			initListener();
		}
		
		// helper functions
		var gotoTab = function(index){
			$this.find(tabSelector).removeClass(activeClass);
			$this.find(tabSelector).eq(index).addClass(activeClass);
			container.find(tabContainerSeletor).removeClass(activeClass);
			container.find(tabContainerSeletor).eq(index).addClass(activeClass);
		}
		
		// public functions
		this.gotoTab = function(index){
			gotoTab(index);
		};
		
		// init
		init();
		
	};
	
	// init
	$.fn.tabs = function(options){
		return this.each(function() {
            if (undefined === $(this).data('tabs')) {
                var plugin = new $.tabs(this, options);
                $(this).data('tabs', plugin);
            }
        });
	};
	
	// options
	$.fn.tabs.defaults = {
		tabSelector:'.tab_nav',
		container:$('.tabs'),
		activeClass:'active',
		tabContainerSeletor:'.tab'
	};
})(jQuery);