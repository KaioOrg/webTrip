let isPushedButton = false
const activityIcon = document.getElementsByClassName("activity-text-button")
const entertainmentIcon = document.getElementsByClassName("entertainment-text-button")
const mallsIcon = document.getElementsByClassName("malls-text-button")

function changeOnMainPage(){
    window.location.href = "index.html"
}

function changeOnSearchPage(){
    window.location.href = "searchPage.html"
}

let newIconHotel = document.createElement('newIcon');
function changeColorOnHotelButtonFilter(){
    if(isPushedButton === false){
        document.querySelector(".categories-item").style.backgroundColor = "#6495ed"
        document.querySelector(".text-category").style.color = "#ffffff"
        $(".hotel-text-button").addClass("hotel-new-icon")
        isPushedButton = true
    }else if(isPushedButton === true){
        document.querySelector(".categories-item").style.backgroundColor = "#ffffff"
        document.querySelector(".text-category").style.color = "#72727E"
        isPushedButton = false
    }
}