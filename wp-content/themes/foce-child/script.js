const banner = document.querySelector(".banner");
const sections = document.querySelectorAll("section, footer, .fade-in");
const titles = document.querySelectorAll("h2, h3");
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

/* nuages */

const clouds = document.querySelector(".clouds");
const bigCloud = document.querySelector(".big-cloud");
const littleCloud = document.querySelector(".little-cloud");
const sectionHeight = document.querySelector("#place").offsetHeight;
console.log(window.innerWidth);

window.addEventListener("scroll", () => {
  const scrollPosition = window.scrollY;
  const scrollPercentage = scrollPosition / sectionHeight;
  const bigCloudPos = -300 + scrollPercentage * 30 * 3;
  const littleCloudPos = -300 + scrollPercentage * 20 * 3;
  if (bigCloudPos > 0) bigCloudPos = 0;
  if (littleCloudPos > 0) littleCloudPos = 0;
  bigCloud.style.left = bigCloudPos + "px";
  littleCloud.style.left = littleCloudPos + "px";
});

/* Swiper */
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  centeredSlides: true,
  slidesPerView: 5,
  grabCursor: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 60,
    modifier: 1,
    slideShadows: false,
  },
});

const storySection = document.getElementById("story");
const studioSection = document.getElementById("studio");
const storySpan = document.querySelector("#story .section-title span");
const studioSpan = document.querySelector("#studio .section-title span");

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        entry.target
          .querySelector(".section-title span")
          .classList.add("is-visible");
      }, 1000);
    }
  });
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = "1";
    }
  });
});

// Observer l'élément section

observer.observe(storySection);
observer.observe(studioSection);

/* menu burger */
const menuToggle = document.querySelector(".menu-toggle");
const menuOverlay = document.querySelector("#menu-overlay");
const navigationMenu = document.querySelector(".main-navigation");
const siteHeader = document.querySelector(".site-header");
const siteLogo = document.querySelector(".site-logo");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active");

  navigationMenu.classList.toggle("active");

  menuOverlay.classList.toggle("active");

  siteHeader.classList.toggle("active");
  siteHeader.classList.toggle("activate");

  siteLogo.classList.toggle("active");
  siteLogo.classList.toggle("activate");
});

sections.forEach((section) => {
  observer.observe(section);
});

function closeNav() {
  var menuOverlay = document.querySelector("#menu-overlay");
  var navigationMenu = document.querySelector(".main-navigation");
  const siteHeader = document.querySelector(".site-header");
  const siteLogo = document.querySelector(".site-logo");

  // Supprime la classe active du menu burger, du menu superposé et du menu de navigation
  document.querySelector(".menu-toggle").classList.remove("active");
  menuOverlay.classList.remove("active");
  navigationMenu.classList.remove("active");
  siteHeader.classList.remove("active");
  siteHeader.classList.remove("activate");
  siteLogo.classList.remove("active");
  siteLogo.classList.remove("activate");
}
