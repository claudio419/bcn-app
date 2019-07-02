<div class="program_frame">
    <p class="padding_top_15"><b class="font_weight_bold font_size_16">Sagrada Familia:</b></p>
    <img src="public/img/sagrada_flia.png" class="program_img border_radius_10">
    <p class="padding_top_15 font_size_16">
        Gemeinsam werden wir mit einem Tour-Guide das wohl berühmteste Gebäude Barcelonas besuchen, die Sagrada Familia.
        Wir werden uns vom intensiven farbigen Licht im Innern der Kathedrale verzaubern lassen. Dabei lernen wir über
        Gaudis Gebrauch von Farbe und organische Verwendung von Materialien, während wir das lebhafte Aufeinandertreffen
        von Designelementen im Stil der Gotik und des Jungendstils bewundern. Außerdem erkunden wir im Museum unter dem
        Querschiff Gaudis Vision mittels Zeichnungen, Fotografien und Plänen – von den Anfängen über den aktuellen Stand
        bis hin zu geplanten Fertigstellung im Jahr 2026.
    </p>

    <p class="padding_top_15 font_size_16">
        Bitte beachte, dass in der Kathedrale <b>Bekleidungsregeln</b> gelten: Knie und
        Schultern müssen bedeckt sein!
    </p>
    <p class="padding_top_15 font_size_16">
        Wir treffen uns um 13:15 Uhr im Foyer des Hotels und laufen dann gemeinsam die 2 km zur Sagrada Familia. Wenn
        Du vorher etwas anderes unternimmst, kannst Du auch direkt zum Treffpunkt mit unserem Führer kommen. Dazu solltest
        Du bis spätestens 14:00 Uhr hier sein:
    </p>
    <p class="padding_top_15 font_size_16">
        Visit Europa Today
    </p>
    <p>
        Büro Nr. 3
    </p>
    <p>
        <a class="color_black"
           href="https://www.google.com/maps/place/Carrer+de+Sardenya,+311,+08025+Barcelona,+Spanien/@41.4035685,2.1704294,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a2c31b741e11:0x308f30c5d346be3a!8m2!3d41.4035645!4d2.1726181">Carrer Sardenya 311</a>
    </p>
    <p>
        <a class="color_black" href="https://www.google.com/maps/place/Carrer+de+Sardenya,+311,+08025+Barcelona,+Spanien/@41.4035685,2.1704294,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a2c31b741e11:0x308f30c5d346be3a!8m2!3d41.4035645!4d2.1726181">08025 Barcelona</a>
    </p>

    <p class="padding_top_15 font_size_16">
        Wenn Dich interessiert, wer noch bei dieser Aktivität dabei ist, findest Du hier die Liste der teilnehmenden Kollegen.
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