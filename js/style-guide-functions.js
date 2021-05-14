(function($) {

    $('.nav--primary li:first').addClass('current-menu-item');

    // Toggle dark mode

    $('.tdsg__toggle').click(function() {
        $(this).toggleClass('tdsg__toggle--active');
        $('.style-guide-body').toggleClass('bg--default is-dark');
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
    });

    // RGBA to Hex

    var hexDigits = new Array
            ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

    //Function to convert rgb color to hex format
    function rgb2hex(rgb) {
     rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
     return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    function hex(x) {
      return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
     }

     // Add hex colours to palette 

     $('.tdsg-palette__item').each(function(){
        var colour = $(this).css('backgroundColor');        
        var hex = rgb2hex(colour);        
        $(this).next('.tdsg-palette__item__heading').text(hex);
     });

})(jQuery);