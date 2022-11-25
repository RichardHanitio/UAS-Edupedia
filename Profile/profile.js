var selectForm = document.getElementsByClassName("edit-form-container");
console.log(selectForm);

function fnAction(){
    selectForm[0].style.display="none";
    event.preventDefault();
}

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

function open_form(){
    selectForm[0].style.display="flex";
}

function pageHome(){
    windows.location.href = "./home";
}



