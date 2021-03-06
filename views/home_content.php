<?php
    $firstname = (isset($_COOKIE['firstname']) && !empty($_COOKIE['firstname'])) ? $_COOKIE['firstname'] : '';
?>

<div class="container home_body">
    <div>
        <h1>Hallo <?php echo $firstname; ?></h1>
        <p>
            jetzt geht es endlich los! Wenn wir vor Ort sind, beachte unbedingt, dass es in Barcelona sehr viele
            Taschendiebe gibt! Nimm deshalb bitte nur die Wertsachen mit auf die Straße, die Du auch wirklich brauchst,
            und verstaue den Rest im Safe auf Deinem Zimmer. Wenn Du Wertsachen bei Dir trägst, halte sie am besten
            möglichst nah am Körper, außer Sicht und sei wachsam. Rucksäcke, Handtaschen und Wertsachen in der Gesäßtasche
            sind ein gefundenes Fressen für Taschendiebe.

        </p>
        <p>
            Da unsere Reise nicht als Dienstreise über die Berufgenossenschaft abgesichert ist, lies bitte  den Hinweis
            durch und entscheide, ob Du eine private Auslandskrankenversicherung abschließen willst.
        </p>
        <p>
            Dein Orga-Team
        </p>
    </div>

    <div>
        <div class="popup toogle" id="popup">
            <div class="popup_title popup_title_close" id="popup_title">
                Reiseversicherung
                <i class="fa fa-times padding_left_10" id="close_box" aria-hidden="true"></i>
                <i class="fa fa-angle-down padding_left_10" id="open_box"></i>
            </div>
            <div class="popup_body" id="popup_body">
                <p>
                    Innerhalb der EU sind die meisten Fälle durch die deutsche Krankenversicherung abgedeckt. Es gibt jedoch
                    Fälle (z.B. Rückführung) die nicht abgedeckt sind, dann ist es viel günstiger eine Reisekrankenversicherung zu haben als die
                    Kosten privat zu übernehmen. Du kannst direkt bei uns vergleichen und Dir anschauen ob sich eine Versicherung
                    lohnen würde. Klicke einfach
                    <a class="color_black" href="https://reiseversicherung.check24.de/mobile/calculation/check24/input/?criskcancellation=1&criskcurtailment=1&criskhealth=1&criskbaggage=0&ciprelation=single&cmaxage=39&csingletrip=0&cmaxcosts=2500&ctripbooking=today&ctripbegin=2019-07-04&ctripend=2019-07-04&cbookinglastdays=1&ctripalreadybooked=0&ctransporttype=all&csingleparent=0&ctripdestinations=europe">hier</a>
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

