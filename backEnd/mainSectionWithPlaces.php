<?php 
$title = array(
    'Гостиный двор'=> array('mallsPlaces/cityMallMain.png', ' Верхнеторговая площадь 1', '4,6', 'informationAboutPlaces'),
    'Гостиница Башкирия'=> array('hotelsPlaces/bashkiriaHotel.png', ' Ленина 25/29', '4,8', 'information_1'),
    'Nesterov Plaza'=> array('hotelsPlaces/nesterovplazaHotel.png', ' Верхнеторговая площадь 2', '4,2', 'information_2'),
    'Шерлок Холмс'=> array('restaurantsPlaces/sherlockRestaurant.png', ' Чернышевского 75', '4,5', 'information_3'),
    'Парк Победы'=> array('parksPlaces/parkVictory.png', ' Комарова 7', '4,8', 'information_4'),
    'Котокафе "Котейная"'=> array('entertainmentsPlaces/koteynayaEntertainment.png', ' 50-лет Октября 26', '5,0', 'information_5'),
    'ПроЭкстрим картинг'=> array('entertainmentsPlaces/kartingclubEntertainment.png', ' Минигали Губайдуллина 6', '4,7', 'information_6'),
    'Парк имени Якутова'=> array('parksPlaces/yakutovPark.png', ' Ленина 65/3', '4,3', 'information_7'),
    'Президент отель'=> array('hotelsPlaces/presidentHotel.png', ' Авроры 2', '4,8', 'information_8'),
    'Торговый цент Яй'=> array('mallsPlaces/yaMall.png', ' Пархоменко 156', '4,5', 'information_9'),
    'Торговый цент Мир'=> array('mallsPlaces/peaceMall.png', ' просп. Октября 4/1', '4,6', 'information_10'),
    'Ресторан Vысота 22'=> array('restaurantsPlaces/highRestaurant.png', ' Менделеева 160/9', '4,7', 'information_11'),
    'Монумент Дружбы'=> array('memorialsPlaces/monument.png', ' Сочинская', '4,9', 'information_12'),
    'Отель Ural Tau'=> array('hotelsPlaces/uraltauHotel.png', ' Гоголя 72', '4,9', 'information_13'),
    'Аквапарк'=> array('entertainmentsPlaces/waterparkEntertainment.png', ' Энтузиастов 20', '4,6', 'information_14'),
    'Флай парк'=> array('entertainmentsPlaces/flyparkEntertainment.png', ' Луганская 1', '5,0', 'information_15'),
    'Ресторан Индокитай'=> array('restaurantsPlaces/indokitayRestaurant.png', ' Коммунистическая 80', '4,7', 'information_16'),
    'Памятник дворнику'=> array('memorialsPlaces/cleanerMemorial.png', ' просп. Октября 4/1', '4,5', 'information_17'),
    'Парк Кашкадан'=> array('parksPlaces/parkKashkadan.png', ' Маршала Жукова 31', '4,6', 'information_18'),
    'Странные дела'=> array('entertainmentsPlaces/strangebusienessEntertainment.png', ' Ленина 156', '5,0', 'information_19'),
    'Warpoint'=> array('entertainmentsPlaces/warpointEntertainment.png', ' Степана Кувыкина 18', '5,0', 'information_20'),
    "Papa's club"=> array('entertainmentsPlaces/papasclubEntertainment.png', ' Кавказская, 6/8', '4,8', 'information_21'),
    'Клуб BadHouse'=> array('entertainmentsPlaces/badhouseEntertainment.png', ' Комсомольская 18', '4,4', 'information_22'),
    'Отель Azimut'=> array('hotelsPlaces/azimutHotel.png', ' просп. Октября 81', '4,8', 'information_23'),
    'Амакс Сити Отель'=> array('hotelsPlaces/amaksHotel.png', ' Рихарда Зорге 17', '4,5', 'information_24'),
    'Ресторан Щепка'=> array('restaurantsPlaces/splinterRestaurant.png', ' Рихарда Зорге 64/1', '4,8', 'information_25'),
    'Ресторан Россинский'=> array('restaurantsPlaces/rossinskiyRestaurant.png', ' Цурюпы 7', '4,6', 'information_26'),
    'Торговый центр Мега'=> array('mallsPlaces/megaMall.png', ' Рубежная 174', '5,0', 'information_27'),
    'Торговый центр Семья'=> array('mallsPlaces/familyMall.png', ' просп. Октября 34', '4,7', 'information_28'),
    'Торговый центр Ultra'=> array('mallsPlaces/ultraMall.png', ' Бакалинская 27', '4,9', 'information_29'),
    'Ресторан Оджахури'=> array('restaurantsPlaces/odshahuriRestaurant.png', ' Чернышевского 88', '5,0', 'information_30'),
    'Ресторан Холодец'=> array('restaurantsPlaces/holodecRestaurant.png', ' Комсомольская 105', '4,8', 'information_31'),
    'Ресторан Marco Polo'=> array('restaurantsPlaces/marcoPoloRestaurant.png', ' Чернышевского 75', '5,0', 'information_32'),
);
?>
<ul class="all-places-list">
    <p class="count-finded-places">Все места</p>
    <?php foreach ($title as $name_place => $value){
        ?>
        <li class="searched-place-item"><a href="../informaitionAboutPlaces/<?php echo $value[3]?>.php">
            <img class="items-image-places" src="../static/images/<?php echo $value[0]?>" alt="">
            <h4 class="name-place-section-all-places"><?php echo $name_place?></h4>
            <p class="name-street-place">Уфа, <?php echo $value[1]?></p>
            <p class="score-count-text"><?php echo $value[2]?></p>
        </a>
        <!-- <button class="button-heart" type="submit"></button> -->
        </li>
        <?php
        } ?>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_33.php">
         <img class="items-image-places" src="static/images/museumsPlaces/museumLenin.png" alt="">
            <h4 class="name-place-section-all-places">Дом-музей В.И. Ленина</h4>
            <p class="name-street-place">Уфа, Достоевского 78</p>
            <p class="score-count-text score-hotel-hilton-text">4,1</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_34.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/memorilSalavat.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Салавату Юлаеву</h4>
            <p class="name-street-place">Уфа, Тубинская 3</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_35.php">
         <img class="items-image-places" src="static/images/mallsPlaces/planetaMall.png" alt="">
            <h4 class="name-place-section-all-places">Торговый центр Планета</h4>
            <p class="name-street-place">Уфа, Энтузиастов 20</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_36.php">
        <img class="items-image-places" src="static/images/theatresPlaces/toysTheatre.png" alt="">
            <h4 class="name-place-section-all-places">Башкирский государственный театр кукол</h4>
            <p class="name-street-place">Уфа, просп. Октября 158</p>
            <p class="score-count-text score-entertainment-text">4,4</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_37.php">
        <img class="items-image-places" src="static/images/museumsPlaces/myhistoryMuseum.png" alt="">
            <h4 class="name-place-section-all-places">Исторический парк "Россия - моя история"</h4>
            <p class="name-street-place">Уфа, Менделеева 158</p>
            <p class="score-count-text score-entertainment-text">4,4</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_38.php">
        <img class="items-image-places" src="static/images/theatresPlaces/dramTheatre.png" alt="">
            <h4 class="name-place-section-all-places changed-label-place">Государственный академический русский драматический театр Республики Башкортостан</h4>
            <p class="name-street-place">Уфа, просп. Октября 79</p>
            <p class="score-count-text score-hotel-hilton-text">4,9</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_39.php">
        <img class="items-image-places" src="static/images/parksPlaces/vatanPark.png" alt="">
            <h4 class="name-place-section-all-places">Этнический парк Ватан</h4>
            <p class="name-street-place">Уфа, Заки Валиди 2А</p>
            <p class="score-count-text score-hotel-hilton-text">4,2</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_40.php">
        <img class="items-image-places" src="static/images/parksPlaces/woodPark.png" alt="">
            <h4 class="name-place-section-all-places">Парк Лесоводов Башкирии</h4>
            <p class="name-street-place little-street-name">Уфа, лесопарк им. Лесоводов Башкирии</p>
            <p class="score-count-text score-hotel-hilton-text">4,0</p>
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
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_42.php">
        <img class="items-image-places" src="static/images/theatresPlaces/nurTheatre.png" alt="">
            <h4 class="name-place-section-all-places">Уфимский государственный татарский театр Нур</h4>
            <p class="name-street-place">Уфа, 50-лет СССР 36</p>
            <p class="score-count-text score-entertainment-text">4,7</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_43.php">
        <img class="items-image-places" src="static/images/memorialsPlaces/matrosovMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Александру Матросову</h4>
            <p class="name-street-place">Уфа, сад Александра Матросова</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_44.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/zagirMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Загиру Исмагилову</h4>
            <p class="name-street-place">Уфа, Ленина, 5, корп. 1</p>
            <p class="score-count-text score-hotel-hilton-text">4,6</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_45.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/mayakovskiMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник В.В. Маяковскому</h4>
            <p class="name-street-place">Уфа, сквер им. В.В. Маяковского</p>
            <p class="score-count-text score-hotel-hilton-text">4,2</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_46.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/mustaiKarimMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Мустаю Кариму</h4>
            <p class="name-street-place">Уфа, площадь имени Мустая Карима</p>
            <p class="score-count-text score-hotel-hilton-text">5,0</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_47.php">
         <img class="items-image-places" src="static/images/memorialsPlaces/gafuriMemorial.png" alt="">
            <h4 class="name-place-section-all-places">Памятник Мажиту Гафури</h4>
            <p class="name-street-place">Уфа, 50-лет СССР 36</p>
            <p class="score-count-text score-hotel-hilton-text">4,9</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_48.php">
        <img class="items-image-places" src="static/images/theatresPlaces/mustaKarimaTheatre.png" alt="">
            <h4 class="name-place-section-all-places">Национальный молодёжный театр им. М. Карима</h4>
            <p class="name-street-place">Уфа,  Ленина 62</p>
            <p class="score-count-text score-entertainment-text">4,6</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_49.php">
        <img class="items-image-places" src="static/images/theatresPlaces/gafuriTheatre.png" alt="">
            <h4 class="name-place-section-all-places changed-label-place">Башкирский государственный академический театр драмы им. М. Гафури</h4>
            <p class="name-street-place">Уфа, Заки Валиди 34</p>
            <p class="score-count-text score-hotel-hilton-text">4,8</p>
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_50.php">
         <img class="items-image-places" src="static/images/entertainmentsPlaces/peintbollEntertainment.png" alt="">
            <h4 class="name-place-section-all-places">Пейнтбольный парк Рубикон</h4>
            <p class="name-street-place">Уфа, Комарова 1/2</p>
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
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_56.php">
         <img class="items-image-places" src="static/images/parksPlaces/gardenAksakova.png" alt="">
            <h4 class="name-place-section-all-places">Сад культуры и отдыха им. Аксакова</h4>
            <p class="name-street-place little-street-name">Уфа, сад культуры и отдыха им. Аксакова</p>
            <p class="score-count-text score-hotel-hilton-text">4,4</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_57.php">
         <img class="items-image-places" src="static/images/parksPlaces/gardenSalavat.png" alt="">
            <h4 class="name-place-section-all-places">Сад имени Салавата Юлаева</h4>
            <p class="name-street-place">Уфа, Салавата 22</p>
            <p class="score-count-text score-hotel-hilton-text">4,7</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_58.php">
         <img class="items-image-places" src="static/images/parksPlaces/matrosovaPark.png" alt="">
            <h4 class="name-place-section-all-places">Сад Александра Матросова</h4>
            <p class="name-street-place">Уфа, Тукаева 23</p>
            <p class="score-count-text score-hotel-hilton-text">4,5</p> 
    </a>
    <!-- <button class="button-heart" type="submit"></button> -->
    </li>
    <li class="searched-place-item"><a href="../informaitionAboutPlaces/information_59.php">
         <img class="items-image-places" src="static/images/parksPlaces/gafuriPark.png" alt="">
            <h4 class="name-place-section-all-places">Центральный парк культуры и отдыха им. М.Гафури</h4>
            <p class="name-street-place">Уфа, просп. Октября 77/2в</p>
            <p class="score-count-text score-entertainment-text">3,9</p> 
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