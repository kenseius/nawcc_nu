/**
  * Strapless JavaScript
  *
  * @public
  *
  * @author Corey Smith
  * @description Strapless Javascript.  Temporarily setup with an init function that can be involked to apply all js to the page.
  **/

(function Strapless(window, document, undefined) {
    'use strict';

    var selectors = {
        checkbox : 'input[type="checkbox"]'
    }

    var classes = {
        accordion       : 'accordion',
        linkActive      : 'active',
        accordionOpen   : 'open',
        buttonList      : 'buttonList'
    };

    /**
     * The name says it all
     *
     * @param {HTMLElement} selector
     */
    var hasParentThatMatchesSelector = function(parent, selector) {
        return parent !== undefined &&
            parent.className.indexOf(selector) > -1;
    }

    /**
     * Collapse all accordions and get ready for a new one to open
     */
    var collapseAccordions = function(parent) {
        if (hasParentThatMatchesSelector(parent, classes.buttonList)) {
            // if so, prevent accordion from closing
            return;
        }

        var accordions = window.Strapless.leftNavLinkGroup.getElementsByClassName(classes.accordion);
        for (var index = 0; index < accordions.length; index++) {
            var element = accordions[index];
            var checkbox = element.querySelector(selectors.checkbox);
            checkbox.checked = true;
        }
    }

    /**
     * Remove active class from all links in left nav
     */
    var deactivateLinks = function() {
        var individualLinks = window.Strapless.leftNavLinkGroup.getElementsByTagName('a');
        for (var index = 0; index < individualLinks.length; index++) {
            var element = individualLinks[index];
            element.classList.remove(classes.linkActive);
        }
    };

    /**
     * Adds active class to targeted anchor element
     *
     * @param {HtmlElement} activeLink
     */
    var activateLink = function(activeLink) {
        activeLink.className += (' ' + classes.linkActive);

        var parent = activeLink.parentNode;
        // check to see the activeLink is a member of an accordion
        if (hasParentThatMatchesSelector(parent, classes.accordion)) {
            // if so, expand the accordion
            parent.querySelector(selectors.checkbox).checked = false;
        }
    };

    window.Strapless = {
        leftNavLinkGroup: null,

        /**
          * @public
          *
          * @description initialize Strapless closure and all common logic
          **/
        init: function() {
            // init public properties
            this.leftNavLinkGroup = document.getElementsByClassName('tabs')[0];

            // init top nav controls
            var $nav = document.getElementsByTagName('nav')[0];
            // var $navMenu = $nav.querySelector('.links')
            var $navTrigger = document.getElementsByClassName('nav-trigger')[0];

            $navTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                console.log($navMenu);
                $navMenu.classList.toggle(classes.linkActive);
                $navTrigger.classList.toggle(classes.linkActive);
            }, false);

            // init left nav controls
            // performance null check
            if (window.location.hash) {
                var thisPageHash = window.location.hash,
                    thisViewLink = this.leftNavLinkGroup.querySelector('[href="' + thisPageHash + '"]');
                if (thisViewLink !== undefined) {
                    deactivateLinks();
                    activateLink(thisViewLink);
                }
            }

            this.leftNavLinkGroup.addEventListener('click', function(event) {
                deactivateLinks();
                var targetElement = event.target || event.srcElement;

                // only set anchors to active
                if (targetElement.nodeName === 'A')
                    collapseAccordions(targetElement.parentNode);
                    activateLink(targetElement);
            }, false);

            // // TABS
            $('.tabgroup > div').hide();
            $('.tabgroup > div:first-of-type').show();
            $('.tabs a:not(.strapless_accordion_subnav)').click(function(e){
            e.preventDefault();
                var $this = $(this),
                    tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                    // others = $this.closest('li').siblings().children('a'),
                    // others = $this.siblings('a'),
                    // otherse = $this.siblings('.accordion').children('a'),
                    // otherser = $this.closest('.accordion').siblings().children('a'),
                    // othersers = $this.closest('.accordion').siblings('a'),
                    target = $this.attr('href');
                // others.removeClass('active');
                // otherse.removeClass('active');
                // otherser.removeClass('active');
                // othersers.removeClass('active');
                $this.addClass('active');
                $(tabgroup).children('div').hide();
                $(target).show();
            });



        }

    };
})(window, document);
