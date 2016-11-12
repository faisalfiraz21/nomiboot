$(document).ready(function() {

	$("#nomi-demo").owlCarousel({

                autoPlay: 2000, //Set AutoPlay to 3 seconds

                items : 5,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]

            });

});

// MapsJavascript

$(function() {
	$('.changesrc').click(function() {
		$('.mapcontainer').hide();
		var text = $(this).attr('value');
		$('#div' + text).show();
                // alert('Button ' + text + ' was clicked!');        
            });
});


$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
    transitionStyle:"fade"
  });
 
});