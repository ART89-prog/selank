// viewport size
function viewport() {
	var a = window,
		b = "inner";
	return (
		"innerWidth" in window ||
			((b = "client"), (a = document.documentElement || document.body)),
		{ width: a[b + "Width"], height: a[b + "Height"] }
	);
}
// viewport size end

// clear timeout
function timerOut(clearTimer) {
	clearTimeout(clearTimer);
}
// clear timeout end

// load document
window.onload = function () {
	// ie fix
	if (/MSIE 10/i.test(navigator.userAgent)) {
		$("html").addClass("ie");
	}
	if (
		/MSIE 9/i.test(navigator.userAgent) ||
		/rv:11.0/i.test(navigator.userAgent)
	) {
		$("html").addClass("ie");
	}
	// ie fix end

	// paroller
	if ($("[data-paroller-factor]").length) {
		setTimeout(function () {
			$("[data-paroller-factor]").paroller({});
		}, 3500);
	}
	// paroller end

	// remove loaded class
	document.documentElement.classList.remove("loaded");
	// remove loaded class end

	// check device type
	if (
		/Android|Windows Phone|webOS|iPhone|iPad|iPod|BlackBerry/i.test(
			navigator.userAgent
		)
	) {
		document.documentElement.classList.add("mob");
	} else {
		document.documentElement.classList.add("desktop");
	}

	if (navigator.platform.toUpperCase().indexOf("MAC") >= 0) {
		document.documentElement.classList.add("mac");
	}
	// check device type end

	// placeholder
	$(function () {
		$("input, textarea").each(function () {
			var a = $(this).attr("placeholder");
			$(this).focus(function () {
				$(this).attr("placeholder", "");
			});
			$(this).focusout(function () {
				$(this).attr("placeholder", a);
			});
		});
	});
	// placeholder end

	// lazy load
	(function () {
		var srcArr = document.querySelectorAll("[data-lazy]");
		setTimeout(function () {
			for (var i = 0; i < srcArr.length; i++) {
				var newSrc = srcArr[i].dataset.lazy;
				srcArr[i].src = newSrc;
			}
		}, 2500);
	})();

	(function () {
		var srcArr = document.querySelectorAll("[data-bg]");
		setTimeout(function () {
			for (var i = 0; i < srcArr.length; i++) {
				var newSrc = srcArr[i].dataset.bg;
				srcArr[i].style.backgroundImage = "url(" + newSrc + ")";
			}
		}, 2500);
	})();
	// lazy load end

	// popups
	(function () {
		if (document.cookie.indexOf("accepted") != -1) {
			$("body").addClass("accepted");
			$(".js-popup-trigger").addClass("disabled");
			console.log(document.cookie.indexOf("accepted"));

			$(".js-video-slider").slick({
				dots: true,
				arrows: true,
				infinite: true,
				autoplay: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				touchThreshold: 50,
				speed: 300,
				swipeToSlide: true,
				adaptiveHeight: true,
				responsive: [
					{
						breakpoint: 992,
						settings: { slidesToShow: 2 },
					},
					{
						breakpoint: 601,
						settings: { slidesToShow: 1 },
					},
				],
			});
		}

		if (document.cookie.indexOf("declined") != -1) {
			$("body").addClass("declined");
			console.log(document.cookie.indexOf("declined"));
		}

		setTimeout(function () {
			$(".js-popup.loaded").stop().fadeIn(0).addClass("active");
		}, 3000);

		var timer;

		// open popup
		jQuery(".js-popup-open").live("click", function (e) {
			e.preventDefault();
			var currentId =
				jQuery(this).attr("href") || jQuery(this).attr("data-href");
			timerOut(timer);

			// append responsive video in popup
			if($(this).closest(".js-video").length){
				var topPosition = jQuery(this).closest(".js-video").find(".js-video-center").offset().top;
				var windowHeight = viewport().height;
				var centerHeight = jQuery(this).closest(".js-video").find(".js-video-center").height();
				var finalPosition = topPosition - ((windowHeight/2) - (centerHeight/2));					
			}

			if (jQuery(this).hasClass("js-popup-video")) {
				var videoSrc = jQuery(this).attr("data-frame");
				var videoWidth = jQuery(this).attr("data-width");
				var videoHeight = jQuery(this).attr("data-height");
				jQuery(".js-video-frame").append(
					'<iframe frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
				);
				jQuery(".js-video-frame")
					.find("iframe")
					.attr("src", videoSrc)
					.attr("width", videoWidth)
					.attr("height", videoHeight);
				jQuery(".js-video-frame").fitVids().addClass("active");
			}

			if (document.body.scrollHeight > document.body.clientHeight) {
				jQuery("html").addClass("remove-scroll");
			}
			jQuery(currentId).stop().fadeIn(300).addClass("active");
			if(jQuery(this).closest(".js-video").length && jQuery(".mob-viewport").length){
				jQuery("html, body").animate(
					{
						scrollTop: finalPosition,
					},
					500
				);			
			}					
			jQuery("body").addClass("popup-opened");
			jQuery("html").addClass("hidden");
			if (jQuery(currentId).scrollTop() > 0) {
				jQuery(currentId).scrollTop(0);
			}
			return false;
		});

		// close popup
		jQuery(".js-popup-close").live("click", function (e) {
			if (jQuery(this).is("a")) {
				e.preventDefault();
			}
			timerOut(timer);
			jQuery(this)
				.closest(".js-popup.active")
				.removeClass("loaded active")
				.fadeOut(300);
			jQuery("body").removeClass("popup-opened");
			timer = setTimeout(function () {
				if (!$(".js-popup.active").length) {
					jQuery("html").removeClass("hidden remove-scroll");
				}

				// clear responsive video in popup
				if (jQuery(".js-video-frame.active").length) {
					jQuery(".js-video-frame").empty().removeClass("active");
				}
			}, 300);
		});

		// open second page
		$(".js-popup-open-page-2").on("click", function () {
			$(".js-hidden-button").fadeOut(0);
			$(".js-hidden-video").fadeIn(0, function () {
				jQuery("body").addClass("accepted");
				jQuery(".js-video-slider .js-video:first-child").addClass("first");
				jQuery('.js-video-slider').on('init', function(){
					var topPosition = jQuery('.js-video-slider .js-video.first:visible .js-video-center').offset().top;
					var windowHeight = viewport().height;
					var centerHeight = jQuery('.js-video-slider .js-video.first:visible .js-video-center').height();
					var finalPosition = topPosition - ((windowHeight/2) - (centerHeight/2));	
					jQuery("html, body").animate(
						{
							scrollTop: finalPosition,
						},
						500
					);										
				});					
				$(".js-video-slider").slick({
					dots: false,
					arrows: true,
					infinite: true,
					autoplay: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					speed: 300,
					swipeToSlide: true,
					adaptiveHeight: true,
					responsive: [
						{
							breakpoint: 992,
							settings: { slidesToShow: 2 },
						},
						{
							breakpoint: 601,
							settings: { slidesToShow: 1 },
						},
					],
				});			
			});
			document.cookie = "accepted=true; max-age=1000000";
			$(".js-popup-trigger").addClass("disabled");
		});

		// trigger click
		$(".js-popup-trigger").live("click", function(){
			if(!$(this).hasClass("disabled")){
				$(".js-hidden-button").trigger("click");
			}
		});

	})();
	// popups end

	// brands
	(function () {
		if($(".js-brands-slider").length){
			$(".js-brands-slider").slick({
				dots: true,
				arrows: true,
				infinite: true,
				autoplay: false,
				slidesToShow: 5,
				slidesToScroll: 1,
				speed: 300,
				swipeToSlide: true,
				adaptiveHeight: true,
				responsive: [
					{
						breakpoint: 1101,
						settings: { slidesToShow: 4 },
					},					
					{
						breakpoint: 992,
						settings: { slidesToShow: 3 },
					},				
					{
						breakpoint: 601,
						settings: { slidesToShow: 2 },
					},				
				],
			});					
		}
	})();
	// brands end

	/* content max-height */
	(function () {
		$(".js-max-open").live("click", function () {
			if (!$(this).closest(".js-max").hasClass("opened")) {
				$(".js-max").removeClass("preopened opened");
				if ($(this).closest(".js-mob-slider").length) {
					var currentId = $(this)
						.closest("[data-slide]")
						.attr("data-slide");
					$(this)
						.closest("[data-slide=" + currentId + "]")
						.find(".js-max")
						.addClass("preopened");
					var maxHeight = parseFloat(
						$(this)
							.closest("[data-slide=" + currentId + "]")
							.find(".js-max-fix")
							.css("max-height")
					);
					var realHeight = $(this)
						.closest("[data-slide=" + currentId + "]")
						.find(".js-max-content")
						.height();
					if (realHeight > maxHeight) {
						$(this)
							.closest("[data-slide=" + currentId + "]")
							.find(".js-max")
							.addClass("opened");
					}
					if (
						$(this).closest(".js-mob-slider.active").length &&
						$(this).closest(".slick-list").length
					) {
						$(this).closest(".js-mob-slider").slick("setPosition");
					}
				} else {
					$(this).closest(".js-max").addClass("preopened");
					var maxHeight = parseFloat(
						$(this)
							.closest(".js-max")
							.find(".js-max-fix")
							.css("max-height")
					);
					var realHeight = $(this)
						.closest(".js-max")
						.find(".js-max-content")
						.height();
					if (realHeight > maxHeight) {
						$(this).closest(".js-max").addClass("opened");
					}
				}
			} else {
				if ($(this).closest(".js-mob-slider").length) {
					var currentId = $(this)
						.closest("[data-slide]")
						.attr("data-slide");
					$(this)
						.closest("[data-slide=" + currentId + "]")
						.find(".js-max")
						.removeClass("preopened opened");
					if (
						$(this).closest(".js-mob-slider.active").length &&
						$(this).closest(".slick-list").length
					) {
						$(this).closest(".js-mob-slider").slick("setPosition");
					}
				} else {
					$(this).closest(".js-max").removeClass("preopened opened");
				}
			}
		});

		$(".desktop .js-max-pseudoopen").on("click", function () {
			$(this).closest(".js-max").find(".js-max-open").trigger("click");
		});

		$(document).on("click touchend", function (e) {
			if ($(e.target).closest(".js-max.opened").length) {
				return;
			} else {
				if (!$("html.touch-move").length) {
					$(".js-max.close-fix").removeClass("preopened opened");
				}
				if ($(".js-max.opened").length) {
					$("html").removeClass("touch-move");
				}
			}
		});

		$(document).on("touchmove", function (e) {
			$("html").addClass("touch-move");
		});

		$(".mob .js-max-content").on("click", function (e) {
			$(this).closest(".js-max").removeClass("preopened opened");
			if ($(".js-max.opened").length) {
				$("html").removeClass("touch-move");
			}
		});
	})();
	/* content max-height end */

	// accordion
	$.fn.closestDescendent = function (filter) {
		var $found = $(),
			$currentSet = this;
		while ($currentSet.length) {
			$found = $currentSet.filter(filter);
			if ($found.length) break;
			$currentSet = $currentSet.children();
		}
		return $found.first();
	};

	$(function () {
		window.dataLayer = window.dataLayer || [];
		$(".js-faq-item.active").find(".js-faq-hidden").slideDown(0);

		$(".js-faq-button").on("click", function () {
			var sit_id = $(this).attr('id');
			if ($(this).closest(".js-faq-item").hasClass("active")) {
				$(this)
					.closest(".js-faq-item")
					.find(".js-faq-hidden")
					.slideUp(300, function () {
						$(this).closest(".js-faq-item").removeClass("animated");
					});
				$(this)
					.closest(".js-faq")
					.find(".js-faq-item")
					.removeClass("active");
			} else {
				$(this)
					.closest(".js-faq")
					.find(".js-faq-item.active .js-faq-hidden")
					.slideUp(300, function () {
						$(this).closest(".js-faq-item").removeClass("animated");
					});
				$(this)
					.closest(".js-faq")
					.find(".js-faq-item.active")
					.removeClass("active");
				$(this).closest(".js-faq-item").addClass("active animated");
				$(this)
					.closest(".js-faq-item")
					.closestDescendent(".js-faq-hidden")
					.slideDown(300, function () {
						/* if ($(".mob").length) {
							var url = $(this).closest(".js-faq-item");
							$("html, body").animate(
								{
									scrollTop: parseInt($(url).offset().top - 10),
								},
								300
							);
						} */
					});
				switch(sit_id){
					case 'sit_1':window.dataLayer.push({'event':'sit_1'});break;
					case 'sit_2':window.dataLayer.push({'event':'sit_2'});break;
					case 'sit_3':window.dataLayer.push({'event':'sit_3'});break;
					case 'sit_4':window.dataLayer.push({'event':'sit_4'});break;
					case 'sit_5':window.dataLayer.push({'event':'sit_5'});break;
					case 'sit_6':window.dataLayer.push({'event':'sit_6'});break;
					case 'sit_7':window.dataLayer.push({'event':'sit_7'});break;
					case 'sit_8':window.dataLayer.push({'event':'sit_8'});break;
				}
			}
		});

		$(".desktop .js-faq-pseudobutton").on("click", function () {
			$(this)
				.closest(".js-faq-item")
				.find(".js-faq-button")
				.trigger("click");
		});

		$(document).on("click touchend", function (e) {
			if ($(e.target).closest(".js-faq-item").length) {
				return;
			} else {
				if (!$("html.touch-move").length) {
					$(".js-faq-item.active")
						.removeClass("active")
						.find(".js-faq-hidden")
						.slideUp(300);
				}
				if ($(".js-faq-item.active").length) {
					$("html").removeClass("touch-move");
				}
			}
		});

		$(".mob .js-faq-hidden").on("click", function (e) {
			$(".js-faq-item.active")
				.removeClass("active")
				.find(".js-faq-hidden")
				.slideUp(300, function () {
					/* if ($(".mob").length) {
					$("html, body").animate(
						{
							scrollTop: parseInt($(e.target).closest(".js-faq-item").offset().top - 10),
						},
						300
					);
				} */
				});
			if ($(".js-faq-item.active").length) {
				$("html").removeClass("touch-move");
			}
		});
	});
	// accordion

	// show hidden content
	$(function () {
		$(".js-show-item.active").find(".js-faq-hidden").slideDown(0);

		$(".js-show-button").on("click", function () {
			if ($(this).closest(".js-show-item").hasClass("active")) {
				$(this)
					.closest(".js-show-item")
					.removeClass("active")
					.find(".js-show-hidden")
					.stop()
					.fadeOut(0);
			} else {
				$(this)
					.closest(".js-show-item")
					.addClass("active")
					.find(".js-show-hidden")
					.stop()
					.fadeIn(0);
				/* if($(".mob-viewport").length){
					var url = $(this).closest(".js-show-item");
					$("html, body").animate(
						{
							scrollTop: parseInt($(url).offset().top - 10),
						},
						600
					);	
				}	*/
			}
		});

		$(document).on("click touchend", function (e) {
			if ($(e.target).closest(".js-show-item").length) {
				return;
			} else {
				if (!$("html.touch-move").length) {
					$(".js-show-item.active")
						.removeClass("active")
						.find(".js-show-hidden")
						.fadeOut(0);
				}
				if ($(".js-show-item.active").length) {
					$("html").removeClass("touch-move");
				}
			}
		});

		$(".mob .js-show-hidden").on("click", function (e) {
			setTimeout(function () {
				$(".js-show-item.active")
					.removeClass("active")
					.find(".js-show-hidden")
					.fadeOut(0);
			}, 50);
			if ($(".js-show-item.active").length) {
				$("html").removeClass("touch-move");
			}
		});
	});
	// show hidden content end

	/* aos */
	if ($("[data-aos]").length) {
		$(".js-aos-container").each(function () {
			$(this)
				.find(".js-aos-item:nth-child(2n)")
				.each(function () {
					$(this).attr("data-aos", "fade-left");
				});
			$(this)
				.find(".js-aos-item:nth-child(2n-1)")
				.each(function () {
					$(this).attr("data-aos", "fade-right");
				});
		});
		AOS.init({
			once: true,
			offset: 60,
			/* disable: function() {
				var maxWidth = 767;
				return window.innerWidth < maxWidth;
			} */
		});
	}
	/* aos end */

	// scroll to id
	(function () {
		jQuery(
			".js-scrolltoid, .main-chars__text a[href^='#'], .footer-nav a[href^='#']"
		).live("click", function (e) {
			e.preventDefault();
			var url = jQuery(this).attr("href");
			jQuery("html, body").animate(
				{
					scrollTop: parseInt(jQuery(url).offset().top),
				},
				700
			);
		});
	})();
	// scroll to id end

	// scroll on top
	jQuery(".js-scroll-button").on("click", function (e) {
		e.preventDefault();
		jQuery("html, body").animate(
			{
				scrollTop: 0,
			},
			700
		);
	});
	// scroll on top end

	// popup fix
	$(document).on("click touchstart", function (e) {
		if ($(e.target).closest(".fancybox-slide--image").length)
			$(".fancybox-button--close").trigger("click");
	});
	// popup fix end
};
// load document end

// resize window
function resizeWindow() {
	// type of page
	if (viewport().width > 767) {
		$("html").addClass("desktop-viewport").removeClass("mob-viewport");
	}
	if (viewport().width <= 767) {
		$("html").addClass("mob-viewport").removeClass("desktop-viewport");
	}
	// type of page end

	// moving content
	if (viewport().width > 767) {
		$(".js-content-1").appendTo(".js-from-1");
		$(".js-content-2").appendTo(".js-from-2");
	}
	if (viewport().width <= 767) {
		$(".js-content-1").appendTo(".js-to-1");
		$(".js-content-2").appendTo(".js-to-2");
	}
	// moving content end

	/* content max-height init */
	function contentMaxHeightResizeFix() {
		$(".js-max").each(function () {
			if (!$(this).hasClass("opened")) {
				$(this).addClass("preopened");
				var maxHeight = parseFloat(
					$(this).find(".js-max-fix").css("max-height")
				);
				var realHeight = $(this).find(".js-max-content").height();
				if (realHeight > maxHeight) {
					$(this).addClass("active").removeClass("preopened");
				} else {
					$(this).removeClass("active preopened");
				}
			}
			if (
				$(this).closest(".js-mob-slider.active").length &&
				$(this).closest(".slick-list").length
			) {
				$(this).closest(".js-mob-slider").slick("setPosition");
			}
		});
	}
	contentMaxHeightResizeFix();
	setTimeout(function () {
		contentMaxHeightResizeFix();
	}, 3000);
	/* content max-height init end */

	/* slick slider */
	var sliderTimer;

	$("[data-slide]")
		.not(".inited")
		.each(function () {
			$(this).attr("data-slide", $(this).index()).addClass("inited");
		});

	if (viewport().width > 767) {
		timerOut(sliderTimer);
		sliderTimer = setTimeout(function () {
			$(".js-mob-slider.active").slick("unslick").removeClass("active");
		}, 1000);
	}

	if (viewport().width <= 767) {
		if ($(".js-mob-slider").length) {
			timerOut(sliderTimer);
			sliderTimer = setTimeout(function () {
				$(".js-mob-slider")
					.not(".active")
					.slick({
						dots: true,
						arrows: true,
						infinite: true,
						autoplay: false,
						slidesToShow: 2,
						slidesToScroll: 1,
						touchThreshold: 200,
						speed: 300,
						swipeToSlide: true,
						adaptiveHeight: true,
						responsive: [
							{
								breakpoint: 651,
								settings: { slidesToShow: 1 },
							},
						],
					})
					.addClass("active");
			}, 1000);
		}
	}
	/* slick slider end */

	/* aos refresh */
	if ($("body[data-aos-easing]").length) {
		setTimeout(function () {
			AOS.refresh();
		}, 3500);
	}
	/* aos refresh end */

	/* close fixed bottom block */
	$(".js-fixed-close").on("click", function () {
		$(".js-fixed-bottom").addClass("closed").stop().fadeOut(0);
		$(".js-scroll-button").css("margin-bottom", "0");
		document.cookie = "declined=true; max-age=1000000";
	});
	/* close fixed bottom block end */
}

window.addEventListener("load", resizeWindow);
window.addEventListener("resize", resizeWindow);
window.addEventListener("oriantationchange", resizeWindow);
// resize window end

/* fixed button */
jQuery(window).on("scroll load resize", function () {
	if (jQuery(window).scrollTop() > jQuery(window).height()) {
		jQuery(".js-scroll-block").stop().fadeIn(0);
	} else {
		jQuery(".js-scroll-block").stop().fadeOut(0);
	}

	var windowTop = jQuery(window).scrollTop(),
		windowHeight = jQuery(window).height();

	if (jQuery(".footer").length) {
		var footerTop = parseInt(jQuery(".footer").offset().top),
			marginTop = windowTop + windowHeight - footerTop;
		if (
			windowTop - 95 + windowHeight >= footerTop &&
			footerTop > windowHeight
		) {
			jQuery(".js-scroll-block").css(
				"margin-bottom",
				marginTop - 95 + "px"
			);
		} else if (windowTop + windowHeight < footerTop) {
			jQuery(".js-scroll-block").css("margin-bottom", "0");
		}
	}

	if (jQuery(window).scrollTop() > jQuery(".js-order-block").offset().top) {
		jQuery(".js-fixed-bottom").stop().fadeIn(0);
		jQuery(".js-scroll-button").css(
			"margin-bottom",
			jQuery(".js-fixed-bottom").height() + "px"
		);
	}
});
/* fixed button end */
