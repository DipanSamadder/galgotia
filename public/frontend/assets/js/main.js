$(document).ready(function(){

    $('.owl-carousel.tabslider5').owlCarousel({
    
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            },
            1600:{
                items:3
            }
        }
    })
    $('.owl-carousel.tabslider3').owlCarousel({
    
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1600:{
                items:5 
            }
        }
    })
    $('.owl-carousel.researchadvm').owlCarousel({

        margin: 20,
        loop: false,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4.5
            },
            
        }
    })
    $('.owl-carousel.tabslider1').owlCarousel({
    
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            },
            1600:{
                items:8 
            }
        }
    })
    
    
    $('.owl-carousel.tabslider2').owlCarousel({
        
        margin:20,
        stagePadding: 10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1,
                margin:10,
            },
            600:{
                items:2,
                margin:10,
            },
            1000:{
                items:3
            },
            1900:{
                items:4
            }
        }
    })
    
    

    var owl = $('.navDrop');        
    owl.owlCarousel({
        loop:false,
        stagePadding: 10,
        margin:10,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:2,
                margin:5,
                stagePadding: 5
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    });

    var owl = $('.tstDivCrow');        
    owl.owlCarousel({
        loop:false,
        center: true,
        stagePadding: 10,
        margin:10,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    var owl = $('.allCrosal');        
    owl.owlCarousel({
        loop:false,
        stagePadding: 10,
        margin:10,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3,
                stagePadding: 20,
                margin:20
            },
            1600:{
                items:4,
                stagePadding: 20,
                margin:20,
            }
        }
    });

    var owl = $('.lpaCrousal');        
    owl.owlCarousel({
        loop:false,
        stagePadding: 10,
        margin:10,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    var owl = $('.schlnewsCrosal');        
    owl.owlCarousel({
        loop:false,
        stagePadding: 10,
        margin:10,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                stagePadding: 20,
                margin:20
            },
            1000:{
                items:3,
                stagePadding: 20,
                margin:20
            }
        }
    });

    // remove all .active classes when clicked anywhere
    hide = true;
    $('body').on("click", function () {
        if (hide) $('header .nav-link').removeClass('active');
        hide = true;
    });

    // add and remove .active
    $('body').on('click', 'header .nav-link', function () {

        var self = $(this);

        if (self.hasClass('active')) {
            $('header .nav-link').removeClass('active');
            // $('header .nav-link').parent().parent().css('margin-bottom','30px');
            return false;
        }

        $('header .nav-link').removeClass('active');

        self.toggleClass('active');
        // self.parent().parent().css('margin-bottom','230px');
        hide = false;
        
    });
    
    // $('.nav-link').click(function(){
    //     $(this).addClass('active');
    //     $('.nav-link.active').siblings().slideToggle();
    //     $(this).parent('li').siblings().children('a').removeClass('active');
    // });
    // // $(document).on("click", function (e) {
    // //     if ($(e.target).is(".nav-link") === false) {
    // //         $(".nav-link").removeClass("wide");
    // //     }
    // // });


    $('.navbar-toggler').click(function(){
        
        var self = $('body');

        if (self.hasClass('active')) {
            $(self).removeClass('active');
            return false;
        }
        self.toggleClass('active');
    });

    $('.striveColmn .viewAll').click(function(){
        $(this).siblings().css('max-height','initial')
    })

    $('.banner.hm').parent('body').children('header').addClass('home');
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    

    function checkPosition(){
    
        if($(window).width() < 767){
            $('.tabCntDiv').click(function(){
                $(this).siblings().slideToggle();
            });
            $('.abtPils.nav-pills .nav-link').click(function(){
                var textThis = $(this).html();
                $('.tabCnt').html(textThis);
                $(this).parent().slideUp();
            })
        }
    }
    $(document).load($(window).bind("resize", checkPosition()));



});

