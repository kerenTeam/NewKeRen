 

	$(function() {
	$(".back-top").click(function() {
	$("html,body").animate({
	scrollTop: $("#back-top").offset().top
	}, 1200);
	})
	$(".code2").hide();
	$(".code").hide();
	$(".erweima").mouseover(function() {
	$(".code2").fadeIn(300);
	});
	$(".erweima").mouseleave(function() {
	$(".code2").fadeOut(300);
	});
	$(".krphone").mouseover(function() {
	$(".code").fadeIn(300);
	});
	$(".krphone").mouseleave(function() {
	$(".code").fadeOut(300);
	});

$(document).scroll(function() {
	$(".back-top").css({
		display: 'block'
	});
	var scrollTop = $(document).scrollTop(),
	bodyHeight = $(window).height();
	if (scrollTop > bodyHeight) {
	$('.back-top .gotop').css('display', 'block');
	} else {
	$('.back-top .gotop').css('display', 'none');
	}
	})

	});


