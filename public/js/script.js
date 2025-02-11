// Sidebar Toggle
const hamburger = document.querySelector(".toggle-btn");
const toggler = document.querySelector("#icon");
const sidebar = document.querySelector("#sidebar");
const sidebarItems = document.querySelectorAll(".sidebar-item a");
const userProfile = document.querySelector(".user-link");

hamburger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("minimize");
  toggler.classList.toggle("bxs-chevrons-left");
  toggler.classList.toggle("bxs-chevrons-right");
});

sidebarItems.forEach((item) => {
  item.addEventListener("click", (event) => {
    event.preventDefault();

    // Hapus class "active" dari semua menu
    sidebarItems.forEach((i) => i.parentElement.classList.remove("active"));

    // Tambahkan class "active" ke menu yang diklik
    item.parentElement.classList.add("active");

    // console.log("click");
  });
});

// User link dropdown
userProfile.addEventListener("click", function (event) {
  event.preventDefault();
  const dropdown = userProfile.querySelector(".user-link-dropdown");
  dropdown.classList.toggle("show");
});
