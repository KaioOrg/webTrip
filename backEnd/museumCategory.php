<?php 
$labelsPlaces = array(
    'Дом-музей В.И. Ленина'=> array('museumsPlaces/museumLenin.png', ' Достоевского 78', '4,1', 'information_33'),
);?>
<ul class="list-museums-category">
    <p class="count-finded-places">Фильтр: Музеи</p>
    <?php foreach ($labelsPlaces as $name_place => $value){
        ?>
        <li class="searched-place-item"><a href="../informaitionAboutPlaces/<?php echo $value[3]?>.php">
            <img class="items-image-places" src="static/images/<?php echo $value[0]?>" alt="">
            <h4 class="name-place-section-all-places"><?php echo $name_place?></h4>
            <p class="name-street-place">Уфа, <?php echo $value[1]?></p>
            <p class="score-count-text score-hotel-hilton-text"><?php echo $value[2]?></p>
        </a>
        <!-- <button class="button-heart" type="submit"></button> -->
        </li>
        <?php
        } ?>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_37.php">
        <img class="items-image-places" src="static/images/museumsPlaces/myhistoryMuseum.png" alt="">
            <h4 class="name-place-section-all-places">Исторический парк "Россия - моя история"</h4>
            <p class="name-street-place">Уфа, Менделеева 158</p>
            <p class="score-count-text score-entertainment-text">4,4</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_41.php">
        <img class="items-image-places" src="static/images/museumsPlaces/shulgantashMuseum.png" alt="">
            <h4 class="name-place-section-all-places">Музейный комплекс Пещера Шульган-Таш</h4>
            <p class="name-street-place">Уфа, Чернышевского 47</p>
            <p class="score-count-text score-hotel-hilton-text">4,9</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_51.php">
        <img class="items-image-places" src="static/images/museumsPlaces/nesterovMuseum.png" alt="">
            <h4 class="name-place-section-all-places changed-label-place">Башкирский государственный художественный музей им. М. В. Нестерова</h4>
            <p class="name-street-place">Уфа, Гоголя 27</p>
            <p class="score-count-text score-hotel-hilton-text">4,6</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_52.php">
        <img class="items-image-places" src="static/images/museumsPlaces/zooMuseum.png" alt="">
            <h4 class="name-place-section-all-places changed-label-place">Зоологический музей Башкирского государственного университета</h4>
            <p class="name-street-place">Уфа, Заки Валиди 32</p>
            <p class="score-count-text score-hotel-hilton-text">4,4</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_53.php">
        <img class="items-image-places" src="static/images/museumsPlaces/museumArchaeology.png" alt="">
            <h4 class="name-place-section-all-places">Музей археологии и этнографии</h4>
            <p class="name-street-place">Уфа, Карла Маркса 6</p>
            <p class="score-count-text score-hotel-hilton-text">4,6</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>