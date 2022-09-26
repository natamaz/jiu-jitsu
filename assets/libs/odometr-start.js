function hide(elem) {
    gsap.set(elem, {autoAlpha: 0});
}
document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
        hide(elem); // assure that the element is hidden when scrolled into view
        ScrollTrigger.create({
            trigger: elem,
            onEnter: function() { animateFrom(elem) },
            onEnterBack: function() { animateFrom(elem, -1) },
            onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
        });
    });
});
    let splitIntro = gsap.timeline({
        scrollTrigger: {
            trigger: ".banner",
            endTrigger: ".banner",
            pin: true,
            start: "bottom",
            //end: "+=500", // end after scrolling 500px beyond the start
            scrub: 1,
            toggleActions: 'play reverse none reverse',
            //markers: true,
            snap: {
                snapTo: 1 // snap to the closest label in the timeline

            }
        }
    });
   let splitIntro2 = gsap.timeline({
    scrollTrigger: {
        trigger: ".container-section",
        endTrigger: ".container-section",
        start: "top +=200",
        end: "bottom",

    }

});
    splitIntro2.to(".current-year", {
        opacity: 1,
        duration:1
    });
    function animateFrom(elem, direction) {
        direction = direction || 1;
        var x = 0,
            y = direction * 100;
        if(elem.classList.contains("gs_reveal_fromLeft")) {
            x = -100;
            y = 0;
        } else if (elem.classList.contains("gs_reveal_fromRight")) {
            x = 100;
            y = 0;
        }
        elem.style.transform = "translate(" + x + "px, " + y + "px)";
        elem.style.opacity = "0";
        gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
            duration: 1.25,
            x: 0,
            y: 0,
            autoAlpha: 1,
            ease: "expo",
            overwrite: "auto"
        });
    }

var postion = $('.brake').offset().top,
    height = $('.brake').height();
$(document).on('scroll', function (){
    var scroll = $(document).scrollTop();
    if(scroll  > postion && scroll < (postion + height) ) {
        $('.current-year').css({'opacity' : '0'});
    }else {
        $('.current-year').css({'opacity' : '1'});

    }
})
// odometr
let yearOdometr = document.querySelector('.odometr');
let od = new Odometer({
    el: yearOdometr,
    value: 1460,
    format: 'dddd',
    // animation: 'count',

});
if ($(".odometr").length) {
    let sectionIds = $('.section');
    let screenHeight = $(window).height() / 2;
    $(document).scroll(function () {
        sectionIds.each(function () {
            let sectionIdYear = '#' + $(this).attr('id');
            let containerOffset = $(sectionIdYear).offset().top;
            let containerHeight = $(sectionIdYear).innerHeight();
            let containerBottom = containerOffset + containerHeight;
            let scrollPosition = $(document).scrollTop();
            if (scrollPosition < containerBottom - screenHeight && scrollPosition >= containerOffset - screenHeight) {
                $('.odometr').html($(this).data('year'));
            }
        });
    });
}
// odometr end
