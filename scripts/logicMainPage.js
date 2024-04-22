let isPushedButton = [false, false, false, false, false, false, false, false]
let isPushedCategoryButton = [false, false, false, false, false, false, false, false]

setTimeout(selectParksCategory, 100)
setTimeout(selectEntertainmentsCategory, 100)
setTimeout(selectHotelsCategory, 100)
setTimeout(selectMallsCategory, 100)
setTimeout(selectRestaurantsCategory, 100)
setTimeout(selectTheatresCategory, 100)
setTimeout(selectMuseumsCategory, 100)
setTimeout(selectMonumentsCategory, 100)

function changeStateOnTrue(){
    isPushedButton[0] = true
    isPushedButton[1] = true
    isPushedButton[2] = true
    isPushedButton[3] = true
    isPushedButton[4] = true
    isPushedButton[5] = true
    isPushedButton[6] = true
    isPushedButton[7] = true
}

function changeColorOnHotelButtonFilter(){
    if(isPushedButton[0] === false){
        document.querySelector(".hotel-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".hotel-text-button").style.color = "#ffffff"
        $(".hotel-text-button").addClass("hotel-new-icon")
        changeStateOnTrue()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-hotels-category").style.display = "table"
    }else if(isPushedButton[0]){
        document.querySelector(".hotel-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".hotel-text-button").style.color = "#72727E"
        $(".hotel-new-icon").addClass("hotel-text-button").removeClass("hotel-new-icon")
        document.querySelector(".all-places-list").style.display = "table"
        document.querySelector(".list-hotels-category").style.display = "none"
        isPushedButton[0] = false
    }
}

function changeColorOnEntertainmentButtonFilter(){
    if(isPushedButton[1] === false){
        document.querySelector(".entertainment-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".entertainment-text-button").style.color = "#ffffff"
        $(".entertainment-text-button").addClass("entertainment-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-entertainments-category").style.display = "table"
    }else if(isPushedButton[1]) {
        document.querySelector(".entertainment-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".entertainment-text-button").style.color = "#72727E"
        $(".entertainment-new-icon").addClass("entertainment-text-button").removeClass("entertainment-new-icon")
        document.querySelector(".list-entertainments-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[1] = false
    }
}

function changeColorOnParkButtonFilter(){
    if(isPushedButton[2] === false){
        document.querySelector(".park-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".park-text-button").style.color = "#ffffff"
        $(".park-text-button").addClass("park-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-parks-category").style.display = "table"
    }else if(isPushedButton[2]) {
        document.querySelector(".park-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".park-text-button").style.color = "#72727E"
        $(".park-new-icon").addClass("park-text-button").removeClass("park-new-icon")
        document.querySelector(".list-parks-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[2] = false
    }
}

function changeColorOnMallButtonFilter(){
    if(isPushedButton[3] === false){
        document.querySelector(".malls-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".malls-text-button").style.color = "#ffffff"
        $(".malls-text-button").addClass("malls-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-malls-category").style.display = "table"
    }else if(isPushedButton[3]) {
        document.querySelector(".malls-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".malls-text-button").style.color = "#72727E"
        $(".malls-new-icon").addClass("malls-text-button").removeClass("malls-new-icon")
        document.querySelector(".list-malls-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[3] = false
    }
}

function changeColorOnRestaurantButtonFilter(){
    if(isPushedButton[4] === false){
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".restaurant-text-button").style.color = "#ffffff"
        $(".restaurant-text-button").addClass("restaurant-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-restaurants-category").style.display = "table"
    }else if(isPushedButton[4]) {
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".restaurant-text-button").style.color = "#72727E"
        $(".restaurant-new-icon").addClass("restaurant-text-button").removeClass("restaurant-new-icon")
        document.querySelector(".list-restaurants-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[4] = false
    }
}

function changeColorOnTheatreButtonFilter(){
    if(isPushedButton[5] === false){
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".theatre-text-button").style.color = "#ffffff"
        $(".theatre-text-button").addClass("theatre-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-theatres-category").style.display = "table"
    }else if(isPushedButton[5]) {
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".theatre-text-button").style.color = "#72727E"
        $(".theatre-new-icon").addClass("theatre-text-button").removeClass("theatre-new-icon")
        document.querySelector(".list-theatres-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[5] = false
    }
}

function changeColorOnMuseumButtonFilter(){
    if(isPushedButton[6] === false){
        document.querySelector(".museum-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".museum-text-button").style.color = "#ffffff"
        $(".museum-text-button").addClass("museum-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-museums-category").style.display = "table"
    }else if(isPushedButton[6]) {
        document.querySelector(".museum-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".museum-text-button").style.color = "#72727E"
        $(".museum-new-icon").addClass("museum-text-button").removeClass("museum-new-icon")
        document.querySelector(".list-museums-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[6] = false
    }
}

function changeColorOnMomumentButtonFilter(){
    if(isPushedButton[7] === false){
        document.querySelector(".monument-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".monument-text-button").style.color = "#ffffff"
        $(".monument-text-button").addClass("monument-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-memorials-category").style.display = "table"
    }else if(isPushedButton[7]) {
        document.querySelector(".monument-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".monument-text-button").style.color = "#72727E"
        $(".monument-new-icon").addClass("monument-text-button").removeClass("monument-new-icon")
        document.querySelector(".list-memorials-category").style.display = "none"
        document.querySelector(".all-places-list").style.display = "table"
        isPushedButton[7] = false
    }
}



function selectParksCategory(){
    isPushedCategoryButton[0] = localStorage.getItem('isPushedForChangeParks')

    if(isPushedCategoryButton[0]){
        document.querySelector(".park-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".park-text-button").style.color = "#ffffff"
        $(".park-text-button").addClass("park-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-parks-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeParks')
    }
}

function selectEntertainmentsCategory(){
    isPushedCategoryButton[1] = localStorage.getItem('isPushedForChangeEntertainments')

    if(isPushedCategoryButton[1]){
        document.querySelector(".entertainment-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".entertainment-text-button").style.color = "#ffffff"
        $(".entertainment-text-button").addClass("entertainment-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-entertainments-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeEntertainments')
    }
}

function selectHotelsCategory(){
    isPushedCategoryButton[2] = localStorage.getItem('isPushedForChangeHotels')

    if(isPushedCategoryButton[2]){
        document.querySelector(".hotel-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".hotel-text-button").style.color = "#ffffff"
        $(".hotel-text-button").addClass("hotel-new-icon")
        changeStateOnTrue()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-hotels-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeHotels')
    }
}

function selectMallsCategory(){
    isPushedCategoryButton[3] = localStorage.getItem('isPushedForChangeMalls')

    if(isPushedCategoryButton[3]){
        document.querySelector(".malls-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".malls-text-button").style.color = "#ffffff"
        $(".malls-text-button").addClass("malls-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-malls-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeMalls')
    }
}

function selectRestaurantsCategory(){
    isPushedCategoryButton[4] = localStorage.getItem('isPushedForChangeRestaurants')

    if(isPushedCategoryButton[4]){
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".restaurant-text-button").style.color = "#ffffff"
        $(".restaurant-text-button").addClass("restaurant-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-restaurants-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeRestaurants')
    }
}

function selectTheatresCategory(){
    isPushedCategoryButton[5] = localStorage.getItem('isPushedForChangeTheatres')

    if(isPushedCategoryButton[5]){
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".theatre-text-button").style.color = "#ffffff"
        $(".theatre-text-button").addClass("theatre-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnMuseumButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-theatres-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeTheatres')
    }
}

function selectMuseumsCategory(){
    isPushedCategoryButton[6] = localStorage.getItem('isPushedForChangeMuseums')

    if(isPushedCategoryButton[6]){
        document.querySelector(".museum-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".museum-text-button").style.color = "#ffffff"
        $(".museum-text-button").addClass("museum-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMomumentButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-museums-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeMuseums')
    }
}

function selectMonumentsCategory(){
    isPushedCategoryButton[7] = localStorage.getItem('isPushedForChangeMonuments')

    if(isPushedCategoryButton[7]){
        document.querySelector(".monument-button-filter").style.backgroundColor = "#83d350"
        document.querySelector(".monument-text-button").style.color = "#ffffff"
        $(".monument-text-button").addClass("monument-new-icon")
        changeStateOnTrue()
        changeColorOnHotelButtonFilter()
        changeColorOnEntertainmentButtonFilter()
        changeColorOnParkButtonFilter()
        changeColorOnMallButtonFilter()
        changeColorOnRestaurantButtonFilter()
        changeColorOnTheatreButtonFilter()
        changeColorOnMuseumButtonFilter()
        document.querySelector(".all-places-list").style.display = "none"
        document.querySelector(".list-memorials-category").style.display = "table"
        localStorage.removeItem('isPushedForChangeMonuments')
    }
}