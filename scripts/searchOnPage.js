function liveSearch(){
    let places = document.querySelectorAll(".name-place-section-all-places")
    let search_box = document.getElementById("searchBox").value;
    search_box = search_box.toLowerCase()

    for(let i = 0; i <= places.length; i++){
        if(places[i].innerHTML.toLowerCase().includes(places)){
            places[i].style.display = "none"
        }else{
            places[i].style.display = "table"
        }
    }
}