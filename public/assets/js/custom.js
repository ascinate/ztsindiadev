	
 $(document).ready(function(){

	$('.comon-slider01').owlCarousel({
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

	

	$('.profile-slider01').owlCarousel({
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
			768: {
				items:4
			},
			1000: {
				items:5
			},
			1200: {
			 items:6
			}
		}
	 })


	 $('.occurs-filters').owlCarousel({
		loop: true,
		margin:30,
		autoplay:true,
		nav:false,
		dots:false,
		responsive: {
		  0: {
			items:1
		  },
		  600: {
			items:1
		  },
		  667: {
		  items:1
		  },
		  820: {
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


	  
  $('.occurs-filters2').owlCarousel({
    loop: true,
    margin:30,
    autoplay:true,
    nav:false,
    dots:false,
    responsive: {
      0: {
        items:1
      },
      600: {
        items:1
      },
      667: {
      items:1
      },
      1000: {
        items:1
      },
      1200: {
     items:2
      }
    }
  })

	$('.com-slider').owlCarousel({
		loop: false,
		margin:30,
		autoplay:false,
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
			 items:6
			}
		}
	 })


	 $('.com-slider2').owlCarousel({
		loop: false,
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
			 items:5
			}
		}
	 })
	 


	 $('.text-slider01').owlCarousel({
		loop: true,
		margin:30,
		autoplay:true,
		nav:true,
		dots:false,
		responsive: {
		  0: {
			items:1
		  },
		  600: {
			items:1
		  },
		  667: {
		  items:1
		  },
		  1000: {
			items:1
		  },
		  1200: {
		 items:1
		  }
		}
	  })
	

	 $('.testi-slider01').owlCarousel({
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
			  items:1
			},
			768: {
				items:2
			},
			1000: {
				items:2
			},
			1200: {
			 items:2
			}
		}
	 })


	 $('.inspritaion').owlCarousel({
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
			  items:1
			},
			1000: {
				items:1
			},
			1200: {
			 items:3
			}
		}
	 })


	 
	 $('.venus-lider').owlCarousel({
		loop: true,
		margin:2,
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
			  items:1
			},
			1000: {
				items:1
			},
			1200: {
			 items:1
			}
		}
	 })




	 
});


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



$(document).ready(function () {
	$('.navbar .dmenu').hover(function () {
			$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
		}, function () {
			$(this).find('.sm-menu').first().stop(true, true).slideUp(105)
		});
	}); 
	 
		$(document).ready(function() {
		$(".megamenu").on("click", function(e) {
			e.stopPropagation();
		});
});

// dropdown

$(document).ready(function(){

	$(".custom-select").each(function() {
	  var classes = $(this).attr("class"),
		id      = $(this).attr("id"),
		name    = $(this).attr("name");
	  var template =  '<div class="' + classes + '">';
		template += '<span class="custom-select-trigger">' + $(this).attr("name") + '</span>';
		template += '<div class="custom-options">';
		$(this).find("option").each(function() {
		  template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
		});
	  template += '</div></div>';
	  
	  $(this).wrap('<div class="custom-select-wrapper"></div>');
	  $(this).hide();
	  $(this).after(template);
	  });
	  $(".custom-option:first-of-type").hover(function() {
	  $(this).parents(".custom-options").addClass("option-hover");
	  }, function() {
	  $(this).parents(".custom-options").removeClass("option-hover");
	  });
	  $(".custom-select-trigger").on("click", function() {
	  $('html').one('click',function() {
		$(".custom-select").removeClass("opened");
	  });
	  $(this).parents(".custom-select").toggleClass("opened");
	  event.stopPropagation();
	  });
	  $(".custom-option").on("click", function() {
	  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
	  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
	  $(this).addClass("selection");
	  $(this).parents(".custom-select").removeClass("opened");
	  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
	  });
	
});



  // products list grid js
$(document).ready(function() {
	$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
	$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
	$('#list').click(function(event){event.preventDefault();$('#products .item').removeClass('grid-group-item');});
  });
  
  $(document).ready(function(){
  $('.listed-bn ul li a').click(function(){
	$('.listed-bn li a').removeClass("active");
	$(this).addClass("active");
  });
});

// load more js


$(document).ready(function(){
	$(".radiou").slice(0, 3).show();
	$(".load-more").click(function(e){
		e.preventDefault();
		$(".radiou:hidden").slice(0, 3).slideDown();
		if ($(".radiou:hidden").length == 0) {
			$(".load-more").fadeOut("slow");
		}
	});

	$(".collist").slice(0, 12).show();
	$(".load-more3").click(function(e){
		e.preventDefault();
		$(".collist:hidden").slice(0, 4).slideDown();
		if ($(".collist:hidden").length == 0) {
			$(".load-more3").fadeOut("slow");
		}
	});

	
});



$(document).ready(function() {
    //YOUTUBE VIDEO
    $('.play-button').click(function(e){
        var iframeEl = $('<iframe>', { src: $(this).data('url') });
        $('#youtubevideo').attr('src', $(this).data('url'));
    })
    
    $('#close-video').click(function(e){
        $('#youtubevideo').attr('src', '');
    }); 
    
    
});


// product js

$(document).ready(function(){

	var thumbs = $('.img-selection').find('img');
	
	thumbs.click(function(){
	  var src = $(this).attr('src');
	  var dp = $('.display-img');
	  var img = $('.zoom');
	  dp.attr('src', src);
	  img.attr('src', src);
	});
	
	$(".img-thumbnail").click(function(){
	  $('.img-thumbnail').removeClass('selected');
	  $(this).addClass('selected');
	});
	
	var zoom = $('.big-img').find('img').attr('src');
	$('.big-img').append('<img class="zoom" src="'+zoom+'">');
	$('.big-img').mouseenter(function(){
	  $(this).mousemove(function(event){
		var offset = $(this).offset();
		var left = event.pageX - offset.left;
		var top = event.pageY - offset.top;
		
		$(this).find('.zoom').css({
		  width: '200%',
		  opacity: 1,
		  left: -left,
		  top: -top,
		});
	  });
	});
	
	$('.big-img').mouseleave(function(){
	  $(this).find('.zoom').css({
		width: '100%',
		opacity: 0,
		left: 0,
		top: 0,
	  });
	});
});


$(document).ready(function(){
	$("#customRadio1").click(function(){
	  $("#ac-2").hide();
	});
	$("#customRadio1").click(function(){
	  $("#ac-1").show();
	});
	 $("#customRadio2").click(function(){
	  $("#ac-1").hide();
	});
	$("#customRadio2").click(function(){
	  $("#ac-2").show();
	});
});

$(document).ready(function () {
	var selector = '.sixe-menu-q li';
	
	  $(selector).on('click', function(){
		  $(selector).removeClass('active');
		  $(this).addClass('active');
	  });
});


$(document).ready(function () {
	var selector = '.nobg-1 li';
	
	  $(selector).on('click', function(){
		  $(selector).removeClass('active');
		  $(this).addClass('active');
	  });
});

// listing
$(document).ready(function () {
	var pagination = $('.pagination');

	function setPagination(){
		pagination.jPages({
		containerID: 'Container',
		perPage: 6,
		startPage: 1,
		startRange: 1,
		midRange: 3,
		endRange: 1,
		first: false,
		last: false
	});
	}

	function destroyPagination() {
	pagination.jPages('destroy');
	};

	setPagination();

	$('#Container').mixItUp({
	callbacks: {
		onMixLoad: function(state,futureState ){
		console.log('mix Loaded');
		//setPagination();
		},
		onMixStart: function(state,futureState ){
		destroyPagination();
		},
			onMixEnd: function(state, futureState){
				console.log('mix End');
		setPagination();
			}
		}
	});
});


$(document).ready(function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
});

$(document).ready(function () {
    $(".tcontent").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".tcontent").is(':visible') ? 'More info' : 'Less info';
        $(".show_hide").text(txt);
        $(this).next('.tcontent').slideToggle(200);
    });
});


$(document).ready(function(){
	$(".rply").click(function(){
	  $(".reply-box-chats").toggle();
	});

	$(".send-btn2").click(function(){
		$(".reply-box-chats").hide();
	  });

	  $(".send-btn").click(function(){
		$(".reply-box-chats").hide();
	  });

	  $(".close-ts").click(function(){
		$(".chats-dis").show();
		$(".chats-indide").hide();
	  });

	  $(".links-chat").click(function(){
		$(".chats-dis").hide();
		$(".chats-indide").show();
	  });

	  
	

	 
});



$(document).ready(function() {
	  $(".min-height").scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('#loginModal').modal('show');
		} else {
			$('#loginModal').modal('hide');
		}
	});
});

