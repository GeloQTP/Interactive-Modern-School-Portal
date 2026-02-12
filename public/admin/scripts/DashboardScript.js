const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]',
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl),
);

const hamburger = document.querySelector("#toggle-btn");

hamburger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
