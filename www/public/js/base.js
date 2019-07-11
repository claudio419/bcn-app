function menu() {
    var x = document.getElementById("Topnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

$(document).ready(function() {

    $('#close_box').hide();
    $('#popup_body').hide();
    $('#member_body').hide();
    $('#member_close_box').hide();
    $('#program_body').hide();
    $('#program_close_box').hide();
    $('#tipp_body').hide();
    $('#sun_icon').hide();

    $('#popup').on('click', function () {

        if ($('#popup_title').hasClass('popup_title_close')) {

            $('#popup_title').removeClass('popup_title_close');

            $('#popup_body').slideDown( 'slow', function() {
                $('#open_box').hide();
                $('#close_box').show();
            });

        } else {

            $('#tipp').addClass('popup_title_close');

            $('#popup_body').slideUp( 'slow', function() {

                $('#close_box').hide();
                $('#open_box').show();
                $('#popup_title').addClass('popup_title_close');

            });
        }
    });

    //members hop on
    $('#hopon_hopoff').on('click', function () {

        if ($('#member_title').hasClass('popup_title_close')) {

            $('#member_title').removeClass('popup_title_close');
            $('#member_body').slideDown( 'slow', function() {
                $('#member_close_box').show();
                $('#member_open_box').hide();
            });

        } else {

            $('#member_body').slideUp( 'slow', function() {
                $('#member_close_box').hide();
                $('#member_open_box').show();
                $('#popup_title').addClass('popup_title_close');
            });
            $('#member_title').addClass('popup_title_close');

        }
    });


    //programm

    $('#program').on('click', function () {

        if ($('#program_title').hasClass('popup_title_close')) {

            $('#program_title').removeClass('popup_title_close');
            $('#program_body').slideDown( 'slow', function() {
                $('#program_open_box').hide();
                $('#program_close_box').show();
            });

        } else {

            $('#program_body').slideUp( 'slow', function() {
                $('#program_close_box').hide();
                $('#program_open_box').show();
                $('#program_title').addClass('popup_title_close');
            });
            $('#program_title').addClass('popup_title_close');

        }
    });

    //tipp

    $('#tipp').on('click', function () {

        if ($('#tipp').hasClass('tipp_hide')) {

            $('#tipp').removeClass('tipp_hide');
            $('#tipp_body').show();
            $('#sun_icon').show();
        } else {
            $('#tipp').addClass('tipp_hide');
            $('#tipp_body').hide();
            $('#sun_icon').hide();
        }
    });
});

