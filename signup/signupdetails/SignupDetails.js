const showPass = document.querySelector(".show-pass").children[0];
const pass = document.querySelector("#password");

showPass.checked = false;

showPass.addEventListener("change", () => {
  if (showPass.checked) {
    pass.setAttribute("type", "text");
  } else {
    pass.setAttribute("type", "password");
  }
});
