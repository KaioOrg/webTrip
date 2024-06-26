<?php 
$labelsPlaces = array(
    'Гостиница Башкирия'=> array('hotelsPlaces/bashkiriaHotel.png', ' Ленина 25/29', '4,8', 'information_1'),
    'Nesterov Plaza'=> array('hotelsPlaces/nesterovplazaHotel.png', ' Верхнеторговая площадь 2', '4,2', 'information_2'),
    'Президент отель'=> array('hotelsPlaces/presidentHotel.png', ' Авроры 2', '4,8', 'information_8'),
    'Отель Ural Tau'=> array('hotelsPlaces/uraltauHotel.png', ' Гоголя 72', '4,9', 'information_13'),
    'Отель Azimut'=> array('hotelsPlaces/azimutHotel.png', ' просп. Октября 81', '4,8', 'information_23'),
    'Амакс Сити Отель'=> array('hotelsPlaces/amaksHotel.png', ' Рихарда Зорге 17', '4,5', 'information_24'),
);?>
<ul class="list-hotels-category">
    <p class="count-finded-places">Фильтр: Отели</p>
    <?php foreach ($labelsPlaces as $name_place => $value){
        ?>
        <li class="searched-place-item"><a href="../informaitionAboutPlaces/<?php echo $value[3]?>.php">
            <img class="items-image-places" src="static/images/<?php echo $value[0]?>" alt="">
            <h4 class="name-place-section-all-places"><?php echo $name_place?></h4>
            <p class="name-street-place">Уфа, <?php echo $value[1]?></p>
            <p class="score-count-text"><?php echo $value[2]?></p>
        </a>
        <!-- <button class="button-heart" type="submit"></button> -->
        </li>
        <?php
        } ?>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_54.php">
         <img class="items-image-places" src="static/images/hotelsPlaces/hiltongardenHotel.png" alt="">
            <h4 class="name-place-section-all-places">Hilton Garden Inn Ufa Riverside</h4>
            <p class="name-street-place">Уфа, Аксакова 4</p>
            <p class="score-count-text score-hotel-hilton-text">4,5</p> 
    </a>
<!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_55.php">
         <img class="items-image-places" src="static/images/hotelsPlaces/sheratonplazaHotel.png" alt="">
            <h4 class="name-place-section-all-places">Sheratonplaza Ufa Congress Hotel</h4>
            <p class="name-street-place">Уфа, Цурюпы 7</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p> 
    </a>
<!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_60.php">
         <img class="items-image-places" src="static/images/hotelsPlaces/hamptonHotel.png" alt="">
            <h4 class="name-place-section-all-places">Отель Hampton by Hilton Ufa</h4>
            <p class="name-street-place">Уфа, 50-летия Октября 17</p>
            <p class="score-count-text score-hotel-hilton-text">4,6</p> 
    </a>
<!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>