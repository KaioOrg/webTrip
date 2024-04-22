<?php 
$labelsPlaces = array(
    'Шерлок Холмс'=> array('restaurantsPlaces/sherlockRestaurant.png', ' Чернышевского 75', '4,5', 'information_3'),
    'Ресторан Vысота 22'=> array('restaurantsPlaces/highRestaurant.png', ' Менделеева 160/9', '4,7', 'information_11'),
    'Ресторан Индокитай'=> array('restaurantsPlaces/indokitayRestaurant.png', ' Коммунистическая 80', '4,7', 'information_16'),
    'Ресторан Щепка'=> array('restaurantsPlaces/splinterRestaurant.png', ' Рихарда Зорге 64/1', '4,8', 'information_25'),
    'Ресторан Россинский'=> array('restaurantsPlaces/rossinskiyRestaurant.png', ' Цурюпы 7', '4,6', 'information_26'),
    'Ресторан Оджахури'=> array('restaurantsPlaces/odshahuriRestaurant.png', ' Чернышевского 88', '5,0', 'information_30'),
    'Ресторан Холодец'=> array('restaurantsPlaces/holodecRestaurant.png', ' Комсомольская 105', '4,8', 'information_31'),
    'Ресторан Marco Polo'=> array('restaurantsPlaces/marcoPoloRestaurant.png', ' Чернышевского 75', '5,0', 'information_32'),
);?>
<ul class="list-restaurants-category">
    <p class="count-finded-places">Фильтр: Рестораны</p>
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
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_64.php">
        <img class="items-image-places" src="static/images/restaurantsPlaces/dascoGardenRestaurant.png" alt="">
            <h4 class="name-place-section-all-places">Ресторан Dasco Garden</h4>
            <p class="name-street-place">Уфа, просп. Октября 77/2</p>
            <p class="score-count-text score-hotel-hilton-text">4,8</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_65.php">
        <img class="items-image-places" src="static/images/restaurantsPlaces/balkanRestaurant.png" alt="">
            <h4 class="name-place-section-all-places">Ресторан Балкан гриль</h4>
            <p class="name-street-place">Уфа, Менделеева, 141/2</p>
            <p class="score-count-text score-hotel-hilton-text">4,7</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>