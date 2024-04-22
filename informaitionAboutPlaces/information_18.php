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
        <img class="main-image-place" src="../static/images/parksPlaces/parkKashkadanBlack.png" alt="">
        <h1 class="name-place">Парк Кашкадан</h1>
        <p class="street-name-place">Маршала Жукова 31/p>
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
                <li class="views-count-item"><p class="views-count-label">(62 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">В центре одного из городских микрорайонов Сипайлово расположено одно из любимых мест отдыха уфимцев. Особенно популярно это место бывает летом. Речь идет о парке культуры и отдыха Кашкадан, на территории которого находится одноименное озеро.</br></p>
            <p class="main-information-about-place" >Парк Кашкадан был основан в 2002 году. Его площадь составляет почти 32 гектара, из которых одна треть занята озером. Для отдыхающих здесь находится прекрасный песчаный пляж с лежаками, зонтиками и кабинками для переодевания. Каждое лето работает лодочная станция, можно арендовать лодку или катамаран. За безопасность отдыхающих отвечает специально созданный спасательный пост.</br></p>
            <p class="main-information-about-place">С 2019 года в парке велась масштабная реконструкция, в ходе которой были проведены работы по очистке и углублению водоема, а также благоустройство территории. Открытие обновленного парка состоялось 12 июня 2022 года и было приурочено ко Дню города.</br></p>
            <p class="main-information-about-place">На сегодняшний день «Кашкадан» заметно преобразился: парк озеленили, по периметру озера появились новые пирсы, зоны отдыха и причал для ловли рыбы, были построены новые игровые и спортивные площадки. Помимо этого, вокруг водоема проложили систему ливневой канализации, которая будет препятствовать загрязнению воды.</p>
        </section>
    </main>
</body>
</html>