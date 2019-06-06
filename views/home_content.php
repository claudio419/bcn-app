<?php
    $firstname = (isset($_COOKIE['firstname']) && !empty($_COOKIE['firstname'])) ? $_COOKIE['firstname'] : '';
?>


<div class="container home_body">
    <div>
        <h1>Hallo <?php echo $firstname; ?></h1>
        <p>
            Danke, dass Du Dich für ein Programm für Samstagnachmittag entschieden hast. Die Umfrage ist nun geschlossen.
            In den nächsten Wochen werden wir die Webseite immer wieder aktualisieren, deswegen hast Du sie hoffentlich
            schon in Deinen Lesezeichen gespeichert.
        </p>
        <p>
            Du wirst unter "Programm" Dein persönliches Barcelona Programm finden. Aktuell buchen wir gerade die
            verschiedenen Aktivitäten. Bis dahin findest Du dort interessante Fakten über Barcelona, die Du vielleicht noch nicht kanntest.
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
        <a href="program_extra.php"><div class="btn_link btn_left" >Programm</div></a>
<!--        <div class="btn_link btn_right">Restaurants</div>-->
        <a href="orga.php"><div class="btn_link btn_right">Orga-Team</div></a>
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