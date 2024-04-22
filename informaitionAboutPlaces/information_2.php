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
        <img class="main-image-place" src="../static/images/hotelsPlaces/nesterovplazaHotelBlack.png" alt="">
        <h1 class="name-place">Nesterov Plaza</h1>
        <p class="street-name-place">Верхнеторговая площадь 2</p>
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
                <li class="score-count-item"><p class="score-count-label">4,2</p></li>
                <li class="views-count-item"><p class="views-count-label">(4685 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Отель Nesterov Plaza расположен в центре города Уфы. В шаговой доступности от отеля находится множество ресторанов, магазинов, а также бизнес-центр, фитнес-центр и многое другое. Расстояние до железнодорожного вокзала составит 3.8 км, а до международного аэропорта 21 км.</br></p>
            <p class="main-information-about-place" >К услугам гостей номера различной категории: Стандарт, Улучшенный, Люкс. Номера оснащены всем необходимым: сейф, климат-контроль, телевизор со спутниковым TV и мини-баром. На всей территории отеля предоставляется бесплатный Wi-Fi. В каждом номере имеется рабочая зона, благодаря которой вы сможете заняться запланированными делами – для этого в вашем распоряжении письменный стол, лампа и эргономичный стул.</br></p>
            <p class="main-information-about-place">На территории отеля предоставляется бесплатная частная парковка и работает бесплатный Wi-Fi. Ежедневно в отеле накрывают завтрак по типу шведский стол. По запросу завтрак можно подать в номер.</br></p>
            <!-- <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>