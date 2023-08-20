// JavaScript function to toggle the user menu dropdown
function toggleUserMenu() {
  const menuTitle = document.getElementById("menu-title");
  menuTitle.classList.toggle("hidden");
}

// Attach the function to the user menu button's onclick event
const userMenuButton = document.getElementById("user-menu-button");
userMenuButton.onclick = toggleUserMenu;

function toggleMobileMenu() {
    var mobileMenu = document.getElementById("mobile-menu");
    mobileMenu.classList.toggle("hidden");
}

// Attach the function to the button's onclick event
var mobileMenuButton = document.getElementById("mobile-menu-button");
mobileMenuButton.onclick = toggleMobileMenu;


// ẩn hiện hover for menu
const projectsLink = document.getElementById("projects-link");
const hoverContent = projectsLink.nextElementSibling;

let hoverTimeout;

projectsLink.addEventListener("mouseover", () => {
    clearTimeout(hoverTimeout);

    hoverContent.style.opacity = "1";
    hoverContent.style.visibility = "visible";
    hoverContent.style.transform = "translateY(0)";
});

projectsLink.addEventListener("mouseout", () => {
    hoverTimeout = setTimeout(() => {
        hoverContent.style.opacity = "0";
        hoverContent.style.visibility = "hidden";
        hoverContent.style.transform = "translateY(-10px)";
    }, 300); // Delay in milliseconds before hiding
});

hoverContent.addEventListener("mouseover", () => {
    clearTimeout(hoverTimeout);
});

hoverContent.addEventListener("mouseout", () => {
    hoverTimeout = setTimeout(() => {
        hoverContent.style.opacity = "0";
        hoverContent.style.visibility = "hidden";
        hoverContent.style.transform = "translateY(-10px)";
    }, 300); // Delay in milliseconds before hiding
});