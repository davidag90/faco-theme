jQuery(document).ready(function ($) {
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            autoplay:           true,
            autoplayHoverPause: true,
            dots:               false, 
            nav:                false,
            loop:               true,
            margin:             10,
            responsiveClass:    true,
            responsive:{
                0:{
                    items:3,
                    nav:false
                },
                768:{
                    items:4
                },
                992:{
                    items:6
                },
                1200:{
                    items:7
                },
                1400:{
                    items:8
                }
            }
        });
    });

    $(document).ready(function(){
        $('.list-group > li > a').unwrap().addClass('list-group-item');

        $('.list-group').each(function(){
            $(this).replaceWith( '<div class="list-group">' + $(this).html() + '</div>' );
        });

        $('.list-group-item').hover(
            function() {
                $(this).addClass('list-group-item-primary');
            },
            function() {
                $(this).removeClass('list-group-item-primary');
            }
        );
    });

    $(document).ready(function(){
        $('#descarga-estatuto > a').removeClass('wp-block-button__link').unwrap().addClass('btn btn-danger mt-3 mb-5').unwrap();
    });

    $(document).ready(function(){
        var link_base, caption;

        $('.links-colegios > div > .wp-block-image > figure').each(function(index) {
            link_base = $(this).children('a').attr('href');

            caption = $(this).children('figcaption');

            caption.addClass('text-center');
            
            caption.wrapInner('<a class="link-dark" href="' + link_base + '" target="_blank"></a>');
        });
    });
}); // jQuery End
