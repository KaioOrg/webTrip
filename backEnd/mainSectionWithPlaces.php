<?php 
$title = array(
    'Гостиный двор'=> array('mallsPlaces/cityMallMain.png', ' Верхнеторговая площадь 1', '4,6'),
    'Гостиница Башкирия'=> array('hotelsPlaces/bashkiriaHotel.png', ' Ленина 25/29', '4,8'),
    'Nesterov Plaza'=> array('hotelsPlaces/nesterovplazaHotel.png', ' Верхнеторговая площадь 2', '4,2'),
    'Шерлок Холмс'=> array('restaurantsPlaces/sherlockRestaurant.png', ' Чернышевского 75', '4,5'),
    'Парк Победы'=> array('parksPlaces/parkVictory.png', ' Комарова 7', '4,8'),
    'Котокафе "Котейная"'=> array('entertainmentsPlaces/koteynayaEntertainment.png', ' 50-лет Октября 26', '5,0'),
    'Дом-музей В.И. Ленина'=> array('museumsPlaces/museumLenin.png', ' Достоевского 78', '4,1'),
    'ПроЭкстрим картинг'=> array('entertainmentsPlaces/kartingclubEntertainment.png', ' Минигали Губайдуллина 6', '4,7'),
    'Парк имени Якутова'=> array('parksPlaces/yakutovPark.png', ' Ленина 65/3', '4,3'),
    'Президент отель'=> array('hotelsPlaces/presidentHotel.png', ' Авроры 2', '4,8'),
    'Торговый цент Яй'=> array('mallsPlaces/yaMall.png', ' Пархоменко 156', '4,5'),
    'Торговый цент Мир'=> array('mallsPlaces/peaceMall.png', ' просп. Октября 4/1', '4,6'),
    'Ресторан Vысота 22'=> array('restaurantsPlaces/highRestaurant.png', ' Менделеева 160/9', '4,7'),
    'Монумент Дружбы'=> array('memorialsPlaces/monument.png', ' Сочинская', '4,9'),
    'Отель Ural Tau'=> array('hotelsPlaces/uraltauHotel.png', ' Гоголя 72', '4,9'),
    'Аквапарк'=> array('entertainmentsPlaces/waterparkEntertainment.png', ' Энтузиастов 20', '4,6'),
    'Флай парк'=> array('entertainmentsPlaces/flyparkEntertainment.png', ' Луганская 1', '5,0'),
    'Ресторан Индокитай'=> array('restaurantsPlaces/indokitayRestaurant.png', ' Коммунистическая 80', '4,7'),
    'Памятник дворнику'=> array('memorialsPlaces/cleanerMemorial.png', ' просп. Октября 4/1', '4,5'),
    'Торговый центр Планета'=> array('mallsPlaces/planetaMall.png', ' Энтузиастов 20', '5,0'),
    'Парк Кашкадан'=> array('parksPlaces/parkKashkadan.png', ' Маршала Жукова 31', '4,6'),
);

?>
<ul class="all-places-list">
    <p class="count-finded-places">Все места</p>    
    <?php foreach ($title as $name_place => $value){
        ?>
        <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
            <img class="items-image-places" src="static/images/<?php echo $value[0]?>" alt="">
            <h4 class="name-place-section-all-places"><?php echo $name_place?></h4>
            <p class="name-street-place">Уфа, <?php echo $value[1]?></p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text"><?php echo $value[2]?></p>
        </a></li>
        <?php
        } ?>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/memorilSalavat.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Салавату Юлаеву</h4>
            <p class="name-street-place">Уфа, Тубинская 3</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">5,0</p> 
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/theatresPlaces/toysTheatre.png" alt="">
            <h4 class="name-place-section-all-places">Башкирский государственный театр кукол</h4>
            <p class="name-street-place">Уфа, просп. Октября 158</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,4</p>
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/museumsPlaces/myhistoryMuseum.png" alt="">
            <h4 class="name-place-section-all-places">Исторический парк "Россия - моя история"</h4>
            <p class="name-street-place">Уфа, Менделеева 158</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,4</p>
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/theatresPlaces/dramTheatre.png" alt="">
            <h4 class="name-place-section-all-places">Государственный академический русский драматический театр Республики Башкортостан</h4>
            <p class="name-street-place">Уфа, просп. Октября 79</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,9</p>
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/parksPlaces/vatanPark.png" alt="">
            <h4 class="name-place-section-all-places">Этнический парк Ватан</h4>
            <p class="name-street-place">Уфа, Заки Валиди 2А</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,2</p>
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/parksPlaces/woodPark.png" alt="">
            <h4 class="name-place-section-all-places">Парк Лесоводов Башкирии</h4>
            <p class="name-street-place">Уфа, лесопарк имени Лесоводов Башкирии</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,0</p>
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/museumsPlaces/shulgantashMuseum.png" alt="">
            <h4 class="name-place-section-all-places">Музейный комплекс Пещера Шульган-Таш</h4>
            <p class="name-street-place">Уфа, Чернышевского 47</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,9</p>
    </a></li>
    <li class="searched-place-item"><a href="backEnd/hotelsCategory.php">
        <img class="items-image-places" src="static/images/theatresPlaces/nurTheatre.png" alt="">
            <h4 class="name-place-section-all-places">Уфимский государственный татарский театр Нур</h4>
            <p class="name-street-place">Уфа, 50-лет СССР 36</p>
            <img class="heart-icon" src="static/images/icons/heartIcon.png" alt="">
            <p class="score-count-text">4,7</p>
    </a></li>
</ul>