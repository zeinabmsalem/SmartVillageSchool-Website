/*global $*/
/********** Loader  ********/
$(window).on('load', function () {
    'use strict';
    $('.loader').fadeOut(2500, function () {
        $(this).remove();
    });
});

$(function () {
    'use strict';
    /* Add and remove active class of navbar */
    // $('.navbar-nav .nav-item').click(function () {
    //     $(this).addClass('active').siblings().removeClass('active');
    // });

    /* Search navbar */
    var submitIcon = $('.sb-icon-search'),
        submitInput = $('.sb-search-input[type="search"]'),
        searchBox = $('.sb-search'),
        isOpen = false;

    $(document).mouseup(function () {
        if (isOpen == true) {
            submitInput.val('');
            $('.sb-search-submit').css('z-index', '-999');
            submitIcon.click();
        }
    });

    submitIcon.mouseup(function () {
        return false;
    });

    searchBox.mouseup(function () {
        return false;
    });

    submitIcon.click(function () {
        if (isOpen == false) {
            searchBox.addClass('sb-search-open');
            isOpen = true;
        } else {
            searchBox.removeClass('sb-search-open');
            isOpen = false;
        }
    });



    /* Nice Scroll */
    $("body").niceScroll();

    /* Admission input */
    $('.admission input').not('input[type="submit"]').val('');

    $('.input-effect input').focusout(function () {
        if ($(this).val() != '') {
            $(this).addClass('has-content');
        } else {
            $(this).removeClass('has-content');
        }
    })

    /* Map */
    // if HTML DOM Element that contains the map is found...
    if (document.getElementById('map-canvas')) {

        // Coordinates to center the map
        var myLatlng = new google.maps.LatLng(52.525595, 13.393085);

        // Other options for the map, pretty much selfexplanatory
        var mapOptions = {
            zoom: 14,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // Attach a map to the DOM Element, with the defined settings
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    }
});