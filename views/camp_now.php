<div class="program_frame">
    <p class="padding_top_15"><b class="font_weight_bold font_size_16">Camp Nou:</b></p>
    <img src="public/img/program_barca.png" class="program_img border_radius_10">
    <p class="padding_top_15 font_size_16">
        Das größte Fußballstadion Europas ist ein MUSS für jeden Fußballfan. Wirf einen Blick hinter die Kulissen
        des Camp Nou und tauche ein in die Vereinsgeschichte des FC Barcelonas. In diesem Stadion ist vieles eine
        Nummer größer. Und das spürst Du bei deinem Besuch auf Schritt und Tritt. Schnell wirst Du merken, dass hier
        der Slogan „Més que un Club“, was so viel bedeutet wie „Mehr als nur ein Club“ gelebt wird. Sei gespannt auf
        einen aufregenden Nachmittag im Camp Nou.
        <a class="color_black" href="https://campnou.de/tour/camp-nou-tour-plus/">Hier</a> findest Du weitere Infos zu der Stadion-Tour.
    </p>
    <p class="padding_top_15 font_size_16">
        Die Tour startet um <b>13:30 Uhr,</b> aber bitte sei ca. 30 Minuten vorher da.
    </p>
    <p class="padding_top_15 font_size_16">
        Das Stadion erreichst Du vom Hotel in ca. 38 Minuten.
    </p>
    <p class="padding_top_15 font_size_16">
        In unmittelbarer Nähe des Hotels findest Du die Metro-Station Arc de Triomf.
        Nimm die Linie L1 in Richtung Hospital de Bellvitge und steig an der Station Pl. Espanya aus.
        Von hier aus kannst Du mit der Linie L3 in Richtung Zona Universitària weiterfahren und an der Station Palau Reial aussteigen.
    </p>
    <p class="padding_top_15 font_size_16">
        Jetzt ist das Stadion in Sichtweite und Du brauchst nur noch wenige Minuten zu Fuß.
    </p>
    <p class="padding_top_15 font_size_16">
        Das Ganze dauert in <b>etwa 2 Stunden</b>
    </p>
    <p class="padding_top_15 font_size_16">
        Denk allerdings daran, dass Du rechtzeitig im Hotel sein musst, um Dich für das Abendprogramm fertigzumachen.
    </p>
    <p class="padding_top_15 font_size_16">
        Wenn Du Dich mit anderen Kollegen zusammenschließen willst, Findest du hier die Liste der Kollegen.
    </p>

    <div class="popup toogle">
        <div class="popup_title popup_title_close" id="program_title">
            Liste Deiner Kollegen
            <i class="fa fa-times padding_left_10" id="program_close_box" aria-hidden="true"></i>
            <i class="fa fa-angle-down padding_left_10" id="program_open_box"></i>
        </div>
        <div class="popup_body" id="program_body">
            <p>
                <?php
                    foreach ($program_all as $item) {
                ?>
                    <p>
                        <?php echo $item['firstname'] . ' ' . $item['lastname'] ;?>
                    </p>
                <?php }?>
            </p>

        </div>
    </div>


</div>