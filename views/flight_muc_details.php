<div class="container">
    <h1 class="color_green_deep padding_top_15">Abreise</h1>
    <p>Hier findest du Infos zu deiner Abreise</p>

    <p class="padding_top_30">In barcelona</p>
    <div class="separator_gray"></div>
    <p class="padding_top_15">Hotel Shuttle: <b>14.07.2019 13:15</b></p>
    <p class="padding_top_5">Wann: <b>Barcelona nach München: 15:45 – 17:45 Uhr (LH1813)</b></p>

    <?php if($city_id > 1)  {?>

        <p class="padding_top_30">In München</p>
        <div class="separator_gray"></div>
        <p class="padding_top_5">Wann: <b>München nach Düsseldorf: 18:30 – 19:40 Uhr (LH2734)</b></p>
        <h4 class="center color_green font_weight_bold padding_top_30">Ankunft in Düsseldorf 19:40</h4>

    <?php } else { ?>
    <h4 class="center color_green font_weight_bold padding_top_30">Ankunft in München 17:55</h4>
    <?php } ?>
    <img src="public/img/flight_muc.jpg" class="width_img_100 border_radius_10">

</div>