"use strcit";

const banner = document.querySelector(".banner");
const sections = document.querySelectorAll("section, footer");
const titles = document.querySelectorAll("h2, h3");
const transitionTime = 1000;

banner.style.top = "0";
banner.style.opacity = "1";

window.addEventListener("scroll", () => {
  const scroll = window.scrollY + window.innerHeight;

  sections.forEach((section) => {
    const distanceFromTop = section.offsetTop;
    if (scroll >= distanceFromTop) {
      section.style.top = "0";
      section.style.opacity = "1";
    }
  });

  titles.forEach((title) => {
    const distanceFromTop = title.offsetTop;
    if (scroll >= distanceFromTop) {
      title.classList.add("mouvementTitre");
    }
  });
});
