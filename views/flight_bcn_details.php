
<div class="container">

    <h1 class="color_green_deep padding_top_15 color_white">Anreise</h1>
    <p>Hier findest Du Infos zu Deiner Anreise</p>
    <div class="margin_top_15 container_background_bcn border_radius_10">
        <div class="container_background_overlight border_radius_10">
            <div class="inline_flex  info_box_overlight border_radius_10 padding_bottom_10">
                <div class="info">info</div>

                <p class="info_box info_text">Wir fliegen mit Handgepäck. Du kannst also kein Gepäck aufgeben.
                    Bitte kontrolliere, ob Dein Gepäckstück klein genug für Handgepäck ist und beachte,
                    dass Du nur einen 1l-Plastikbeutel mit Flüssigkeiten mitnehmen darfst,
                    wobei die Flüssigkeiten in Behältern sein müssen, die kleiner als 100 ml sind.
                    Genauere Infos findest Du
                    <a class="info_link" href="https://hauptstadtkoffer.de/de/tipps-trips/gepaeckguide/airline/lufthansa"
                       target="_blank"> hier</a></p>
            </div>


            <?php if($city_id > 1)  {?>

                <h4 class= "color_white padding_top_15">In Düsseldorf</h4>
                <div class="separator_gray"></div>
                <p class="padding_top_10  color_white">Flug: <b>Lufthansa LH1812</b></p>
                <p class="padding_top_10  color_white">Buchungscode: <b>MHSSDP</b></p>
                <p class="padding_top_10  color_white">Ticketnummer: <b><?php echo $ticket_number?></b></p>
                <p class="padding_top_5  color_white">Wann: <b>Düsseldorf nach München: <br>10:25 – 11:30 Uhr (LH2007)</br></b></p>

                <h4 class="padding_top_30  color_white">In München</h4>

            <?php } ?>

            <?php if($city_id == 1)  {?>
                <h4 class="padding_top_15  color_white">In München</h4>
            <?php } ?>

            <div class="separator_gray"></div>
            <p class="padding_top_10  color_white">Flug: <b>Lufthansa LH1812</b></p>
             <?php if($city_id == 1)  {?>
                 <p class="padding_top_10  color_white">Buchungscode: <b>Q79SB2</b></p>
                 <p class="padding_top_10  color_white">Ticketnummer: <b><?php echo $ticket_number?></b></p>
             <?php }?>
            <p class="color_white padding_top_5">Wann: <b> München nach Barcelona: <br>12.07.2019 12:50 - 14:50 Uhr (LH1812)</br></b></p>

            <p class="padding_top_10  color_white">Treffpunkt: <b>Abfluggate um 12:10 (bitte rechne<br> ausreichend Zeit ein um rechtzeitig am Gate zu sein)</b></p>

            <p class="padding_top_30  color_white ">In Barcelona</p>
            <div class="separator_gray padding_top_10"></div>
            <p class="padding_top_15  color_white">Hotel Shuttle: <b>12.07.2019 15:00</b></p>
            <h4 class="center color_green_apple font_weight_bold padding_top_30">Ankunft im Hotel ca. 16:00</h4>

            <div class="inline_flex  info_box_overlight border_radius_10">
                <div class="info">info</div>


                <p class="info_box info_text">Du kannst Dich bereits 23 Stunden vor Abflug hier online einchecken,
                    Deinen Sitzplatz auswählen und Deine online Bordkarte ausdrucken oder sie aufs Mobiltelefon
                    senden lassen. Dafür folgst Du einfach den Anweisungen bei diesem
                    <a class="info_link" href="https://www.lufthansa.com/at/de/online-check-in" >Link</a> und gibst Deinen Namen
                    und die Buchungsnummer ein.
                    </p>
            </div>

        </div>
    </div>




</div>
