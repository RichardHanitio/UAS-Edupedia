function open_close_nav(){
    var nav = document.getElementById("nav");
    var check = document.getElementById("check-nav");
    console.log("NYALA");
    if(!check.checked){
        check.checked = true;
        nav.style.animationName = "movedown";
    }
    else{
        check.checked = false;
        nav.style.animationName = "moveup";
    }
}



function pageHome(){
    windows.location.href = "./home";
}