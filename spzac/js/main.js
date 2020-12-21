$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Menu
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header__nav').toggleClass('header__nav--active');
	});

	/*==============================
	Back
	==============================*/
	$('.footer__back').on('click', function() {
		$('body,html').animate({
			scrollTop: 0,
			}, 700
		);
	});
  
    
    /*==============================
	侧边栏固定
	==============================*/
     $(window).scroll(function() {
     var t = $(document).scrollTop();
     var r = $(".fixside").height()
     var s = $(".fixsidenav").height();
     s = s - r;
     if (t < 100) {
         $(".fixside").removeClass('fiesd-top');
     } else {
         $(".fixside").addClass('fiesd-top');
     }
     if (t > s) {
        /* $(".fixside").removeClass('fiesd-top');
         $(".fixside").addClass('fiesd-bottom');*/
     } else {
         $(".fixside").removeClass('fiesd-bottom');
     }
 });

	/*==============================
	Range sliders
	==============================*/
	function initializeSlider() {
		if ($('#filter__range').length) {
			var firstSlider = document.getElementById('filter__range');
			noUiSlider.create(firstSlider, {
				range: {
					'min': 0,
					'max': 100
				},
				step: 1,
				connect: true,
				start: [18, 34],
				format: wNumb({
					decimals: 0,
					prefix: '$'
				})
			});
			var firstValues = [
				document.getElementById('filter__range-start'),
				document.getElementById('filter__range-end')
			];
			firstSlider.noUiSlider.on('update', function( values, handle ) {
				firstValues[handle].innerHTML = values[handle];
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeSlider());

});



jQuery( function ( $ ) {
  
    var isMobile = {
    Android : function() {
      return navigator.userAgent.match(/Android/i) ? true : false;
    },
    BlackBerry : function() {
      return navigator.userAgent.match(/BlackBerry/i) ? true : false;
    },
    iOS : function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
    },
    Windows : function() {
      return navigator.userAgent.match(/IEMobile/i) ? true : false;
    },
    any : function() {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
    }
  };
  
	setInterval(function(){
		if($(".animated-circles").hasClass("animated")){
			$(".animated-circles").removeClass("animated");
		}else{
			$(".animated-circles").addClass('animated');
		}
	},3000);
	var wait = setInterval(function(){
		$(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
		clearInterval(wait);
	},4500);
	$(".livechat-girl").hover(function(){
		clearInterval(wait);
		$(".livechat-hint").removeClass("hide_hint").addClass("show_hint");
	},function(){
		$(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
	}).click(function(){	
        if(isMobile.any()){
			 window.location.href = 'mqqwpa://im/chat?chat_type=wpa&uin=43675770&version=1&src_type=web&web_src=oicqzone.com';
		}else{
			  window.open("http://wpa.qq.com/msgrd?v=3&uin=43675770&site=qq&menu=yes"); 
          }
	}); 
} );



// hljs行号
$("pre code").each(function(){
  $(this).html("<ol><li>" + $(this).html().replace(/\n/g,"\n</li><li>") +"\n</li></ol>");
});

jQuery(document).ready(function(a) {
      if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
   a(".s_ping").appendTo(".header__nav") ;
        a(".header__nav").toggleClass("sxx");
} else if (/(Android)/i.test(navigator.userAgent)) {
   a(".s_ping").appendTo(".header__nav") ;
   a(".header__nav").toggleClass("sxx");
} else {
 
};
  
});



jQuery(document).ready(function(a) {
      if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
   a(".downon").appendTo(".downmoi") ;
      
} else if (/(Android)/i.test(navigator.userAgent)) {
  a(".downon").appendTo(".downmoi") ;
} else { 
};  
});