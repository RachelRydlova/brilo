var subsubmenu = (function() {

    var menuItem = $('.submenu ul > li > a'),
        headerSelector = '.header',
        submenuSelector = '.sub-submenu';

    var config = {
        activeClass: 'has-active-submenu',
        openedClass: 'is-active',
        openTimeout: 150,
        closeTimeout: 150
    };

    var isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

    var isActive = false;
    var openTimeout;
    var closeTimeout;

    var activate = function () {
        isActive = true;
        $(headerSelector).addClass(config.activeClass);
    };

    var deactivate = function () {
        isActive = false;
        $(headerSelector).removeClass(config.activeClass);
    };

    var open = function (submenu) {
        $(submenuSelector).removeClass(config.openedClass);
        submenu.addClass(config.openedClass);
    };

    var close = function () {
        $(submenuSelector).removeClass(config.openedClass);
    };

    var init = function () {

        menuItem.on('click', function(e){
            var submenu = $(this).siblings(submenuSelector);

            if (isActive) {
                closeTimeout = window.setTimeout(function(){
                    close();

                    if (submenu.length) {
                        open(submenu);
                    } else {
                        deactivate();
                    }
                }, config.closeTimeout);
            }

            if (!isActive) {
                close();

                if (submenu.length) {
                    openTimeout = window.setTimeout(function(){
                        activate();
                        open(submenu);
                    }, config.openTimeout);
                } else {
                    deactivate();
                }
            }
        });

        // touch devices
        menuItem.click(function(e){
            var submenu = $(this).siblings(submenuSelector);

            if (isTouch && submenu.length) {
                e.preventDefault();
                close();
            }
        });

        $('body, .sub-submenu').on('click', function(){
            close();
            deactivate();
        });

        $('.header__nav-primary').on('touchstart', function(e){
            e.stopPropagation();
        });
    };

    return {
        init: init
    }
})();
