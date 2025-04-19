$(document).ready(function(){

	$(".aboutpage_firstblk_section").children('p').last().css("color", "#ffffff");

	$(".aboutpage_secondblk_section").children('p').last().css("color", "#ffffff");
    
	/******Sidenavbar****/

	$(".navbar-toggle").on("click", function() {

	     $(".mob_navi").toggleClass("menu_open")

	 }), $("li.mob_sub_link a").on("click", function() {

	    $(this).next().next().toggleClass("submenu_open")

	}), $("li.mob_sub_link span").on("click", function() {

	     $(this).next().toggleClass("submenu_open")

	 }), $(".mob_sub_link a").on("click", function() {

	     $(".mob_navi").addClass("submenu_open1")

	 }), $(".mob_sub_link span").on("click", function() {

	   $(".mob_navi").addClass("submenu_open1")

	 }), $(".mob_sub_navigate a").on("click", function() {

	   $(".mob_navi").removeClass("submenu_open1")

	}), $(".mob_sub_navigate span").on("click", function() {

	     $(".mob_navi").removeClass("submenu_open1")

	}), $(".mob_sub_navigate i").on("click", function() {

	    $(".mob_navi").toggleClass("menu_open")

	 }), $(".mob_sub_navigate span").on("click", function() {

	    $(".mob_sub_menu").removeClass("submenu_open")

	});

	
	/*********************Banner*******************/
	$('.banner_hme_slic').slick({
		infinite: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
		  {
		   breakpoint: 1200,
  
		  settings: {
  
			  arrows:false,

  
			  }
  
		  },
		  {
			breakpoint: 768,
   
		   settings: {
   
			   dots:false,
			   arrows:false
   
			   }
   
		   }
		]
	  });
	
	/*******home-coupon*******/
	$('.couponshme_slic').slick({
		slidesToShow: 3,
		slidesToScroll:1,
		speed: 2000,
		autoplay: true,
		arrows:false,
		dots: false,
		// centerMode: false,
		// centerPadding: '0px',
		responsive: [
			{
				breakpoint: 992,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						speed:2000,
						infinite: true,
						arrows:false,
						dots: false
					}
			},
		
			{
				breakpoint: 767,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false
					}
			},
			{
				breakpoint: 480,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						// centerMode: true,
  						// centerPadding: '120px'
					}
			}
		]
	});	

	/*******home-review*******/
	$('.reviewhme_slic').slick({
		slidesToShow: 3,
		slidesToScroll:1,
		autoplaySpeed: 3000,
		autoplay: true,
		arrows:false,
		dots: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						speed:2000,
						infinite: true,
						arrows:false,
						dots: false
					}
			},
	
			{
				breakpoint: 480,
				settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false
					}
			}
		]
	});	
	/*******home-blog*******/
	$('.bloghme_slic').slick({
		slidesToShow: 3,
		slidesToScroll:1,
		autoplaySpeed: 3000,
		autoplay: true,
		arrows:false,
		dots: false,
		responsive: [
			// {
			// 	breakpoint: 1300,
			// 	settings: {
			// 			slidesToShow: 1,
			// 			slidesToScroll: 1,
			// 			centerMode: true,
 			// 			centerPadding: '150px',
			// 			 variableWidth: true	
			// 		}
			// },
		
			{
				breakpoint: 767,
				settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false
					}
			},
			{
				breakpoint: 480,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false
					}
			}
		]
	});	
	/*******review*******/
	$('.reviewownfirst_slic').slick({
		slidesToShow: 2,
		slidesToScroll:1,
		speed: 2000,
		autoplay: true,
		arrows:true,
		dots: false,
		centerMode: true,
  		centerPadding: '350px',
		responsive: [
			{
				breakpoint: 992,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						speed:2000,
						infinite: true,
						arrows:false,
						dots: false
					}
			},
	
			{
				breakpoint: 480,
				settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false, 
						centerMode: false
					}
			}
		]
	});	
	/*******home-service*******/
	$('.service_hme_slic').slick({
		slidesToShow: 4,
		slidesToScroll:1,
		autoplaySpeed: 3000,
		autoplay: true,
		arrows:false,
		dots: false,
		// centerMode: false,
		// centerPadding: '0px',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						speed:2000,
						infinite: true,
						arrows:false,
						dots: false
					}
			},
		
			{
				breakpoint: 767,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false
					}
			},
			{
				breakpoint: 480,
				settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						arrows:false,
						dots:false,
						// centerMode: true,
  						// centerPadding: '120px',
					}
			}
		]
	});	

		/*******Blog Page*******/
		$('.blogown_slic_left').slick({
			slidesToShow: 1,
			slidesToScroll:1,
			speed: 2000,
			autoplay: true,
			arrows:true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							speed:2000,
							infinite: true,
							arrows:false,
							dots: false
						}
				},
			
				{
					breakpoint: 767,
					settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: true,
							arrows:false,
							dots:false
						}
				},
				{
					breakpoint: 480,
					settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							arrows:false,
							dots:false
						}
				}
			]
		});	
  /***********blogLoadmore**********/ 

		$(".treatmentspage_part").slice(0, 4).show();

		$("#treatment_load").on("click", function(e){

		  e.preventDefault();

		  $(".treatmentspage_part:hidden").slice(0, 2).slideDown();

		  if($(".treatmentspage_part:hidden").length == 0) {

			$("#treatment_load").text("exit").addClass("exit").hide();

		  }

	});	

	function toggleResetPswd(e){

	    e.preventDefault();

	    $('#logreg-forms .form-signin').toggle() // display:block or none

	    $('#logreg-forms .form-reset').toggle() // display:block or none

	}

	function toggleSignUp(e){

	    e.preventDefault();

	    $('#logreg-forms .form-signin').toggle(); // display:block or none

	    $('#logreg-forms .form-signup').toggle(); // display:block or none

	}

	$(()=>{

	    // Login Register Form

	    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);

	    $('#logreg-forms #cancel_reset').click(toggleResetPswd);

	    $('#logreg-forms #btn-signup').click(toggleSignUp);

	    $('#logreg-forms #cancel_signup').click(toggleSignUp);

	})	  

	/**Dropdown ***/

	$(window).scroll(function () {	var e = $(".header_wrapper");		$(window).scrollTop() >= 100 ? e.addClass("fixed") : e.removeClass("fixed")	});

	$(window).scroll(function () {	var e = $(".mobile-header");		$(window).scrollTop() >= 100 ? e.addClass("fixed") : e.removeClass("fixed")	});

	$(window).scroll(function () {	var e = $(".mob_navi");		$(window).scrollTop() >= 100 ? e.addClass("fixed") : e.removeClass("fixed")	});

});



// $(document).ready(function() {

//     $(".print").click(function() {

//         var daid = $(this).attr('data-id');

//         var content = "#content_" + daid;

//         var divContents = jQuery(content).html();

//         var printWindow = window.open();

//         printWindow.document.write("<html><head><title> WheelersPestControl </title>");

//         printWindow.document.write('<style type="text/css"> .print-btn { display:none; } .print_bg { position:absolute;top:0px;left:0px;z-index:-1; } .couponswrap_single_inner{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;margin:0 10px;background-image:url(assets/css/images/home/coupons.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;height:400px;padding:3em;float: left;text-align:center}.couponswrap_single_inner h5{font-size:60px;letter-spacing:-4px;line-height:60px;color:#005bac;font-weight:700;margin:0;display:inline-block;margin-bottom:15px}.couponswrap_single_inner span{font-size:32px;letter-spacing:0;line-height:32px;color:#005bac;font-weight:400;text-transform:uppercase;vertical-align:top}.couponswrap_single_inner p{font-size:23px;letter-spacing:0;color:#000;font-weight:500;font-family:RobotoCondensed-Bold}.couponswrap_single_inner h6{font-size:15px;line-height:24px;letter-spacing:0;color:#000;font-weight:400;font-family:Roboto-Regular;margin-bottom:15px}a.print{width:200px;display:inline-block;font-size:27px;letter-spacing:0;color:#000;font-weight:700;background-color:#fff;line-height:36px;padding:15px 0;border-radius:50px;-webkit-transition:all .5s ease-in-out;transition:all .5s ease-in-out}a.print:hover{background-color:#005baa;color:#fff} .couponown_main .couponshme_single_inner {filter: drop-shadow(-8.03px 11.468px 28.5px rgba(0, 0, 0, 0.1))}.couponshme_single_inner {margin: 0px 10px;background-color: #fff;padding: 0em;border-radius: 10px;position: relative}.couponshme_single_offer {text-align: center;padding: 3em 0em 0em}.couponshme_single_inner{position: absolute;width: 90%;height: 92%;top: 20px;left: 0;right: 0;margin: 0 auto;background-image: url(assets/css/images/home/coupon_border1.webp);background-position: center;background-repeat: no-repeat;-webkit-print-color-adjust: exact !important;color-adjust: exact !important;background-size: 100% 100%}.couponshme_single_offer span {font-size: 80px;line-height: 80px;color: #232323;font-weight: 900;background: linear-gradient(to right, #007766, #009a84);-webkit-text-fill-color: transparent;-webkit-background-clip: text}.couponshme_single_bottom {width: 100%;height: 415px;background-image: url(assets/css/images/home/couponbottom1.webp);background-position: center;background-repeat: no-repeat;background-size: 100% 100%;-webkit-print-color-adjust: exact !important;color-adjust: exact !important;padding: 8em 5em 2em}   </style>');

//         printWindow.document.write('<link rel="stylesheet" href="https://www.mallca.com/assets/css/frontend/style.css"  type="text/css" />');

//         printWindow.document.write('<body class="print_full"> <div class="print_cover"> <img class="print_bg" src="" />');

//         printWindow.document.write(divContents);

// 		printWindow.document.write("</body>");

// 		printWindow.print();

// 		printWindow.document.close(); //i.close()

//     });
		
// });

$(document).ready(function() {

    $(".print").click(function() {

        var daid = $(this).attr('data-id');
        var content = "#content_" + daid;
        var divContents = jQuery(content).html();
        var printWindow = window.open();

        printWindow.document.write("<html><head><title> Wheelers Pest Control </title>");
        // printWindow.document.write('<style type="text/css"> .print-btn { display:none; } .print_bg { position:absolute;top:0px;left:0px;z-index:-1; } .couponswrap_single_inner{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;margin:0 10px;background-image:url(assets/css/images/home/coupons.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;height:400px;padding:3em;float: left;text-align:center}.couponswrap_single_inner h5{font-size:60px;letter-spacing:-4px;line-height:60px;color:#005bac;font-weight:700;margin:0;display:inline-block;margin-bottom:15px}.couponswrap_single_inner span{font-size:32px;letter-spacing:0;line-height:32px;color:#005bac;font-weight:400;text-transform:uppercase;vertical-align:top}.couponswrap_single_inner p{font-size:23px;letter-spacing:0;color:#000;font-weight:500;font-family:RobotoCondensed-Bold}.couponswrap_single_inner h6{font-size:15px;line-height:24px;letter-spacing:0;color:#000;font-weight:400;font-family:Roboto-Regular;margin-bottom:15px}a.print{width:200px;display:inline-block;font-size:27px;letter-spacing:0;color:#000;font-weight:700;background-color:#fff;line-height:36px;padding:15px 0;border-radius:50px;-webkit-transition:all .5s ease-in-out;transition:all .5s ease-in-out}a.print:hover{background-color:#005baa;color:#fff}a.print{display:none} </style>');
		  printWindow.document.write('<style type="text/css"> .print-btn { display:none; } .couponshme_single_bottom p{font-size:24px;line-height:32px;color:#fff;font-weight:600;text-align:center;margin-bottom:25px; font-family: "Inter-Regular"!important}.couponshme_single_bottom strong{font-size:16px;color:#fff;display:block;text-align:center;font-family:Inter-Regular!important;margin-bottom:2em}.couponshme_single_bottom a{display:none}.couponshme_single_inner {margin: 0px 10px;background-color: #fff;padding: 0em;border-radius: 10px;position: relative}.couponshme_single_offer {text-align: center;padding: 3em 0em 0em}.couponshme_single_inner{position: absolute;width: 90%;height: 92%;top: 20px;left: 0;right: 0;margin: 0 auto;background-image: url(assets/css/images/home/coupon_border1.webp);background-position: center;background-repeat: no-repeat;-webkit-print-color-adjust: exact !important;color-adjust: exact !important;background-size: 100% 100%}.couponshme_single_offer span {font-size: 80px;line-height: 80px;color: #232323;font-weight: 900;background: linear-gradient(to right, #007766, #009a84);-webkit-text-fill-color: transparent;-webkit-background-clip: text}.couponshme_single_bottom {width: 100%;height: 415px;background-image: url(assets/css/images/home/couponbottom1.webp);background-position: center;background-repeat: no-repeat;background-size: 100% 100%;-webkit-print-color-adjust: exact !important;color-adjust: exact !important;padding: 8em 5em 2em}.couponshme_single_offer span{font-size:80px;line-height:80px;color:#232323;font-weight:900;font-family:Inter-Black;background:linear-gradient(to right,#076,#009a84);-webkit-text-fill-color:transparent;-webkit-background-clip:text}   </style>');
        printWindow.document.write('<link rel="stylesheet" href="https://wheelerspestcontrol.com/assets/css/frontend/style.css"  type="text/css" />');
        printWindow.document.write('<body class="print_full"> <div class="print_cover"> <img class="print_bg" src="" />');
        printWindow.document.write(divContents);
		printWindow.document.write("</body>");
		printWindow.print();
		printWindow.document.close(); 
		//i.close()

    });
		
	
	

});

/*********accrodian*********/
$(document).ready(function() {
	$(".set > a").on("click", function() {
		$(this).hasClass("active") ? ($(this).removeClass("active"), $(this).siblings(".content").slideUp(200), $(".set > a i").removeClass("fa-minus").addClass("fa-plus")) : ($(".set > a i").removeClass("fa-minus").addClass("fa-plus"), $(this).find("i").removeClass("fa-plus").addClass("fa-minus"), $(".set > a").removeClass("active"), $(this).addClass("active"), $(".content").slideUp(200), $(this).siblings(".content").slideDown(200))
	})
	$(document).ready(function(){
		$(".faq_blck .set").on("click", function () {
			
			if($(".faq_blck .set").hasClass("active")){
				$(".faq_blck .set").removeClass("active");
			}
				$(this).addClass("active");
			 
			
		});
			});
 

	// *******DATE-TIME*******
// $(document).ready(function(){
// 	$('#datetimepicker3').datetimepicker({
// 	  format: 'LT'
// 	});
// 	$('#datetimepicker1').datetimepicker({
// 	  format: 'L'
// 	});
//   });
			



	/**************Search Button*************************/
	$(document).on("click", ".search_btn", function () {
		$(".search_box_input").addClass("open_search");
	});
	$(document).on("click", ".closebutton", function () {
		$(this).parent().removeClass("open_search");
	});

	
	$(".count").each(function() {

		$(this).prop("Counter", 0).animate({

			Counter: $(this).text()

		}, {

			duration: 3e3,

			easing: "swing",

			step: function(e) {

				$(this).text(Math.ceil(e))

			}

		})

	});

	

});

$(document).ready(function(){
	$(".hompage_faq_content .set").on("click", function () {
		
		if($(".hompage_faq_content .set").hasClass("active")){
			$(".hompage_faq_content .set").removeClass("active");
		}
			$(this).addClass("active");
		 
		
	});
});