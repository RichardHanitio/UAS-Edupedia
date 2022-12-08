const avatars = [...document.querySelectorAll(".avatar")]
const btnConfirm = document.querySelector(".btn-confirm")
const confirmAvatar = document.querySelector(".confirm-avatar");
let currentSelected = null;

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
    console.log(currentSelected.getAttribute("name"));
    confirmAvatar.setAttribute("value", currentSelected.getAttribute("name"));
  })
})

