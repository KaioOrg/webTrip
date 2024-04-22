<!DOCTYPE html>
<html lang="ru" class="page" >
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/resetStyles.css">
    <link rel="stylesheet" href="../static/informationAboutPlacesStyle.css">
    <script src="../scripts/addLovelyPlace.js"></script>
    <title>Поиск мест</title>
</head>
<body>
    <header class="headerPage" >
        <a href="../searchPage.php"><button class="arrow-back-page"></button></a>
        <img class="main-image-place" src="../static/images/hotelsPlaces/presidentHotelBlack.png" alt="">
        <h1 class="name-place">Президент отель</h1>
        <p class="street-name-place">Авроры 2</p>
        <button class="button-heart" onclick="changeImage()"></button>
    </header>

    <main>
        <!-- <section class="chager-buttons"> -->
            <!-- <ul class="list-buttons-changer"> -->
                <!-- <li class="item-button-changer"><button class="button-with-information">Обзор</button></li> -->
                <!-- <li class="item-button-changer" ><button class="button-with-images">Фотографии</button></li>
                <li class="item-button-changer" ><button class="button-with-images">На карте</button></li> -->
            <!-- </ul> -->
        <!-- </section> -->

        <section class="all-information">
            <ul class="list-stars">
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIconGrey.png" alt=""></li>
                <li class="score-count-item"><p class="score-count-label">4,9</p></li>
                <li class="views-count-item"><p class="views-count-label">(1585 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">В отеле «Президент» к услугам гостей звукоизолированные номера и апартаменты с балконом, а также ресторан, бар и салон красоты. Отель расположен в зеленой зоне Уфы, в 10 минутах езды от выставочного комплекса «ВДНХ ЭКСПО УФА». В числе удобств бесплатная парковка и бесплатный Wi-Fi.</br></p>
            <p class="main-information-about-place" >Просторные номера и апартаменты отеля «Президент» оснащены кондиционером, телевизором с плоским экраном, мини-баром и сейфом. В распоряжении гостей электрический чайник. Ванные комнаты укомплектованы туалетно-косметическими принадлежностями итальянского производства.</br></p>
            <p class="main-information-about-place">В отеле можно поиграть в бильярд, предоставляются услуги химчистки, автомойки и экскурсионного бюро. В ресторане «Премьер» подают блюда русской, башкирской и европейской кухни, а по утрам сервируется континентальный завтрак или завтрак «шведский стол». В круглосуточном баре Scrooge можно заказать различные коктейли, вино и виски. Во время обеда и ужина играет живая музыка. Отель находится в 15 минутах езды от исторического центра Уфы и памятника Салавату Юлаеву. Поездка до международного аэропорта Уфа занимает 20 минут.</br></p>
            <!-- <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>