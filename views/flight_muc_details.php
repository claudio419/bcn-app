<div class="container">
    <h1 class="color_green_deep padding_top_15">Abreise</h1>
    <p>Hier findest Du Infos zu Deiner Abreise</p>
    <div class="margin_top_15 container_background_muc border_radius_10">
        <div class="container_background_overlight border_radius_10">
    <h4 class="color_white">In Barcelona</h4>
    <div class="separator_gray padding_top_5"></div>
    <p class="padding_top_15 color_white">Hotel Shuttle: <b>14.07.2019 13:15</b></p>
    <p class="padding_top_10  color_white">Buchungscode: <b><?php if ($city_id > 1) { echo 'MHSSDP'; } else {echo 'Q79SB2';}?></b></p>
    <p class="padding_top_10  color_white">Ticketnummer: <b><?php echo $ticket_number?></b></p>
    <p class="padding_top_5 color_white">Wann: <b>Barcelona nach München: <br>15:45 – 17:45 Uhr (LH1813)</br></b></p>

    <?php if($city_id > 1)  {?>

        <h4 class="padding_top_30 color_white">In München</h4>
        <div class="separator_gray padding_top_5"></div>
        <p class="padding_top_5 color_white">Wann: <b>München nach Düsseldorf: <br>18:30 – 19:40 Uhr (LH2734)</br></b></p>
        <h4 class="center color_green_apple font_weight_bold padding_top_30">Ankunft in Düsseldorf 19:40</h4>

    <?php } else { ?>
    <h4 class="center color_green_apple  font_weight_bold padding_top_30">Ankunft in München 17:45</h4>
    <?php } ?>

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
