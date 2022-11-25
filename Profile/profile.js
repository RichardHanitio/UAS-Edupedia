var selectForm = document.getElementsByClassName("edit-form-container");
console.log(selectForm);

function fnAction(){
    selectForm[0].style.display="none";
    event.preventDefault();
}

function open_form(){
    selectForm[0].style.display="flex";
}





