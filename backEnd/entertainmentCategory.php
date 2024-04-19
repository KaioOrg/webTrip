<?php 
$labelsPlaces = array(
    'ПроЭкстрим картинг'=> array('entertainmentsPlaces/kartingclubEntertainment.png', ' Минигали Губайдуллина 6', '4,7'),
    'Котокафе "Котейная"'=> array('entertainmentsPlaces/koteynayaEntertainment.png', ' 50-лет Октября 26', '5,0'),
    'Аквапарк'=> array('entertainmentsPlaces/waterparkEntertainment.png', ' Энтузиастов 20', '4,6'),
    'Флай парк'=> array('entertainmentsPlaces/flyparkEntertainment.png', ' Луганская 1', '5,0'),
    'Странные дела'=> array('entertainmentsPlaces/strangebusienessEntertainment.png', ' Ленина 156', '5,0'),
    'Warpoint'=> array('entertainmentsPlaces/warpointEntertainment.png', ' Степана Кувыкина 18', '5,0'),
    "Papa's club"=> array('entertainmentsPlaces/papasclubEntertainment.png', ' Кавказская, 6/8', '4,8'),
    'Клуб BadHouse'=> array('entertainmentsPlaces/badhouseEntertainment.png', ' Комсомольская 18', '4,4'),
);?>
<ul class="list-entertainments-category">
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
         <img class="items-image-places" src="static/images/entertainmentsPlaces/peintbollEntertainment.png" alt="">
            <h4 class="name-place-section-all-places">Пейнтбольный парк Рубикон</h4>
            <p class="name-street-place">Уфа, Комарова 1/2</p>
            <p class="score-count-text score-hotel-hilton-text">4,9</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>