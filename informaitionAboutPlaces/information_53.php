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
    <link rel="stylesheet" href="../static/informationAboutPlacesStyle_2.css">
    <script src="../scripts/addLovelyPlace.js"></script>
    <title>Поиск мест</title>
</head>
<body>
    <header class="headerPage" >
        <a href="../searchPage.php"><button class="arrow-back-page"></button></a>
        <img class="main-image-place" src="../static/images/museumsPlaces/museumArchaeologyBlack.png" alt="">
        <h1 class="name-place">Музей археологии и этнографии</h1>
        <p class="street-name-place">Карла Маркса 6</p>
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
                <li class="score-count-item"><p class="score-count-label">4,6</p></li>
                <li class="views-count-item"><p class="views-count-label">(202 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Музей археологии и этнографии в Уфе был открыт в 1980 году. Его основа — это крупнейшее собрание редких предметов, которые были найдены во время раскопок и поисков в Поволжье, Сибири, центральной части страны.</br></p>
            <p class="main-information-about-place" >В фондах музея тщательно берегут почти 200 тысяч единиц исторических раритетов, самые ценные из которых — это предметы древних поселений Башкирской земли. Музей может гордиться настоящим скелетом мамонта. Здесь же есть макет Шульган-Таш — пещеры, всемирно известной своей живописью. Неизвестные художники, жившие много тысячелетий назад, изобразили на стенах древних животных и оставили необычные знаки.</br></p>
            <p class="main-information-about-place">Известен музей и своей старинной коллекцией из золота. Здесь часто проводятся выездные выставки. Собрание музея участвовало в показах в Германии, Италии, Швеции. Например, совместно с Эрмитажем музей археологии показывал свою драгоценную коллекцию в американском Музее искусств «Метрополитен» и «Палаццо Реале» в Италии.</br></p>
            <!-- <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>