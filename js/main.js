
$(document).ready(function()	{
	$(".thumbnailit").nailthumb({width:177,height:177});
	$(window).scroll (function () {
		var sT = $(this).scrollTop();
			if (sT >= 500) {
				$('.first').removeClass('nav_bar')
				$('.first').addClass('nav_bar_2')
				$('.second').removeClass('nav')
				$('.second').addClass('nav_2')
			}else {
				$('.first').removeClass('nav_bar_2')
				$('.first').addClass('nav_bar')
				$('.second').removeClass('nav_2')
				$('.second').addClass('nav')
			}
	  });

$( ".desc" ).hide();
	$( ".state" ).hide();
	
	var $x = $(".state:not(:hidden)").length;
	var $opened = 0;
	var $front = $x - 4;
	var $back = 0;
	
	$(".schedule_date_value").change(function()	{
		$(".slider_container").css("margin-left", "0");
		$( ".state,.desc" ).hide();
		$selectedDate = $(this).val();
		$(".state" + ".date-" + $selectedDate ).show();	
		$(".state" + ".date-" + $selectedDate ).eq(($(".state" + ".date-" + $x ).size() - 1)).addClass("laststate");	
		
			
		document.getElementsByClassName("sign_text")[0].innerHTML = $selectedDate;
		$x = $(".state:not(:hidden)").length;
		$front = $x - 4;
	});
	
	$(".schedule_date_value").trigger("change")
		
	$(".button").click(function()	{
		var $this = $(this);
		



		$(this).closest("div").next().toggle("slide",function(){
			
			var stateAmount = ($(".state:not(:hidden)").length)
			var descAmount = ($(".desc_content:not(:hidden)").length)
			var totalOpenedAmount = (stateAmount + descAmount) * 250
			var totalWidthOpened = totalOpenedAmount * 250
			var maxWidthToMove = 250
			var widthToShow = 1000
			var widthMoved = parseInt($(".slider_container").css("margin-left") )
			
			// alert("totalOpened" + totalOpenedAmount)
			// alert("viewport" + widthToShow)
			// alert("left" + widthMoved)
			
			var leftOver = Math.abs(totalOpenedAmount - widthToShow - Math.abs(widthMoved))
			// alert("right"+leftOver)
			
			
			widthMoved = Math.abs(widthMoved)
			// alert(widthMoved)
			if(widthMoved > 0 && $this.hasClass("expanded"))
			{
				
				$(".slider_container").animate({
				"marginLeft" : "+="+leftOver+"px"
				});
				
				$y = Math.abs(leftOver / 250);
				
				$front += $y;
				$back -= $y;
				
			}

			
		});
		$this.toggleClass("expanded");

		// var stateAmount = ($(".state:not(:hidden)").length)
		// var descAmount = ($(".desc_content:not(:hidden)").length)
		// var totalOpenedAmount = stateAmount + descAmount
		// var totalWidthOpened = totalOpenedAmount * 150
		// var maxWidthToMove = 150
		// var widthToShow = 600
		// var widthMoved = parseInt($(".slider_container").css("margin-left") )
		// alert(widthMoved)



		// alert($x + " and" + $opened + " and " + $front + " and " + $back)
		if ($this.hasClass("expanded")) 
		{
			// alert($(this).closest("div").nextUntil(".state").is(":visible"))
			var $y = $(this).closest("div").next().children().length;
			console.log($this.closest("div").attr("class"))
			
			console.log($this.closest(".state:visible").index())
			// alert("fiirst" + $front)
			// alert("y" + $y)
			//alert("firsthere  = "+$front)
			if ($(this).closest("div").next().children().is(":last-child"))
			{
				
				var sliderMarginLeft = parseInt($(".slider_container").css("margin-left"))
				$val_last = $y * 250;
				// alert($val_last)
				if(sliderMarginLeft != "0")
				{
					
					
				}

				// $(".slider_container").animate({
				// "marginLeft" : "+=" + $val_last + "px"
				// });
			}
			else
			{
				//$front -= $y;
			}
			
			//$back -= $y;
			$front -= $y;
			$this.html("View");	

		} 
		else 
		{
			//alert($(this).closest("div").is(":visible:last-child"))
			// alert($(this).closest("div").not(':hidden').last())
			
			var $y = $(this).closest("div").next().children().length;	

			$front += $y;
			//alert("first"+$front)
			$this.html("Close");	
			
		}
	});
	
	$(".bp").click(function()	{
		var parentNo = $(".state:not(:hidden)").length;
		var childNo = $(".desc:not(:hidden)").length;
		var y = parseInt(parentNo) + parseInt(childNo);
		//alert($(".state:not(:hidden)").length);
		//alert($front);
		
		if ($back <= 0) {
			
		}
		
		else {
			$back -= 1;
			$front += 1;
			$(".slider_container").animate({
			"marginLeft" : "+=250px"
			});
			
		}
	});
 
	$(".bn").click(function()	{

		if ($front <= 0) {
			
		}
		else if ($front > 0) {
			
			var marginLeft = parseInt($(".slider_container").css("margin-left"))
			var sliderWidth = parseInt($(".slider_container").width())
			// alert(marginLeft + " and " + sliderWidth)
			// alert($(".state:not(:hidden)").length);
			if(marginLeft < sliderWidth)
			{
				$front -= 1;
				$back += 1;
				$(".slider_container").animate({
				"marginLeft" : "-=250px"
				});			
			}
			//document.getElementById("demo").innerHTML = $x + $opened;
		}
	});
 
	// $(".home").click(function()	{
	// 	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 	var obj = $(this)
	// 	$('html, body').animate({
	// 		scrollTop: $("#target_1").offset().top-100
	// 	}, 300,function(){
	// 		$("a",obj).addClass("selected")
	// 	});
	// });
	
	// $(".how_to_join").click(function()	{
	// 	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 	var obj = $(this)
	// 	$('html, body').animate({
	// 		scrollTop: $("#target_2").offset().top-75
	// 	}, 300,function(){
	// 		$("a",obj).addClass("selected")
	// 	});
	// });

	// $(".target_prizes").click(function()	{
	// 	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 	var obj = $(this)
	// 	$('html, body').animate({
	// 		scrollTop: $("#target_3").offset().top-85
	// 	}, 300,function(){
	// 		$("a",obj).addClass("selected")
	// 	});
	// });
	
	// $(".schedule").click(function()	{
	// 	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 	var obj = $(this)
	// 	$('html, body').animate({
	// 		scrollTop: $("#target_4").offset().top-85
	// 	}, 300,function(){
	// 		$("a",obj).addClass("selected")
	// 	});
	// });
	
	// $(".gallery").click(function()	{
	// 	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 	var obj = $(this)
	// 	$('html, body').animate({
	// 		scrollTop: $("#target_5").offset().top-70
	// 	}, 300,function(){
	// 		$("a",obj).addClass("selected")
	// 	});
	// });
	

	 $('.flexslider').flexslider({
        animation: "slide",
		slideshow: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
	/*
		var slideCount = $('.gallery_slider ul li').length;
	var slideWidth = $('.gallery_slider ul li').width();
	// var slideHeight = $('.gallery_slider ul li').height();
	var slideHeight = 520;
	var sliderUlWidth = slideCount * slideWidth;
	
	$('.gallery_slider').css({ width: slideWidth, height: slideHeight });
	
	$('.gallery_slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
	$('.gallery_slider ul li:last-child').prependTo('.gallery_slider ul');

	*/
	function moveLeft() {
		$('.gallery_slider ul').animate({
			left: + slideWidth
		}, 200, function () {
			$('.gallery_slider ul li:last-child').prependTo('.gallery_slider ul');
			$('.gallery_slider ul').css('left', '');
		});
	};

	function moveRight() {
		$('.gallery_slider ul').animate({
			left: - slideWidth
		}, 200, function () {
			$('.gallery_slider ul li:first-child').appendTo('.gallery_slider ul');
			$('.gallery_slider ul').css('left', '');
		});
	};

	$(".control_prev").click(function (e) {
		moveLeft();
		e.preventDefault();
	});

	$('.control_next').click(function (e) {
		moveRight();
		e.preventDefault();
	});
	
	$(".gallery_box").click(function()	{
		var $this = $(this);
		var model_text = $(this).children(".take_text").html();
		var model_image = $(this).find(".take_image").attr("data-target");
		var model_desc = $(this).find(".take_image").attr("data-desc");
		var model_loc = $(this).find(".take_image").attr("data-loc");
		document.getElementById("text_inherit").innerHTML = model_text;
		document.getElementById("image_inherit").innerHTML = "<img style='border-radius:10px;' src=" + model_image +" />";
		document.getElementById("modal_desc_inner").innerHTML = model_desc;
		document.getElementById("modal_loc").innerHTML = model_loc;
	});
	
	//$("not:(#modal.box.active > )".click(function() {
	/*
		$("body").click(function() {
		if(!$(this).hasClass('modal active content')){
			alert('clicked on something that has not the class theDIV');
		}
		
	});
	*/
	
	$(".nav a,.gotoprize").click(function(evn){
        
        evn.preventDefault();

        if(this.hash == "#prize-section")
        	$('html,body').scrollTo(this.hash, this.hash,{ gap: { y: -45}});
		else if(this.hash == "#schedule-section")
        	$('html,body').scrollTo(this.hash, this.hash,{ gap: { y: -140}});
       	else if(this.hash == "#gallery-section")
        	$('html,body').scrollTo(this.hash, this.hash,{ gap: { y: -140}});
		else if(this.hash == "#howtojoin-section")
        	$('html,body').scrollTo(this.hash, this.hash,{ gap: { y: -200}});
       	else
       		$('html,body').scrollTo(this.hash, this.hash);
    });
	
    $.scrollTo = $.fn.scrollTo = function(x, y, options){
	    if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);

	    options = $.extend({}, {
	        gap: {
	            x: 0,
	            y: 0
	        },
	        animation: {
	            easing: 'swing',
	            duration: 600,
	            complete: $.noop,
	            step: $.noop
	        }
	    }, options);

	    return this.each(function(){
	        var elem = $(this);
	        elem.stop().animate({
	            scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
	            scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
	        }, options.animation);
	    });
	};

	var aChildren = $(".nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values
    console.log(aArray)
	

	$(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("selected");
            } else {
                $("a[href='" + theID + "']").removeClass("selected");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$("nav li:last-child a").hasClass("nav-active")) {
                var navActiveCurrent = $(".nav-active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                $("nav li:last-child a").addClass("nav-active");
            }
        }
    });

	// $(".wrapper_one_content").bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
	// 	if (visiblePartY == 'top') {
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".how_to_join a").addClass("selected")
	// 	// top part of element is visible
	// 	}
	// 	else if (visiblePartY == 'bottom') {
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".how_to_join a").addClass("selected")
	//       	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".home a").addClass("selected")
	//     }
	//     else {
	//      	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".home a").addClass("selected")
	//     }
	// });


	// $('.steps-section').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
	// 	if (visiblePartY == 'top') {
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".how_to_join a").addClass("selected")
	// 	// top part of element is visible
	// 		$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".how_to_join a").addClass("selected")
	// 	}
	// 	else if (visiblePartY == 'bottom') {
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".how_to_join a").addClass("selected")
	//       	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".how_to_join a").addClass("selected")
	//     }
	//     else {
	//      	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".how_to_join a").addClass("selected")
	//     }
	// });

	// $('.schedule-section').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
	// 	if (visiblePartY == 'top') {
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".schedule a").addClass("selected")
	// 	// top part of element is visible
	// 		$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".schedule a").addClass("selected")
	// 	}
	// 	else if (visiblePartY == 'bottom') {
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".schedule a").addClass("selected")
	//       	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".schedule a").addClass("selected")
	//     }
	//     else {
	//      	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".schedule a").addClass("selected")
	//     }
	// });

	// $('.wrapper_three').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
	// 	if (visiblePartY == 'top') {
			
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".target_prizes a").addClass("selected")
	// 	// top part of element is visible
	// 		$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".target_prizes a").addClass("selected")
	// 	}
	// 	else if (visiblePartY == 'bottom') {
			
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".target_prizes a").addClass("selected")

	//       	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".target_prizes a").addClass("selected")
	//     }
	//     else {
	//     	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".target_prizes a").addClass("selected")
	//     }
	// });

	// $('.wrapper_four').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
	// 	if (visiblePartY == 'top') {
			
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".gallery a").addClass("selected")
	// 	// top part of element is visible
	// 		$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".gallery a").addClass("selected")
	// 	}
	// 	else if (visiblePartY == 'bottom') {
			
	// 		// $(".nav_2 li a,.nav li a").removeClass("selected")
	// 		// $(".gallery a").addClass("selected")
	//       	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".gallery a").addClass("selected")
	//     }
	//     else {
	//       // whole part of element is visible
	//     	$(".nav_2 li a,.nav li a").removeClass("selected")
	// 		$(".gallery a").addClass("selected")
	//     }
	// });

	
});