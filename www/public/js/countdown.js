// Set the date we're counting down to
var countDownDate = new Date("Jul 12, 2019 12:10:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    if (distance >= 0) {

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;

    }



    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);

        document.querySelectorAll('.count_down').forEach(function(el) {
            el.style.display = 'none';
        });

    }
}, 1000);