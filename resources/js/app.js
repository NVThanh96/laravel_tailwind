import './bootstrap';
const menuTitle = document.getElementById("menu-title");
const userMenuButton = document.getElementById("user-menu-button");

userMenuButton.addEventListener("click", () => {
  if (menuTitle.style.display === "block") {
    menuTitle.style.display = "none";
  } else {
    menuTitle.style.display = "block"; 
  }
});