/// <reference path="../typings/jquery/jquery.d.ts"/>
$(document).ready(function() {
    $window = $(window);

    $('section[data-type="background"]').each(function() {

        var $scroll = $(this);

        $("#main").scroll(function() {
            var yPos = -($("#main").scrollTop() / $scroll.data('speed'));
            var coords = '50% ' + yPos + 'px';

            $scroll.css({
                backgroundPosition: coords
            });
        });
    });

    $("#toggler").click(function() {
        $(this).toggleClass('active, inactive');
    });

  
    // hide .navbar first
    $("#main").scroll(function() {

        var navbarColor = "26,188,156";

        //color attr for rgba
        var smallLogoHeight = $('.small-logo').height();
        var bigLogoHeight = $('.header').height();


        var smallLogoEndPos = 0;
        var smallSpeed = (smallLogoHeight / bigLogoHeight);

        var ySmall = ($("#main").scrollTop() * smallSpeed);

        var smallPadding = navbarHeight - ySmall;

        if (smallPadding > navbarHeight) {
            smallPadding = navbarHeight + 5;
        }
        if (smallPadding < smallLogoEndPos) {
            smallPadding = smallLogoEndPos + 5;
        }
        if (smallPadding < 0) {
            smallPadding = 5;
        }

        $('.small-logo-container ').css({
            "padding-top": smallPadding
        });

        var navOpacity = $(this).scrollTop() / $('#banner').height();

        var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
        var webkitgradient = " -webkit-gradient(linear, left bottom, left top, color-stop(0, " + navBackColor + "), color-stop(1, #1abc9c))";
        var mozgradient = "-moz-linear-gradient(center bottom, " + navBackColor + " 0%, #1abc9c 100%);";



        $('.navbar').css({
            "background": webkitgradient
        });


        var shadowOpacity = navOpacity * 0.4;
        if (ySmall > 1) {
            //$('.navbar').css({"box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"});
        } else {
            //$('.navbar').css({"box-shadow": "none"});
        }
    });


    // Live Search
    // On Search Submit and Get Results
    function searchBar() {
        var query_value = $('#searchBar').val();

        $.ajax({
            type: "POST",
            url: "/techs/searchBar.php",
            data: {
                query: query_value
            },
            cache: false,
            success: function(html) {
                console.log(html);
                $("#searchBarResults").html(html);
            },
            fail: function(html) {
                console.log(html);
            },
            always: function(html) {
                console.log(html);
            }
        });
    }

    $("#searchBar").on("keyup", function(e) {
        // Set Timeout
        clearTimeout($.data(this, 'timer'));

        // Set Search String
        var search_string = $(this).val();


        $("ul#results").fadeIn();
        $('h4#results-text').fadeIn();
        $(this).data('timer', setTimeout(searchBar, 100));

    });
    $("#searchBarResults").on("click", function(e) {
        e.stopPropagation();
    });
    $('#searchBarForm').submit(function(e) {
        e.preventDefault();
    });

    var navbarHeight = $('.navbar').height();
    
    $('.popper').popover({
        container: 'body',
        html: true,
        content: function () {
            return $(this).next('.popper-content').html();
        }
    });
});