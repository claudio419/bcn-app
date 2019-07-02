<?php
    include '../config/env_config.php';

    if (ENV === 'test') {
        ?>
        <div class="container bg-danger">
            <h1 class="text-light center">TEST</h1>
        </div>
        <?php

    }

    if (ENV === 'dev') {
        ?>
        <div class="container bg-success">
            <h1 class="text-light center">DEV</h1>
        </div>
        <?php

    }
?>

<div class="container header">

    <div class="home_header">
        <h1 class="home_title">¡Hola Barcelona!</h1>
    </div>

    <nav role="navigation">
        <div id="menuToggle">

            <!-- burger menu with css-->
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
                <a class="under_line_none" href="home.php"><li>Startseite</li></a>
                <a class="under_line_none" href="program.php"><li>Programm</li></a>
                <a class="under_line_none" href="flight_bcn.php"><li>Anreise</li></a>
                <a class="under_line_none" href="flight_muc.php"><li>Abreise</li></a>
                <a class="under_line_none" href="hotel.php"><li>Unser Hotel</li></a>
                <a class="under_line_none" href="club.php"><li>Club-Vorschläge</li></a>
                <a class="under_line_none" href="orga.php"><li>Orga Team</li></a>
                <a class="under_line_none" href="logout.php"><li>abmelden</li></a>

            </ul>

        </div>
    </nav>

</div>
