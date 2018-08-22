jQuery(document).ready(function($){

    $('.mobile_menu_icon').click(function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        //$('.menu').toggleClass('open');
    });

    $('.carousel').carousel();

	if ($('#slider').length) {

        var slider = document.getElementById('slider');


	    noUiSlider.create(slider, {
		    start: [18, 80],
		    connect: true,
		    range: {
			    'min': 18,
			    'max': 80
		    },
		    format: wNumb({
			    decimals: 0
		    })
	    });

		slider.noUiSlider.on('update', function( values, handle ) {
			snapValues[handle].innerHTML = values[handle];
		});
    }

    var snapValues = [
        document.getElementById('slider-snap-value-lower'),
        document.getElementById('slider-snap-value-upper')
    ];

	$('.nav-link.sub').click(function(){
		$(this).toggleClass('open');
	});

	if ($('#datepicker').length) {

		$('#datepicker').datepicker({
			uiLibrary: 'bootstrap4'
		});
	}

	$('.details_link').click(function(){

		if(!$('.table_history').hasClass('show')) {
			$(this).text('Hide Details');
		} else {
			$(this).text('Show Detail');
		}

	});
});
