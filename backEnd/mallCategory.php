<?php 
$labelsPlaces = array(
    'Торговый цент Яй'=> array('mallsPlaces/yaMall.png', ' Пархоменко 156', '4,5', 'information_9'),
    'Торговый цент Мир'=> array('mallsPlaces/peaceMall.png', ' просп. Октября 4/1', '4,6', 'information_10'),
    'Гостиный двор'=> array('mallsPlaces/cityMallMain.png', ' Верхнеторговая площадь 1', '4,6', 'informationAboutPlaces'),
    'Торговый центр Мега'=> array('mallsPlaces/megaMall.png', ' Рубежная 174', '5,0', 'information_27'),
    'Торговый центр Семья'=> array('mallsPlaces/familyMall.png', ' просп. Октября 34', '4,7', 'information_28'),
    'Торговый центр Ultra'=> array('mallsPlaces/ultraMall.png', ' Бакалинская 27', '4,9', 'information_29'),
);?>
<ul class="list-malls-category">
    <p class="count-finded-places">Фильтр: Торговые центры</p>
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
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_35.php">
        <img class="items-image-places" src="static/images/mallsPlaces/planetaMall.png" alt="">
            <h4 class="name-place-section-all-places">Торговый центр Планета</h4>
            <p class="name-street-place">Уфа, Энтузиастов 20</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_61.php">
        <img class="items-image-places" src="static/images/mallsPlaces/iremelMall.png" alt="">
            <h4 class="name-place-section-all-places">Торговый центр Иремель</h4>
            <p class="name-street-place">Уфа, Рубежная 174</p>
            <p class="score-count-text score-hotel-hilton-text">3,9</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_62.php">
        <img class="items-image-places" src="static/images/mallsPlaces/lifestyleMall.png" alt="">
            <h4 class="name-place-section-all-places">Лайфстайл центр Башкирия</h4>
            <p class="name-street-place">Уфа, Менделеева 205А</p>
            <p class="score-count-text score-hotel-hilton-text">4,7</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_63.php">
        <img class="items-image-places" src="static/images/mallsPlaces/galleryartMall.png" alt="">
            <h4 class="name-place-section-all-places">Торговый центр Галерея Art</h4>
            <p class="name-street-place">Уфа, Чернышевского 75</p>
            <p class="score-count-text score-hotel-hilton-text">4,6</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>