<?php 
$labelsPlaces = array(
    'Парк Победы'=> array('parksPlaces/parkVictory.png', ' Комарова 7', '4,8'),
    'Парк имени Якутова'=> array('parksPlaces/yakutovPark.png', ' Ленина 65/3', '4,3'),
    'Парк Кашкадан'=> array('parksPlaces/parkKashkadan.png', ' Маршала Жукова 31', '4,6'),
);?>
<ul class="list-parks-category">
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
        <img class="items-image-places" src="static/images/parksPlaces/vatanPark.png" alt="">
            <h4 class="name-place-section-all-places">Этнический парк Ватан</h4>
            <p class="name-street-place">Уфа, Заки Валиди 2А</p>
            <p class="score-count-text score-hotel-hilton-text">4,2</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/parksPlaces/woodPark.png" alt="">
            <h4 class="name-place-section-all-places">Парк Лесоводов Башкирии</h4>
            <p class="name-street-place little-street-name">Уфа, лесопарк им. Лесоводов Башкирии</p>
            <p class="score-count-text score-hotel-hilton-text">4,0</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/parksPlaces/gardenAksakova.png" alt="">
            <h4 class="name-place-section-all-places">Сад культуры и отдыха им. Аксакова</h4>
            <p class="name-street-place little-street-name">Уфа, сад культуры и отдыха им. Аксакова</p>
            <p class="score-count-text score-hotel-hilton-text">4,4</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/parksPlaces/gardenSalavat.png" alt="">
            <h4 class="name-place-section-all-places">Сад имени Салавата Юлаева</h4>
            <p class="name-street-place">Уфа, Салавата 22</p>
            <p class="score-count-text score-hotel-hilton-text">4,7</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/parksPlaces/matrosovaPark.png" alt="">
            <h4 class="name-place-section-all-places">Сад Александра Матросова</h4>
            <p class="name-street-place">Уфа, Тукаева 23</p>
            <p class="score-count-text score-hotel-hilton-text">4,5</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/parksPlaces/gafuriPark.png" alt="">
            <h4 class="name-place-section-all-places">Центральный парк им. М.Гафури</h4>
            <p class="name-street-place">Уфа, просп. Октября 77/2в</p>
            <p class="score-count-text score-hotel-hilton-text">3,9</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
</ul>