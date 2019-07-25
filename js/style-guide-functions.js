(function($) {

    $('.nav--primary li:first').addClass('current-menu-item');

    // Toggle dark mode

    $('.tdsg__toggle').click(function() {
        $(this).toggleClass('tdsg__toggle--active');
        $('.style-guide-body').toggleClass('bg--primary is-dark');
    });

    // Toggle navigation

    $('.js-tdsg-toggle').click(function() {
        $(this).toggleClass('is-active');
        $('.tdsg-overlay').toggleClass('is-active');
        $('.tdsg-nav').toggleClass('is-active');
    });

    // Build dynamic nav

    $('.tdsg-section').each(function() {
        var title = $(this).data('title');
        var anchor = $(this).attr('id');
        $('.nav--tdsg').append('<li><a href="#' + anchor + '">' + title + '</a></li>');
    });

    $('.nav--tdsg li:first-child').addClass('is-active'); // Make first item active

    // Highlight nav items on scroll

    // Cache selectors
    var topMenu = $(".tdsg-nav .nav"),
        topMenuHeight = $('.tdsg-header').outerHeight(),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });

    // Bind to scroll
    $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems
            .parent().removeClass("is-active")
            .end().filter("[href='#" + id + "']").parent().addClass("is-active");
    })

    // Get hex colours of elements

    $.cssHooks.backgroundColor = {
        get: function(elem) {
            if (elem.currentStyle)
                var bg = elem.currentStyle["backgroundColor"];
            else if (window.getComputedStyle)
                var bg = document.defaultView.getComputedStyle(elem,
                    null).getPropertyValue("background-color");
            if (bg.search("rgb") == -1)
                return bg;
            else {
                bg = bg.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
                function hex(x) {
                    return ("0" + parseInt(x).toString(16)).slice(-2);
                }
                return "#" + hex(bg[1]) + hex(bg[2]) + hex(bg[3]);
            }
        }
    }

    $('.tdsg-palette__item').each(function(){
        var colour = $(this).css('backgroundColor');
        $(this).append('<span>' + colour + '</span>');
    });

    // Get font size / line height

    $('.js-tdsg-typography').each(function(){
        var fontSize      = parseInt($(this).css('font-size'));
        var lineHeight    = parseInt($(this).css('line-height'));
        var marginBottom  = parseInt($(this).css('margin-bottom'));
        var letterSpacing = $(this).css('letter-spacing');
        $(this).after('<code class="tdsg-css">Font Size: ' + fontSize + 'px / Line Height: ' + lineHeight + 'px / Margin Bottom: ' + marginBottom + 'px / Letter Spacing: ' + letterSpacing + '</code>');
    });

})(jQuery);