$(document).ready(function() {
    $(".hamburger").click(function(){
        $(".menu-main-menu-container").slideToggle(150);
        $(".toggle_container").toggleClass('white_bg');
    });
    $("body").css("display", "none");
    $("body").fadeIn(1000);
    $(".fredag-header").click(function(){
		$(this).next(".program").slideToggle(200);
	});
	$(".lordag-header").click(function(){
		$(this).next(".program").slideToggle(200);
	});
	$(".sondag-header").click(function(){
		$(this).next(".program").slideToggle(200);
	});
	if ($(window).width() < 667) {
	   $("a.bevis").attr("href", "/ravjaeger-bevis-mobile/");
	}
	else {
	   $("a.bevis").attr("href", "/rav-bevis/");
	}
});

$("#paamind_btn").click(function() {
    $('html, body').animate({
        scrollTop: $("#nyhedsbrev_cnt").offset().top
    }, 500);
});

$(".paamind_link").click(function() {
    $('html, body').animate({
        scrollTop: $("#nyhedsbrev_cnt").offset().top
    }, 500);
});

$("#scroll_btn").click(function() {
    if ($(window).width() < 768) {
	   $('html, body').animate({
        	scrollTop: $("#front_page_cnt2").offset().top
		}, 500);
	}
	else {
	   	$('html, body').animate({
        	scrollTop: $("#front_page_cnt2").offset().top + -80
		}, 500);
	}
});

function ravslibeffekt() {
    var a = document.getElementById("sliber");
    a.style.animation = "rotate_sliber 0.2s";
    a.style.webkitAnimation = "rotate_sliber 0.2s";
    a.style.animationIterationCount = "infinite";
    a.style.animationTimingFunction = "linear";
    var b = document.getElementById("ravhaand");
    b.style.transform = "translate(-115px)";
    var c = document.getElementById("glans");
    c.style.animation = "glans1_effekt 0.5s";
    c.style.webkitAnimation = "glans1_effekt 0.5s"
    c.style.animationIterationCount = "infinite";
    c.style.animationTimingFunction = "bounce";
    c.style.animationDelay = "1s";
    var d = document.getElementById("glans2");
    d.style.animation = "glans2_effekt 0.5s";
    d.style.animationIterationCount = "infinite";
    d.style.animationTimingFunction = "bounce";
    d.style.animationDelay = "1s";
}
function ravslibeffektOut() {
    var a = document.getElementById("sliber");
    a.style.animation = "rotate_sliber 8s";
    a.style.webkitAnimation = "rotate_sliber 8s";
    a.style.animationIterationCount = "infinite";
    a.style.animationTimingFunction = "linear";
    var b = document.getElementById("ravhaand");
    b.style.transform = "translate(0px)";
    var c = document.getElementById("glans");
    c.style.animationIterationCount = "1";
    c.style.backgroundColor = "rgba(0,0,0,0)";
    var c = document.getElementById("glans2");
    c.style.animationIterationCount = "1";
    c.style.backgroundColor = "rgba(0,0,0,0)";
}


function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        var deadline = new Date(Date.parse('sept 23, 2016'));
        initializeClock('clockdiv', deadline);  
