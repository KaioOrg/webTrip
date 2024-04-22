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
        <img class="main-image-place" src="../static/images/memorialsPlaces/memorilSalavatBlack.png" alt="">
        <h1 class="name-place">Памятник Салавату Юлаеву</h1>
        <p class="street-name-place">Тубинская 3</p>
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
                <li class="views-count-item"><p class="views-count-label">(715 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Символом Уфы, который знают во многих городах, стал памятник национальному герою, участнику народного восстания под предводительством Емельяна Пугачева, поэту Салавату Юлаеву. Отправленный на подавление крестьянского бунта, он стал последователем царя-самозванца и боролся за свободу простого народа. Поэзия Салавата Юлаева — яркий образец народной литературы башкирского народа. В своих произведениях поэт рассказывал о родных краях, народе и его обычаях. Значимость памятника для жителей Башкирии подтверждается тем, что с 1999 года он изображается на гербе республики.</br></p>
            <!-- <p class="main-information-about-place" > Первые торговые ряды на месте современного Гостиного Двора появились еще в 1864 году. На площади проходили ярмарки, базары, народные гуляния.</br></p>
            <p class="main-information-about-place"> С тех пор Гостиный Двор претерпевал множество изменений и реконструкций и неизменно был связан с историей самого города.</br></p>
            <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>