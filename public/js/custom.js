$(document).ready(function(){

	$('.slider-div').owlCarousel({
	   loop: true,
	   margin:0,
	   autoplay:false,
	   autoplayTimeout: 5000,
	   autoplaySpeed: 1000,
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

	$('.slider-sections-logo').owlCarousel({
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
			 items:5
			}
		}
	 })

	$('.revides-slider').owlCarousel({
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
			768: {
			  items:2
			},
			1000: {
				items:3
			},
			1200: {
			 items:3
			}
		}
	 })



	 $('.slider-sections-logo2').owlCarousel({
		loop: true,
		margin:15,
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
			  items:2
			},
			768: {
				items:4
			},
			1000: {
				items:5
			},
			1200: {
			 items:5
			}
		}
	 })


    $('.how-its-slider').owlCarousel({
		loop: true,
		margin:100,
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


	$('.how-its-slider2').owlCarousel({
		loop: true,
		margin:20,
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

	 $('.slider-footer').owlCarousel({
		loop: true,
		margin:100,
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
			 items:10
			}
		}
	 })


	 $('.slider-industriy').owlCarousel({
		loop: true,
		margin:10,
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
				items:2
			},
			1200: {
			 items:3
			}
		}
	 })


	$('.why-slider').owlCarousel({
		loop: true,
		margin:0,
		autoplay:false,
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
				items:2
			},
			1200: {
			 items:1
			}
		}
	 })

	 
	$('.slider-index-works01').owlCarousel({
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
				items:2
			},
			1200: {
			 items:2
			}
		}
	 })

	 

	 	$('.feedbacks-div').owlCarousel({
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
				items:2
			},
			1200: {
			 items:3
			}
		}
	 })

	 $('.owlFintech').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                667: {
                    items: 1
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        })



		
	 $('.owlExpcustomized').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                667: {
                    items: 1
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        })


});



$(document).ready(function() {
	var mixer = mixitup('.bd-part');
 });

$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() >= 200){
      $('#header').addClass('sticky');
    } else if ($(this).scrollTop() <= 200){
      $('#header').removeClass('sticky');
    }
  });
});
$(document).ready(function(){
	$('megamenu-li').mouseover(function(){
	$('.navMenu.over').removeClass('over');
	$(this).children(":first").addClass('over');
	});
	$('megamenu-li').mouseout(function(){
	$('.navMenu.over').removeClass('over');
	});
});

$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() >= 200){
      $('#header').addClass('sticky');
    } else if ($(this).scrollTop() <= 200){
      $('#header').removeClass('sticky');
    }
  });
});

$('nav ul li').mouseover(function(){
  $('.navMenu.over').removeClass('over');
  $(this).children(":first").addClass('over');
});
$('nav ul li').mouseout(function(){
  $('.navMenu.over').removeClass('over');
});


var html = document.documentElement;
var body = document.body;

var scroller = {
  target: document.querySelector("#scroll-container"),
  ease: 0.05, // <= scroll speed
  endY: 0,
  y: 0,
  resizeRequest: 1,
  scrollRequest: 0,
};

var requestId = null;

TweenLite.set(scroller.target, {
  rotation: 0.01,
  force3D: true
});

window.addEventListener("load", onLoad);

function onLoad() {    
  updateScroller();  
  window.focus();
  window.addEventListener("resize", onResize);
  document.addEventListener("scroll", onScroll); 
}

function updateScroller() {
  
  var resized = scroller.resizeRequest > 0;
    
  if (resized) {    
    var height = scroller.target.clientHeight;
    body.style.height = height + "px";
    scroller.resizeRequest = 0;
  }
      
  var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

  scroller.endY = scrollY;
  scroller.y += (scrollY - scroller.y) * scroller.ease;

  if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
    scroller.y = scrollY;
    scroller.scrollRequest = 0;
  }
  
  TweenLite.set(scroller.target, { 
    y: -scroller.y 
  });
  
  requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
}

function onScroll() {
  scroller.scrollRequest++;
  if (!requestId) {
    requestId = requestAnimationFrame(updateScroller);
  }
}

function onResize() {
  scroller.resizeRequest++;
  if (!requestId) {
    requestId = requestAnimationFrame(updateScroller);
  }
}






