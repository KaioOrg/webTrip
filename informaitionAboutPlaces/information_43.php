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
        <img class="main-image-place" src="../static/images/memorialsPlaces/matrosovMemorialBlack.png" alt="">
        <h1 class="name-place">Памятник Александру Матросову</h1>
        <p class="street-name-place">сад Александра Матросова</p>
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
                <li class="views-count-item"><p class="views-count-label">(124 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">В парке им. Ленина находится памятник одному из героев Отечественной войны Александру Матросову. Сначала он был установлен на центральной аллее, затем его перенесли в другое место, на площадку рядом со школой МВД. Позже памятник возвратили обратно в парк, но поставили на одной из боковых аллей.</br></p>
            <p class="main-information-about-place" >Создал памятник скульптор Л. Ю. Эйдлин, народный художник Советского Союза, лауреат сталинской премии, награжденный орденом Ленина. Ему принадлежало авторство множества известных скульптур, в том числе посвященных вождям революции.</br></p>
            <p class="main-information-about-place">Александр Матросов родился в 1924 году. Из-за сложностей в семье детство он провел в детском доме и трудовой колонии города Уфы. К сожалению, историки не смогли установить многие детали из детства Матросова. Затем он был призван в Советскую армию и воевал в одной из частей Калининского фронта. В одном из боев он закрыл собой амбразуру дзота, ценой своей жизни давая возможность советским солдатам пойти в атаку.</br></p>
            <p class="main-information-about-place">Скульптура представляет собой фигуру солдата с висящим на шее автоматом и плащ-палаткой на плечах. Отлита скульптура из бронзы и установлена на высоком гранитном постаменте. Стоит отметить, что в парке Победы находится еще один памятник герою. На высокой стеле располагается изображение А. Матросова и М. Губайдуллина, также закрывшем своим телом амбразуру вражеского дзота.</p>
        </section>
    </main>
</body>
</html>