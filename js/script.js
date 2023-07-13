// Toggle class active untuk list menu
const navbarNav = document.querySelector(".navbar-nav");
// ketika list menu di klik
document.querySelector("#list-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik di luar elemen
const hm = document.querySelector("#list-menu");

document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
