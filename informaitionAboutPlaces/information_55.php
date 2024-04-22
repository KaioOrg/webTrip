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
        <img class="main-image-place" src="../static/images/hotelsPlaces/sheratonplazaHotelBlack.png" alt="">
        <h1 class="name-place">Sheratonplaza Ufa Congress Hotel</h1>
        <p class="street-name-place">Цурюпы 7</p>
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
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="score-count-item"><p class="score-count-label">5,0</p></li>
                <li class="views-count-item"><p class="views-count-label">(1022 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Отель SheratonPlaza Ufa Congress Hotel расположен в Уфе. Этот отель находится 1 км от центра города. Рядом с отелем — Национальный музей Башкортостана, Башкирский государственный театр оперы и балета и Парк Салавата Юлаева.</br></p>
            <p class="main-information-about-place" >Скоротать вечер или приятно провести время перед сном в уютной атмосфере можно в баре. Время вспомнить о хлебе насущном! Для гостей работает ресторан. На территории работает бесплатный Wi-Fi. Уточняйте информацию сразу при заезде. Для путешественников на машине организована платная парковка.</br></p>
            <p class="main-information-about-place">Гостям также доступны следующие услуги: сауна, спа-центр и баня. Спортивные гости оценят фитнес-центр и тренажёрный зал. Для участников деловых встреч предусмотрен бизнес-центр. Доступная среда: работает лифт.</br></p>
            <p class="main-information-about-place">Дополнительно: прачечная, банкомат, гладильные услуги, пресса и консьерж.</p>
        </section>
    </main>
</body>
</html>