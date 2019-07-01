<?php
    $firstname = (isset($_COOKIE['firstname']) && !empty($_COOKIE['firstname'])) ? $_COOKIE['firstname'] : '';
?>

<div class="container home_body">
    <div>
        <h1>Hallo <?php echo $firstname; ?></h1>
        <p>
            es gibt wieder ein neues Update und es sind nur mehr wenige Wochen bis wir starten! Unter Programm findest
            Du nun den Ablauf des Wochenendes.

        </p>
        <p>
            Besonders wichtig lies Dir den Hinweis durch und entscheide ob Du eine Auslandskrankenversicherung abschließen willst.
        </p>
        <p>
            Dein Orga-Team
        </p>
    </div>

    <div>
        <div class="popup toogle">
            <div class="popup_title popup_title_close" id="popup_title">
                Reiseversicherung
                <i class="fa fa-times padding_left_10" id="close_box" aria-hidden="true"></i>
                <i class="fa fa-angle-down padding_left_10" id="open_box"></i>
            </div>
            <div class="popup_body" id="popup_body">
                <p>
                    Innerhalb der EU sind die meisten Fälle durch die deutsche Krankenversicherung abgedeckt. Es gibt jedoch
                    Fälle die nicht abgedeckt sind, dann ist es viel günstiger eine Reisekrankenversicherung zu haben als die
                    Kosten privat zu übernehmen. Du kannst direkt bei uns vergleichen und Dir anschauen ob sich eine Versicherung
                    lohnen würde. Klicke einfach <a class="color_black" href="https://reiseversicherung.check24.de/desktop/calculation/check24/input">hier</a>
                </p>

            </div>
        </div>

    </div>

    <div class="separator_gray"></div>
    <div class="container_home_h4">
        <h4>Wichtigste Links</h4>
    </div>

    <div class="container_link_top">
        <a href="program.php"><div class="btn_link btn_right" >Programm</div></a>
        <a href="hotel.php"><div class="btn_link btn_left">Hotel</div></a>
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

