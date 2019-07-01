<div class="program_frame">
    <p class="padding_top_15"><b class="font_weight_bold font_size_16">Chillen am Strand:</b></p>
    <img src="public/img/program_beach.JPG" class="program_img border_radius_10">
    <p class="padding_top_15 font_size_16">
        Wir krönen unseren Aufenthalt in Barcelona mit einem Besuch am Strand.
        Es bietet sich unter Anderem der „La Barceloneta Beach“ an. Dies ist einer der bekanntesten und bestbesuchten Strände Barcelonas.
    </p>
    <p class="padding_top_15 font_size_16">
        Alternativ kannst Du natürlich auch Dein eigenes Programm durchziehen. Oder die anderen +Strandabschnitte
        <a class="color_black" href="https://hallo-barcelona.com/strand-barcelona">hier</a>
    </p>

    <p class="padding_top_15 font_size_16">
        Du solltest unbedingt daran denken, Dir <b>Badesachen, Sonnencreme</b> und <b>Getränke</b> mitzunehmen.
    </p>
    <p class="padding_top_15 font_size_16">
        Der vorgeschlagene Strand ist fußläufig vom Hotel und Du erreichst ihn in knapp 20 Minuten (inkl. Sparziergang
        durch den Parc de la Ciutadella).
    </p>
    <p class="padding_top_15 font_size_16">
        Den zeitlichen Rahmen kannst Du selbst bestimmen. Denk allerdings daran, dass Du rechtzeitig im Hotel sein musst,
        um Dich für das Abendprogramm fertigzumachen.
    </p>
    <p class="padding_top_15 font_size_16">
        Die Adresse für den schnellsten Weg zum Strand lautet:
    </p>
    <p>
        Passeig Marítim de la Barceloneta, 34,
    </p>
    <p>
        08003 Barcelona
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