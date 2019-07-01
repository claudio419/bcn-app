


<div class="container program">
    <div class="tipp border_radius_10 tipp_hide" id="tipp">
        <div class="center tipp_title">
            <i class="far fa-sun color_yellow"></i>
            <a class="tipp_title_text">Hinweis</a>
            <i class="far fa-sun color_yellow" id="sun_icon"></i>
        </div>
        <div class="tipp_body" id="tipp_body">
            <p>
                Bitte nimm ausreichend Wasser und Sonnencreme mit.
                Im Juli ist es in Barcelona sehr heiß
            </p>
        </div>
    </div>


    <h1 class="padding_top_15 color_green_deep">Programm</h1>

    <p class="padding_top_15">
        Hier findest Du Infos zu deinem Programm für das Wochenende. Details zur An- und Abreise findest Du im Menü.
    </p>


    <h4 class="color_green_deep padding_top_15 program_title"><a class="color_green_deep padding_top_15" href="#friday">Freitagabend - Programm</a></h4>
    <h4 class="color_green_deep padding_top_15 program_title"><a class="color_green_deep padding_top_15" href="#saturday">Samstag - Programm</a></h4>
    <h4 class="color_green_deep padding_top_15 program_title"><a class="color_green_deep padding_top_15" href="#sunday">Sonntag - Programm</a></h4>

    <div class="separator_gray padding_top_15 bol"></div>

    <h4 id="friday" class="color_green_deep padding_top_15">Freitagabend:</h4>

    <div class="container program">

    </div>
    <div class="program_frame border_radius_10">
        <p class="padding_top_10"></p>
        <img src="public/img/aguelo.jpg" class="program_img border_radius_10">
        <p class="padding_top_15 font_size_16">
            Freitagabend wollen wir mit euch einen schönen Abend im <b>Agüelo013</b> verbringen. Wir treffen uns um 19:30 im
            Emfpangsbereich vom Hotel und gehen dann gemeinsam zu dem Restaurant. Dort haben wir einen Tisch für 20:00
            reserviert.
        </p>
    </div>
    <div class="separator_gray padding_top_15 bol" id="saturday"></div>

    <h4 class="color_green_deep padding_top_15">Samstag</h4>

    <?php if ($program_extra === 'yes') { ?>
        <div class="program_frame">
            <p class="padding_top_15"><b class="font_weight_bold font_size_16">Optional: Hop-on Hop-off Bustour:</b></p>
            <img src="public/img/program_hop_on_hop_off.jpg" class="program_img border_radius_10">
            <p class="padding_top_15 font_size_16">
                Um Barcelona in kürzester Zeit zu erkunden, hast Du Dich für das Hop-on-Hop-off-Ticket entschieden.
            </p>
            <p class="padding_top_15 font_size_16">
                Der Doppeldecker bringt Dich zu den eindrucksvollsten Sehenswürdigkeiten Barcelonas.
            </p>
            <p class="padding_top_15 font_size_16">
                Per Audioguide wirst Du zudem einige wissenswerte Informationen über Barcelona sammeln können.
            </p>
            <p class="font_size_16 padding_top_15">Eine Rund-Tour dauert ohne Ausstieg 2 Stunden.</p>
            <p class="font_size_16 padding_top_15">Die nächstgelegene Haltestelle für die Stadtrundfahrt findest Du direkt beim  Parc
                de la Ciutadella, der sich unmittelbar vor dem Hotel befindet</p>
            <p class="font_size_16 padding_top_15">Man kann 3 verschiedene Routen mit insgesamt 45 Haltestellen befahren, bei den es 5
                Schnittstellen gibt. Nähere Infos findest Du
                <a class="color_black" href="https://www.holabarcelona.com/de/tickets/barcelona-hop-on-hop-off-bus-tour">hier</a>
            </p>
            <p class="font_size_16 padding_top_15">
                Außerdem kannst Du es auch so planen, dass Du direkt bei deiner gewählten Tagesaktivität aussteigst, da
                der Bus auch am Parc Montjuic, Camp Nou, an der Sagrada Família oder auch am Strand hält .
            </p>
            <p class="font_size_16 padding_top_15">
                Bitte berücksichtige bei Deiner Tagesplanung, dass eine Route bis zu 2 Stunden dauern kann.
            </p>

            <p class="padding_top_15 font_size_16">
                Wenn Du Dich mit anderen Kollegen zusammenschließen willst, Findest du hier die Liste der Kollegen.
            </p>

            <div class="popup toogle">
                <div class="popup_title popup_title_close" id="member_title">
                    Liste Deiner Kollegen
                    <i class="fa fa-times padding_left_10" id="member_close_box" aria-hidden="true"></i>
                    <i class="fa fa-angle-down padding_left_10" id="member_open_box"></i>
                </div>
                <div class="popup_body" id="member_body">
                        <?php
                            foreach ($program__all_extra as $item) {
                        ?>
                    <p><?php echo $item['firstname'] . ' ' . $item['lastname'] ;?></p>
                    <?php
                        }
                    ?>

                </div>
            </div>

        </div>

    <?php }?>




    <?php

        if ($program_id == 1) {
            include 'camp_now.php';
        }

        if ($program_id == 2) {
            include 'strand.php';
        }

        if ($program_id == 3) {
            include 'park.php';
        }

        if ($program_id == 4) {
            include 'sagrada_familia.php';
        }

        if ($program_id == 5) {
            include 'segway.php';
        }

    ?>

    <h4 id="friday" class="color_green_deep padding_top_15">Samstagabend:</h4>

    <div class="margin_top_15 container_background_party border_radius_10">
        <div class="container_background_overlight_hotel border_radius_10 ">
            <p class="color_white padding_top_10">Samstag erwartet Dich unsere CHECKITO-Party. Aber lass dich einfach überraschen</p>
            <p class="color_white padding_top_10">So viel vorab; um 19:45 treffen wir uns im Emfpangsbereich von dem Hotel. Uns wird dann ein Shuttlebus
                abholen und zur Location bringen.
            </p>
            <p class="color_white padding_top_10">
                Die Party steht unter dem Motto: Beachparty. Kleide dich sommerlich - luftig.
            </p>
            <p class="color_white padding_top_10">
                Freue Dich auf einen Abend mit einer Menge Spaß in einer tollen Location!
            </p>
        </div>
    </div>

    <div id="sunday"></div>

    <h4 id="friday" class="color_green_deep padding_top_15">Sonntag:</h4>

    <p class="color_black padding_top_10">
        Sonntag lassen wir unsere Reise bei einem gemütlichen Frühstück im Hotel ausklingen. Wir werden dann gegen
        Mittag von dem Hotel angeholt. Genauere Infos dazu findest du unter <a class="color_black" href="flight_muc.php">Abreise</a>.
    </p>

</div>