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

    $('#close_box').on('click', function () {

        $('#popup_body').slideUp( 'slow', function() {

            $('#close_box').hide();
            $('#open_box').show();
            $('#popup_title').addClass('popup_title_close');

        });

    });

    $('#open_box').on('click', function () {

        $('#popup_title').removeClass('popup_title_close');

        $('#popup_body').slideDown( 'slow', function() {
            $('#open_box').hide();
            $('#close_box').show();
        });

    });

    //members hop on
    $('#member_close_box').on('click', function () {

        $('#member_body').slideUp( 'slow', function() {

            $('#member_close_box').hide();
            $('#member_open_box').show();
            $('#member_title').addClass('popup_title_close');

        });

    });

    $('#member_open_box').on('click', function () {

        $('#member_title').removeClass('popup_title_close');

        $('#member_body').slideDown( 'slow', function() {
            $('#member_open_box').hide();
            $('#member_close_box').show();
        });

    });

    //programm
    $('#program_close_box').on('click', function () {

        $('#program_body').slideUp( 'slow', function() {

            $('#program_close_box').hide();
            $('#program_open_box').show();
            $('#program_title').addClass('popup_title_close');

        });

    });

    $('#program_open_box').on('click', function () {

        $('#program_title').removeClass('popup_title_close');

        $('#program_body').slideDown( 'slow', function() {
            $('#program_open_box').hide();
            $('#program_close_box').show();
        });

    });

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

