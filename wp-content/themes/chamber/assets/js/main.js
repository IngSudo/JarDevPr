document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".chamber-header__toggle");
  const nav = document.querySelector(".chamber-header__nav");

  toggle.addEventListener("click", function () {
    nav.classList.toggle("active");
    toggle.classList.toggle("active");
    document.body.classList.toggle('menu-open');
  });
});