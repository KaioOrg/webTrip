let isPushedHotelButton = false
let isPushedEntertainmentButton = false
let isPushedActivityButton = false
let isPushedMallButton = false

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

function changeColorOnActivityButtonFilter(){
    if(isPushedActivityButton === false){
        document.querySelector(".activity-button-filter").style.backgroundColor = "#6495ed"
        document.querySelector(".activity-text-button").style.color = "#ffffff"
        $(".activity-text-button").addClass("activity-new-icon")
        isPushedActivityButton = true
    }else if(isPushedActivityButton === true) {
        document.querySelector(".activity-button-filter").style.backgroundColor = "#ffffff"
        document.querySelector(".activity-text-button").style.color = "#72727E"
        $(".activity-new-icon").addClass("activity-text-button").removeClass("activity-new-icon")
        isPushedActivityButton = false
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