let isPushedHeartButton = false
const countsPLaces = document.querySelectorAll("ul.searched-place-item").length

function changeImage(){
    if(isPushedHeartButton === false){
        $(".button-heart").addClass("button-heart-changed")
        isPushedHeartButton = true
        console.log("Done")
        console.log(countsPLaces)
    }else if(isPushedHeartButton){
        $(".button-heart-changed").addClass("button-heart").removeClass("button-heart-changed")
        isPushedHeartButton = false
    }
}