<div class="program_frame">
    <p class="padding_top_15"><b class="font_weight_bold font_size_16">Park Montjuic:</b></p>
    <img src="public/img/program_montjuic.JPG" class="program_img border_radius_10">
    <p class="padding_top_15 font_size_16">
        Der Montjuic ist ein ganz besonderer Teil Barcelonas. Mit einer sehr wechselvollen Geschichte hat er heute
        Parkanlagen, olympische Sportstätten, eine grandiose Aussicht und mehrere weltbekannte Museen zu bieten.
        Besuche den Hausberg Barcelonas und begebe dich auf eine Reise durch die Geschichte und Kultur der Stadt.
        <a class="color_black" href="https://go2barcelona.de/montjuic.html">Hier</a>
        findest Du viele relevante Infos zu Sehenswürdigkeiten im Parc de Montjuic.
    </p>

    <p class="padding_top_15 font_size_16">
        Um auf den Berg zu kommen, muss man mit der Seilbahn fahren.
        Den Gutschein für das Ticket erhältst Du von uns am Vorabend.
    </p>
    <p class="padding_top_15 font_size_16">
        Die Seilbahn findet ihr an der Adresse:
        Avinguda Miramar, 30, 08038 Barcelona
    </p>

    <p class="padding_top_15 font_size_16">
        Du erreichst die Station am besten, indem Du den Bus H14 in Richtung Parallel nimmst und auch da aussteigst.
        Der Bus fährt direkt vom Hotel ab und braucht 15 Minuten.
    </p>
    <p class="padding_top_15 font_size_16">
        Von Parallel aus brauchst Du noch ca. 15 Minuten zu Fuß.
    </p>

    <p>
        Also plane insgesamt 30 Minuten ein für die Anfahrt.
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