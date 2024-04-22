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
        <img class="main-image-place" src="../static/images/entertainmentsPlaces/warpointEntertainmentBlack.png" alt="">
        <h1 class="name-place">Warpoint</h1>
        <p class="street-name-place">Степана Кувыкина 18</p>
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
                <li class="views-count-item"><p class="views-count-label">(637 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Аналог лазертага и пейнтбола на площадке 200 кв. м со свободным перемещением – для игры используются современные шлемы виртуальной реальности без проводов и дополнительного оборудования.</br></p>
            <p class="main-information-about-place" >Игра проходит в формате матча между двумя командами. Одна из команд играет роль террористов, а другая контртеррористического спецназа. 10 карт, 3 игровых режима и 16 видов оружия. В начале каждого раунда игроки могут выбрать оружие на свой вкус, легендарные AK-47 для террористов и M4A1 Carbine для контртеррористов будут верным помощником.</br></p>
            <p class="main-information-about-place">Собирайте команду, разрабатывайте план и почувствуйте себя участниками боевых действий!</br></p>
            <!-- <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>