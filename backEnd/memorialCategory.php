<?php 
$labelsPlaces = array(
    'Монумент Дружбы'=> array('memorialsPlaces/monument.png', ' Сочинская', '4,9'),
    'Памятник дворнику'=> array('memorialsPlaces/cleanerMemorial.png', ' просп. Октября 4/1', '4,5'),
    'Памятник В.И. Ленину'=> array('memorialsPlaces/leninMemorial.png', ' Николая Ковалёва', '4,4'),
);?>
<ul class="list-memorials-category">
    <?php foreach ($labelsPlaces as $name_place => $value){
        ?>
        <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
            <img class="items-image-places" src="static/images/<?php echo $value[0]?>" alt="">
            <h4 class="name-place-section-all-places"><?php echo $name_place?></h4>
            <p class="name-street-place">Уфа, <?php echo $value[1]?></p>
            <p class="score-count-text"><?php echo $value[2]?></p>
        </a>
        <!-- <button class="button-heart" type="submit"></button> -->
        </li>
        <?php
        } ?>
     <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/memorilSalavat.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Салавату Юлаеву</h4>
            <p class="name-street-place">Уфа, Тубинская 3</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/memorialsPlaces/matrosovMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Александру Матросову</h4>
            <p class="name-street-place">Уфа, сад Александра Матросова</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/zagirMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Загиру Исмагилову</h4>
            <p class="name-street-place">Уфа, Ленина, 5, корп. 1</p>
            <p class="score-count-text score-hotel-hilton-text">4,6</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/mayakovskiMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник В.В. Маяковскому</h4>
            <p class="name-street-place">Уфа, сквер им. В.В. Маяковского</p>
            <p class="score-count-text score-hotel-hilton-text">4,2</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/mustaiKarimMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Мустаю Кариму</h4>
            <p class="name-street-place">Уфа, площадь имени Мустая Карима</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/gafuriMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Мажиту Гафиру</h4>
            <p class="name-street-place">Уфа, 50-лет СССР 36</p>
            <p class="score-count-text score-hotel-hilton-text">4,9</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>