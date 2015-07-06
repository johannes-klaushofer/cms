$(document).ready(function(){
	// scrollpane
	var scrollPane = function(){
		$('.container_scroll').each(function(){
			var scrollPane = $(this);
			scrollPane.jScrollPane({
				autoReinitialise:true,
				verticalGutter:0,
				hideFocus:true
			});
		});
	}();
	
	// resize
	var resizeWindow = function(){
		var windowheight = getViewport('height');
		var windowwidth = getViewport('width');
		
		$('.nav').height(windowheight-$('.search').height());
		$('.content_main').height(windowheight-$('.content_top').outerHeight());
	};
	
	$(window).resize(function(){
		resizeWindow();
	});
	
	$(window).trigger('resize');
});