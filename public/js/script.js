// Sidebar Toggle
const hamburger = document.querySelector(".toggle-btn");
const toggler = document.querySelector("#icon");
const sidebar = document.querySelector("#sidebar");
const sidebarItems = document.querySelectorAll(".sidebar-item a");

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

const userProfile = document.querySelector(".user-link");

userProfile.addEventListener("click", function (event) {
  event.preventDefault();
  document.querySelector(".user-link-dropdown").classList.toggle("show");
});

// Tambahkan event khusus untuk tombol logout
const logoutButton = document.querySelector(".logout button");

logoutButton.addEventListener("click", function (event) {
  event.stopPropagation(); // Mencegah event lain memblokir submit form
});
