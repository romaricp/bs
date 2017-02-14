$('.burger').click(function() {
    $(this).toggleClass('open');
    $('.mobmenu').toggleClass('open');
    $('body').toggleClass('stop-scrolling');
/*
    if ($('body').hasClass()) {}
	function hasClass(element, cls) {
	    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	}
	*/
    //$('body').bind('touchmove', function(e){e.preventDefault()});
    //$('body').unbind('touchmove');
});
