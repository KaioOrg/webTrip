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
        <img class="main-image-place" src="../static/images/hotelsPlaces/hamptonHotelBlack.png" alt="">
        <h1 class="name-place">Отель Hampton Hilton Ufa</h1>
        <p class="street-name-place">50-летия Октября 17</p>
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
                <li class="views-count-item"><p class="views-count-label">(6237 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Отель «Hampton by Hilton Уфа» находится в Уфе. Этот отель располагается на одной из главных улиц города. До отеля можно добраться как на автомобиле, так и на общественном транспорте. В шаговой доступности находятся: торговые центры, парк им. Якутова, сквер 50-ти летия Победы, сквер Борцам революции, Уфа-Арена, Тинькофф-холл, несколько ресторанов и кафе.</br></p>
            <p class="main-information-about-place" >Для гостей работает круглосуточная стойка регистрации и зона лобби-бара, где до 02:00 можно заказать блюда по меню, а напитки и закуски доступны 24 часа. Для путешественников на машине есть круглосуточная зона парковки. На случай деловых встреч, вебинаров и других мероприятий, в отеле имеется конференц-зал и бизнес-центр.</br></p>
            <p class="main-information-about-place">В отеле есть высокоскоростной интернет, фото-зона, круглосуточный тренажерный зал.</br></p>
            <!-- <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>