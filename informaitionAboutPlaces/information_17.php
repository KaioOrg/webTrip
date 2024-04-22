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
        <img class="main-image-place" src="../static/images/memorialsPlaces/cleanerMemorialBlack.png" alt="">
        <h1 class="name-place">Памятник дворнику</h1>
        <p class="street-name-place">просп. Октября 4/1</p>
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
                <li class="score-count-item"><p class="score-count-label">4,5</p></li>
                <li class="views-count-item"><p class="views-count-label">(86 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Необычный памятник был установлен в городе Уфа в ноябре 2007 года возле центра торговли и развлечений «Мир». Скульптура, выполненная из бронзы, олицетворяет работника-дворника. Памятник, весом в триста килограмм, выполнен в рост человека. Автором проекта выступила управляющая компания, положившая начало установке целой серии скульптур в рамках празднования 450-летия вхождения Башкортостана в состав России.</br></p>
            <p class="main-information-about-place" >К реализации проекта были привлечены дизайнеры, монументалисты, работники культуры и искусства. Памятник дворнику был выполнен скульптором Халитом Галиуллиным, а изготовлен в городе Жуковском. У собирательного образа дворника имеется даже имя – Булат. Желание предать Уфе запоминающиеся черты, привлечь внимание туристов, воспитать эстетический вкус у населения и одновременно с этим привить уважение к нелёгкой работе дворника - основная цель проекта.</br></p>
            <p class="main-information-about-place">Увековеченный дворник ежедневно оправдывает надежды авторов проекта: за относительно короткий срок скульптура стала излюбленной достопримечательностью не только для гостей города, но и гордостью коренного населения. Частенько туристы просят местных дворников встать в ряд с памятником, чтобы придать фотографии более необычный и запоминающийся вид.</br></p>
            <!-- <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>