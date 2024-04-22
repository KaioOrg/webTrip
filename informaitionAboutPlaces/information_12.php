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
        <img class="main-image-place" src="../static/images/memorialsPlaces/monumentBlack.png" alt="">
        <h1 class="name-place">Монумент Дружбы</h1>
        <p class="street-name-place">Сочинская</p>
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
                <li class="views-count-item"><p class="views-count-label">(148 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Памятник «Монумент дружбы» был возведен в честь 400-летнего юбилея присоединения Башкортостана к России. Монумент установлен в историческом месте в центре города и является объектом культурного наследия народов Российской Федерации федерального значения.</br></p>
            <p class="main-information-about-place" >До первой половины XVI века территория Башкортостана входила в состав Астраханского, Казанского ханств, Ногайской Орды и Сибирского ханства. После присоединения Казанского ханства к Московскому государству Иван Грозный предложил башкирам добровольно войти в состав Российского государства. Соглашение было достигнуто в 1557 году.</br></p>
            <p class="main-information-about-place">В 2006 году, перед 450-летием памятной даты вхождения Башкирии в состав Российского государства, были выполнены реконструкция монумента и благоустройство прилегающей территории.</br></p>
            <p class="main-information-about-place">С холма, где расположен памятник, открывается панорамный вид на реку Белая. Возле Монумента дружбы сейчас проходят различные общественно-политические и развлекательные мероприятия</p>
        </section>
    </main>
</body>
</html>