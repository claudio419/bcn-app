<?php
    $firstname = (isset($_COOKIE['firstname']) && !empty($_COOKIE['firstname'])) ? $_COOKIE['firstname'] : '';
?>


<div class="container home_body">
    <div>
        <h1>Hallo <?php echo $firstname; ?></h1>
        <p>
            Juhu - eine neue Seite auf unserer Barcelona Webseite ist gerade online gegangen.
            Du findest jetzt unter "Unser Hotel" alle wichtigen Informationen zu dem Hotel wo wir wohnen werden.
        </p>
        <p>
            Sobald wir Rückmeldung von dem Hotel zu unserem Zimmern bekommen haben, wirst du dort auch deinen Zimmerpartner finden.
            Aktuell kannst Du Dir anschauen, wo das Hotel ist und was alles in der Umgebung dieses Hotels ist.

        </p>
        <p>
            Dein Orga-Team
        </p>
    </div>

    <div class="separator_gray"></div>
    <div class="container_home_h4">
        <h4>Wichtigste Links</h4>
    </div>

    <div class="container_link_top">
        <a href="program_extra.php"><div class="btn_link btn_right" >Programm</div></a>
<!--        <div class="btn_link btn_right">Restaurants</div>-->
        <a href="Hotel.php"><div class="btn_link btn_left">Hotel</div></a>
    </div>
    <div class="container_link_button">
        <a href="flight_bcn.php"><div class="btn_link btn_left">Anreise</div></a>
        <a href="flight_muc.php"><div class="btn_link btn_right">Abreise</div></a>
    </div>

    <div class="separator_gray"></div>
    <div class="home_img_container padding_top_15">
        <img src="public/img/home_bcn.jpg" class="home_img border_radius_10">
    </div>
    <div class="separator_gray"></div>
    <div class="container_home_h4">
        <h4>Dein Orga - Team</h4>
    </div>

    <?php include '../views/orga_team.php';?>

</div>
