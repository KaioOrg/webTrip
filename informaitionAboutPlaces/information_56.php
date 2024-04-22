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
        <img class="main-image-place" src="../static/images/parksPlaces/gardenAksakovaBlack.png" alt="">
        <h1 class="name-place">Сад культуры и отдыха им. Аксакова</h1>
        <p class="street-name-place">сад культуры и отдыха им. Аксакова</p>
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
                <li class="score-count-item"><p class="score-count-label">4,4</p></li>
                <li class="views-count-item"><p class="views-count-label">(337 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Парк, названный по имени знаменитого писателя, расположен на улице Пушкина города Уфы. Одно из главных его украшений — небольшой пруд, в котором водится много рыбы. Самостоятельная рыбалка здесь запрещена, но периодически проводятся организованные соревнования по лову рыбы. Уфимцы и гости города могут круглый год любоваться и лебедями-шипунами. Птицы зимуют в специальном домике.</br></p>
            <p class="main-information-about-place" >При жизни великого писателя этого водоема еще не существовало. Здесь находился овраг с протекавшей по дну небольшой речкой. В Голубиной слободке 20 сентября 1791 года и появился на свет будущий писатель, критик, мемуарист Сергей Тимофеевич Аксаков. Его родители приобрели большую усадьбу с красивым просторным домом. Позднее на этом месте разбили парк, сменивший за годы существования несколько названий и владельцев.</br></p>
            <!-- <p class="main-information-about-place"> С тех пор Гостиный Двор претерпевал множество изменений и реконструкций и неизменно был связан с историей самого города.</br></p>
            <p class="main-information-about-place">Гостиный Двор – больше, чем торговый комплекс. Это объект культурного наследия и сосредоточение культурной и общественной жизни. Первый фудмолл «Гастрономика», множество ресторанов, баров, развлечений, сувенирных магазинов, каток. Гостиный Двор – излюбленное место для встреч и прогулок.</p> -->
        </section>
    </main>
</body>
</html>