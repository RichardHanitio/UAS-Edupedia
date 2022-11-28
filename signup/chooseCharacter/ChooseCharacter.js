const avatars = [...document.querySelectorAll(".avatar")]
const btnConfirm = document.querySelector(".btn-confirm")
let currentSelected = null;

btnConfirm.setAttribute("disabled", true);

avatars.forEach(avatar => {
  avatar.addEventListener("click", (e) => {
    if(currentSelected) {
      currentSelected.classList.toggle("selected")
      currentSelected = null;
    }
    if(e.target.tagName==="IMG") {
      e.target.parentNode.classList.toggle("selected");
      currentSelected = e.target.parentNode; 
    } else {
      e.target.classList.toggle("selected");
      currentSelected = e.target; 
    }
    btnConfirm.style.backgroundColor = "#02477d";
    btnConfirm.setAttribute("disabled", false);
  })
})

