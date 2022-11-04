(function($) {
    window.onload = function() {
        $(document).ready(function() {
            backToTop();
            menuMobile();
            headerSearch();
            validate();
        });
    };
})(jQuery);


function backToTop() {
    var backToTop = document.querySelector(".backToTop");

    if (backToTop == null) {
        return 0;
    } else {
        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 10) {
                backToTop.classList.add("show__backToTop");
            } else {
                backToTop.classList.remove("show__backToTop");
            }
        });
        backToTop.addEventListener("click", function() {
            window.scroll({
                top: 0,
                behavior: "smooth"
            });
        });
    }
}

function menuMobile() {
    $('.header-bars').click(function() {
        $(this).toggleClass('clicked');
        $('.header-menu').toggleClass('active');
    })

}

function headerSearch() {
    $('.header-search-icon').click(function() {
        $('.overlay').addClass('overlay-active');
        $('.header-search').addClass('active');
        setTimeout(function() { $('.header-search input').focus() }, 100);

    })

    $('.overlay').click(function() {
        $('.header-search').removeClass('active');
        $(this).removeClass('overlay-active');
    })

}

function validate() {
    var commentForm = $("#commentform").validate({
        rules: {
            author: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            comment: {
                required: true,
            }
        },
        messages: {
            author: $('.post-comment').data('validate-required'),
            email: $('.post-comment').data('validate-email'),
            comment: $('.post-comment').data('validate-required'),
        },

    });
}