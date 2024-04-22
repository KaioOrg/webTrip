<!doctype html>
<html lang="ru" class="mainPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts/logicMainPage.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/resetStyles.css">
    <link rel="stylesheet" href="static/mainPageStyle.css">
    <title>Главная страница</title>
</head>
<body>
    <header>
        <a href="#"><img class="image-menu-bar" src="static/images/icons/menuBarIcon.png" alt=""></a>
        <a href="profilePage.php"><img class="image-user" src="static/images/icons/userIcon2.png" alt=""></a>
        <h2 class="namePage">Отправляйтесь в путешествие вместе с нашим приложением</h2>
    </header>

    <main>
        <section>
            <h3 class="label-section-categories">Категории</h3>
            <ul class="categories">
                <li ><a class="category-item" onclick="selectParksCategory()" href="searchPage.php"><img class="icon-category" src="static/images/icons/parksIcon.png">Парки</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectEntertainmentsCategory()" ><img class="icon-category" src="static/images/icons/entartainmentIcon2.png">Развлечения</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectHotelsCategory()" ><img class="icon-category" src="static/images/icons/hotelIcon.png">Отели</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectMallsCategory()" ><img class="icon-category" src="static/images/icons/mallsIcon.png">Торговые центры</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectRestaurantsCategory()"><img class="icon-category" src="static/images/icons/restaurantIcon2.png">Рестораны</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectTheatresCategory()"><img class="icon-category" src="static/images/icons/theatreIconMain.png">Театры</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectMuseumsCategory()"><img class="icon-category" src="static/images/icons/museumIcon.png">Музеи</a></li>
                <li ><a class="category-item" href="searchPage.php" onclick="selectMonumentsCategory()"><img class="icon-category" src="static/images/icons/monumentIcon.png">Памятники</a></li>
            </ul>
        </section>

        <script type="text/javascript">
            let isPushedForChange = [false, false, false, false, false, false, false, false]

            function selectParksCategory(){
                isPushedForChange[0] = true
                localStorage.setItem('isPushedForChangeParks', isPushedForChange[0])
            }

            function selectEntertainmentsCategory(){
                isPushedForChange[1] = true
                localStorage.setItem('isPushedForChangeEntertainments', isPushedForChange[1])
            }

            function selectHotelsCategory(){
                isPushedForChange[2] = true
                localStorage.setItem('isPushedForChangeHotels', isPushedForChange[2])
            }

            function selectMallsCategory(){
                isPushedForChange[3] = true
                localStorage.setItem('isPushedForChangeMalls', isPushedForChange[3])
            }

            function selectRestaurantsCategory(){
                isPushedForChange[4] = true
                localStorage.setItem('isPushedForChangeRestaurants', isPushedForChange[4])
            }

            function selectTheatresCategory(){
                isPushedForChange[5] = true
                localStorage.setItem('isPushedForChangeTheatres', isPushedForChange[5])
            }

            function selectMuseumsCategory(){
                isPushedForChange[6] = true
                localStorage.setItem('isPushedForChangeMuseums', isPushedForChange[6])
            }

            function selectMonumentsCategory(){
                isPushedForChange[7] = true
                localStorage.setItem('isPushedForChangeMonuments', isPushedForChange[7])
            }
        </script>

        <section class="hot-places">
            <h3 class="name-hot-places">Популярные места</h3>
            <a href="searchPage.php"><p class="text-see-all-places">Все</p></a>
            <div class="card-gradient">
            </div>
            <ul class="hot-places-list">
                <li class="hot-places-item">
                    <a href="informaitionAboutPlaces/information_12.php">
                        <div class="first-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Монумент Дружбы
                            </div>
                            <div class="score-text">
                                4,9
                            </div>
                        </div>
                    </a>
                </li>
                <li class="hot-places-item">
                    <a href="informaitionAboutPlaces/information_34.php">
                        <div class="second-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Памятник Славату Юлаеву
                            </div>
                            <div class="score-text">
                                5,0
                            </div>
                        </div>
                    </a>
                </li>
                <li class="hot-places-item">
                    <a href="informaitionAboutPlaces/information_17.php">
                        <div class="third-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Памятник дворнику
                            </div>
                            <div class="score-text icon-loc-place">
                                4,5
                            </div>
                        </div>
                    </a>
                </li>
                <li class="hot-places-item">
                    <a href="informaitionAboutPlaces/informationAboutPlaces.php">
                        <div class="fourth-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Гостиный двор
                                <br />
                            </div>
                            <div class="score-text">
                                4,6
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
    </main>

<footer class="footer-main-page">
    <ul class="footer-list">
        <li class="footer-list-item"><a href="index.php" class="footer-button"><img class="footer-icon home-icon" src="static/images/icons/homeIconGreen.png" alt=""></a></li>
        <li class="footer-list-item"><a href="searchPage.php" class="footer-button"><img class="footer-icon search-icon" src="static/images/icons/searchIcon2.png" alt=""></a></li>
        <!--<li class="footer-list-item"><a href="#"><img class="footer-icon" src="static/heartIcon.png" alt=""></a></li>-->
        <li class="footer-list-item"><a href="notificationsPage.php" class="footer-button"><img class="footer-icon" src="static/images/icons/notificationIcon.png" alt=""></a></li>
        <li class="footer-list-item"><a href="profilePage.php" class="footer-button"><img class="footer-icon" src="static/images/icons/profileIcon.png" alt=""></a></li>
    </ul>
</footer>
</body>
</html>