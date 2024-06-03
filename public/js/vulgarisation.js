const links = document.querySelectorAll("nav li");

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
  section.classList.toggle("active");
});



links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");
    section.classList.remove("active");
  });
});