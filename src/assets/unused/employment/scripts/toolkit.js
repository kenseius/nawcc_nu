/**
 * Toolkit JavaScript
 */


/**
  *
  * GENERAL JS STUFF
  *
  * 1. EXTERNAL URLS
  * 2. MOBILE NAV TRIGGER (old code)
  *     - APPLY .active TO NAV HYPERLINKS
  * 3. TABS
  * 4. MODALS
  * 5. MOBILE NAV (new but not working yet)
  *
  **/


// $(document).ready(function(){
//     // all external urls should open in a new window
//     $('a[href^="http"]:not([href*="' + document.domain + '"])').attr('target', '_blank').attr('rel', 'noopener noreferrer');
// }); // document ready function

// NAVIGATION
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 100
        }, 1000);
        return false;
      }
    }
  });
});

$('.nav-trigger').click(function(){
   $('#nav-menu').toggleClass('active');
})

$('#nav-menu li a').click(function(){
  $('#nav-menu li').removeClass('active');
  $(this).parent('li').addClass('active');
  $('#nav-menu').toggleClass('active');
});

$(document).ready(function(){

  $(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('.anchor').each(function(i) {
            if ($(this).position().top <= windscroll + 160) {
                //was + 360
                $('.nav li.active').removeClass('active');
                $('.nav li').eq(i+1).addClass('active');
                //console.log(i+$(this).text());
            }
        });

    } else {
        $('.nav li.active').removeClass('active');
        $('.nav a:first').addClass('active');
    }

  }).scroll();

}); // document ready function


// TABS

$('.tabgroup > div').hide(); // old: .tabgroup > div
$('.tabgroup > div:first-of-type').show(); // old: tabgroup > div:first-of-type
$('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();

})


// MODAL
var modal = document.querySelector("#modal");
var modalOverlay = document.querySelector("#modal-overlay");
var closeButton = document.querySelector("#close-button");
var openButton = document.querySelector("#open-button");

closeButton.addEventListener("click", function() {
    modal.classList.toggle("closed");
    modalOverlay.classList.toggle("closed");
});

openButton.addEventListener("click", function() {
    modal.classList.toggle("closed");
    modalOverlay.classList.toggle("closed");
});
