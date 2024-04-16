let isPushedButton = [false, false, false, false, false, false, false, false]

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
        document.querySelector(".hotel-button-filter").style.backgroundColor = "#6495ed"
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
        document.querySelector(".entertainment-button-filter").style.backgroundColor = "#6495ed"
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
        document.querySelector(".park-button-filter").style.backgroundColor = "#6495ed"
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
        document.querySelector(".malls-button-filter").style.backgroundColor = "#6495ed"
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
    }else if(isPushedButton[3]) {
        document.querySelector(".malls-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".malls-text-button").style.color = "#72727E"
        $(".malls-new-icon").addClass("malls-text-button").removeClass("malls-new-icon")
        isPushedButton[3] = false
    }
}

function changeColorOnRestaurantButtonFilter(){
    if(isPushedButton[4] === false){
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#6495ed"
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
    }else if(isPushedButton[4]) {
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".restaurant-text-button").style.color = "#72727E"
        $(".restaurant-new-icon").addClass("restaurant-text-button").removeClass("restaurant-new-icon")
        isPushedButton[4] = false
    }
}

function changeColorOnTheatreButtonFilter(){
    if(isPushedButton[5] === false){
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#6495ed"
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
    }else if(isPushedButton[5]) {
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".theatre-text-button").style.color = "#72727E"
        $(".theatre-new-icon").addClass("theatre-text-button").removeClass("theatre-new-icon")
        isPushedButton[5] = false
    }
}

function changeColorOnMuseumButtonFilter(){
    if(isPushedButton[6] === false){
        document.querySelector(".museum-button-filter").style.backgroundColor = "#6495ed"
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
    }else if(isPushedButton[6]) {
        document.querySelector(".museum-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".museum-text-button").style.color = "#72727E"
        $(".museum-new-icon").addClass("museum-text-button").removeClass("museum-new-icon")
        isPushedButton[6] = false
    }
}

function changeColorOnMomumentButtonFilter(){
    if(isPushedButton[7] === false){
        document.querySelector(".monument-button-filter").style.backgroundColor = "#6495ed"
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
    }else if(isPushedButton[7]) {
        document.querySelector(".monument-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".monument-text-button").style.color = "#72727E"
        $(".monument-new-icon").addClass("monument-text-button").removeClass("monument-new-icon")
        isPushedButton[7] = false
    }
}