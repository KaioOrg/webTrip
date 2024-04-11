let isPushedHotelButton = false
let isPushedEntertainmentButton = false
let isPushedParkButton = false
let isPushedMallButton = false
let isPushedRestaurantButton = false
let isPushedTheatreButton = false
let isPushedMuseumButton = false

function changeOnMainPage(){
    window.location.href = "index.html"
}

function changeOnSearchPage(){
    window.location.href = "searchPage.html"
}

function changeColorOnHotelButtonFilter(){
    if(isPushedHotelButton === false){
        document.querySelector(".hotel-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".hotel-text-button").style.color = "#ffffff"
        $(".hotel-text-button").addClass("hotel-new-icon")
        // document.querySelector(".all-places-searched").style.display = "none"
        isPushedHotelButton = true
    }else if(isPushedHotelButton === true){
        document.querySelector(".hotel-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".hotel-text-button").style.color = "#72727E"
        $(".hotel-new-icon").addClass("hotel-text-button").removeClass("hotel-new-icon")
        isPushedHotelButton = false
    }
}

function changeColorOnEntertainmentButtonFilter(){
    if(isPushedEntertainmentButton === false){
        document.querySelector(".entertainment-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".entertainment-text-button").style.color = "#ffffff"
        $(".entertainment-text-button").addClass("entertainment-new-icon")
        isPushedEntertainmentButton = true
    }else if(isPushedEntertainmentButton === true) {
        document.querySelector(".entertainment-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".entertainment-text-button").style.color = "#72727E"
        $(".entertainment-new-icon").addClass("entertainment-text-button").removeClass("entertainment-new-icon")
        isPushedEntertainmentButton = false
    }
}

function changeColorOnParkButtonFilter(){
    if(isPushedParkButton === false){
        document.querySelector(".park-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".park-text-button").style.color = "#ffffff"
        $(".park-text-button").addClass("park-new-icon")
        isPushedParkButton = true
    }else if(isPushedParkButton === true) {
        document.querySelector(".park-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".park-text-button").style.color = "#72727E"
        $(".park-new-icon").addClass("park-text-button").removeClass("park-new-icon")
        isPushedParkButton = false
    }
}

function changeColorOnMallButtonFilter(){
    if(isPushedMallButton === false){
        document.querySelector(".malls-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".malls-text-button").style.color = "#ffffff"
        $(".malls-text-button").addClass("malls-new-icon")
        isPushedMallButton = true
    }else if(isPushedMallButton === true) {
        document.querySelector(".malls-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".malls-text-button").style.color = "#72727E"
        $(".malls-new-icon").addClass("malls-text-button").removeClass("malls-new-icon")
        isPushedMallButton = false
    }
}

function changeColorOnRestaurantButtonFilter(){
    if(isPushedRestaurantButton === false){
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".restaurant-text-button").style.color = "#ffffff"
        $(".restaurant-text-button").addClass("restaurant-new-icon")
        isPushedRestaurantButton = true
    }else if(isPushedRestaurantButton === true) {
        document.querySelector(".restaurant-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".restaurant-text-button").style.color = "#72727E"
        $(".restaurant-new-icon").addClass("restaurant-text-button").removeClass("restaurant-new-icon")
        isPushedRestaurantButton = false
    }
}

function changeColorOnTheatreButtonFilter(){
    if(isPushedTheatreButton === false){
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".theatre-text-button").style.color = "#ffffff"
        $(".theatre-text-button").addClass("theatre-new-icon")
        isPushedTheatreButton = true
    }else if(isPushedTheatreButton === true) {
        document.querySelector(".theatre-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".theatre-text-button").style.color = "#72727E"
        $(".theatre-new-icon").addClass("theatre-text-button").removeClass("theatre-new-icon")
        isPushedTheatreButton = false
    }
}

function changeColorOnMuseumButtonFilter(){
    if(isPushedMuseumButton === false){
        document.querySelector(".museum-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".museum-text-button").style.color = "#ffffff"
        $(".museum-text-button").addClass("museum-new-icon")
        isPushedMuseumButton = true
    }else if(isPushedMuseumButton === true) {
        document.querySelector(".museum-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".museum-text-button").style.color = "#72727E"
        $(".museum-new-icon").addClass("museum-text-button").removeClass("museum-new-icon")
        isPushedMuseumButton = false
    }
}