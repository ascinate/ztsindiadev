$(document).ready(function() {
    $( window ).scroll(function() {
          var height = $(window).scrollTop();
          if(height >= 100) {
              $('header').addClass('fixed-menu');
          } else {
              $('header').removeClass('fixed-menu');
          }
      });
});

 $(document).ready(function(){

	$('.just-sliders').owlCarousel({
	   loop: true,
	   margin:20,
	   autoplay:true,
	   nav:false,
	   dots:true,
	   responsive: {
		   0: {
			   items:1
		   },
		   600: {
			   items:1
		   },
		   667: {
			 items:2
		   },
		   1000: {
			   items:3
		   },
		   1200: {
			items:4
		   }
	   }
	})
	$('.serviceowl').owlCarousel({
		loop: true,
		margin:30,
		autoplay:true,
		nav:false,
		dots:true,
		responsive: {
			0: {
				items:1
			},
			600: {
				items:1
			},
			667: {
			  items:2
			},
			1000: {
				items:3
			},
			1200: {
			 items:4
			}
		}
	 })

	$('.shop-slider').owlCarousel({
		loop: true,
		margin:20,
		autoplay:true,
		nav:false,
		dots:true,
		responsive: {
			0: {
				items:1
			},
			600: {
				items:1
			},
			667: {
			  items:2
			},
			1000: {
				items:3
			},
			1200: {
			 items:4
			}
		}
	 })

	



});


  $(document).ready(function(){

	new DataTable('#example-datea', {
		responsive: true,
		pageLength: 10,
		searching:true,
		bPaginate: true,
	  });

	  new DataTable('#example-datea2', {
		responsive: true,
		pageLength: 10,
		searching:true,
		bPaginate: true,
	  });

	  new DataTable('#example-datea3', {
		responsive: true,
		pageLength: 10,
		searching:true,
		bPaginate: true,
	  });

	  $('#id-em').hide();
	  $('#id-sm').hide();
	  $('#yse').hide();
	  $('#ser-payemts').hide();
	  $('#catsd').hide();
	  $('#ac-2').hide();
	  $('#ac-1').hide();
	  
	  $('#bcomest1').change(function () {
		$('#catsd').show();
		$('#ac-2').hide();
		$('#ac-1').hide();
	  });
	  $('#bcomnot36').change(function () {
		$('#ac-2').show();
		$('#catsd').hide();
		$('#ac-1').hide();
	  });
	  $('#bcomnot2').change(function () {
		$('#ac-1').show();
		$('#catsd').hide();
		$('#ac-2').hide();
	  });

	  $('#emyes1').change(function () {
		$('#id-em').show();
	  });
	  $('#emno2').change(function () {
		$('#id-em').hide();
	  });

	  $('#smyes1').change(function () {
		$('#id-sm').show();
	  });
	  $('#smno2').change(function () {
		$('#id-sm').hide();
	  });

	  $('#yest1').change(function () {
		$('#yse').show();
	  });
	  $('#not1').change(function () {
		$('#yse').hide();
	  });

	  $('#etyest1').change(function () {
		$('#ser-payemts').show();
	  });
	  $('#etnot2').change(function () {
		$('#ser-payemts').hide();
	  });



	  $('#elementId').click(function(){
        $('.disable-field').prop('disabled', true);
		});

		$('#reset').click(function(){
				$('.disable-field').prop('disabled', false);
		});


	  

	 
	
});
