
// MapsJavascript

$(function() {
	$('.changesrc').click(function() {
		$('.mapcontainer').hide();
		var text = $(this).attr('value');
		$('#div' + text).show();
                // alert('Button ' + text + ' was clicked!');        
            });
});
