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
    <div class="topnav" id="Topnav">
        <a href="javascript:void(0);" class="icon" onclick="menu()">
            <i class="fa fa-bars hamburger_icon"></i>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="menu()">
            <i class="fa fa-times close_icon" aria-hidden="true"></i>
        </a>
        <a href="home.php" class="active">Startseite</a>
        <a href="program_extra.php">Programm</a>
<!--        <a href="program.php">Umfrage</a>-->
        <a href="flight_bcn.php">Anreise</a>
        <a href="flight_muc.php">Abreise</a>
        <!--a href="#about">Unser Hotel</a-->
        <a href="orga.php">Orga Team</a>
        <a href="logout.php">Abmelden</a>

    </div>

</div>