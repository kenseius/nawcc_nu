~~~javascript
$(document).ready(function() {

    //this measures how far down the sticky element is from the top
    var stickyTop = $(".home_nav");

    if (stickyTop)
        stickyTop = stickyTop.offset().top;

    //whenever the user scrolls, measure how far we have scrolled
    $(window).scroll(function() {
        var windowTop = $(window).scrollTop();

        //check to see if we have scrolled past the original location of the sticky element
        if (windowTop > stickyTop) {

            //if so, change the sticky element to fixed positioning
            $(".home_nav").css({
                "background-color": "#333",
            });
            $(".logo").css({
                "display": "block",
            });
        } else {
            $(".home_nav").css({
                "background-color": "transparent"
            });
            $(".logo").css({
                "display": "none",
            });
        }
    });

});
~~~

~~~html
<section class="hero hero_home">
    <!-- hero content --> 
</section>
~~~


In global.scss: 

~~~css

body { padding-top: $navHeight; }

~~~

and in topnav.scss: 

~~~css

.nav {

    &.home_nav {
        background: transparent;
        border: 0;
        .logo {display: none;}
    }
}

~~~