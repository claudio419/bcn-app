<div class="program_frame">
    <p class="padding_top_15"><b class="font_weight_bold font_size_16">Segway-Tour:</b></p>
    <img src="public/img/program_segw.JPG" class="program_img border_radius_10">
    <p class="padding_top_15 font_size_16">
        Du hast Dich für die Segway-Tour entschieden, weil Du Sightseeing mit Action verbinden willst.
        Hier werden uns 4 Guides durch die historischen und modernen Viertel Barcelonas führen und uns wissenswertes
        über die Stadt und die Sehenswürdigkeiten erzählen.
    </p>

    <p class="padding_top_15 font_size_16">
        Das Ganze startet um 14:00 Uhr, allerdings werden wir von einem Guide um <b>13:45</b> Uhr direkt am Hotel abgeholt.
    </p>
    <p class="padding_top_15 font_size_16">
        Die Fahrt wird ca. <b>2 Stunden</b> dauern. Deswegen raten wir Dir Sonnencreme mitzunehmen, da es Mitte Juli in
        Barcelona ziemlich heiß wird. Auch feste Schuhe sind sehr empfehlenswert.
    </p>

    <p class="padding_top_15 font_size_16">
        Denk daran, dass Du rechtzeitig im Hotel sein musst, um Dich für das Abendprogramm fertigzumachen.
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