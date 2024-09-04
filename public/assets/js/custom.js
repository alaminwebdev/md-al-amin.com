/* PreLoader Start */

// Create a timeline for the preloader animation
const preLoader = gsap.timeline();
// Disable body overflow during preloader animation
preLoader
  .to("body", {
    overflow: "hidden",
  })
  // Fade in the text container with a specified duration and easing
  .to(".preloader", {
    duration: 0.8,
    opacity: 1,
    ease: "Power3.easeOut",
  })
  // Fade out and hide the entire preloader
  .to(".preloader", {
    opacity: 0,
    display: "none",
  })
  // Enable body overflow after the preloader animation
  .to("body", {
    overflow: "auto",
  });

/* PreLoader End */

/* Star Animation Start */
// Check if the element with class "star-line" exists
if (document.querySelector(".star-line")) {
  // Set initial positions for animation elements
  gsap.set(".star-line", { y: "100%" });
  gsap.set(".anim-star", { y: "-12px", scale: "0.5" });

  // Create a timeline for the star-line animation with repeating behavior
  let ts = gsap.timeline({ repeat: -1, repeatDelay: 0.8 });

  // Animation sequence
  ts.to(".star-line", { opacity: 1 })
    .to(".star-line", { y: "0%", duration: 3 })
    .to(".anim-star", { scale: "1", duration: 3 }, "<")
    .to(".star-line", { opacity: 0 })
    .to(".star-line", { y: "100%" })
    .to(".anim-star", { scale: "0.5" }, "<");
}
/* Star Animation End */

/* Hero Cartoon Animation Start */

// Check if the element with class "hero-cartoon-flex" exists
if (document.querySelector(".hero-cartoon-flex")) {
  // Set initial state for the hero-arrow-wave
  gsap.set(".hero-arrow-wave", { opacity: 0 });

  // Create a timeline for the hero animation
  let tf = gsap.timeline();

  // Animation sequence
  tf.to(".hero-cartoon-container-3", { rotate: 90, duration: 2, delay: 1 })
    .to(".hero-cartoon-container-2", { rotate: 35, duration: 2 }, "<")
    .to(".hero-arrow-wave", { opacity: 1, duration: 3 });
}

/* Hero Cartoon Animation End */


/* Top Artwork Swiper Start */
var topArtworkSwiper = new Swiper(".top-artwork-swiper", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  grabCursor: true,
  speed: 1000,
  autoplay: {
    pauseOnMouseEnter: true, // added
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".top-artwork-next-button",
    prevEl: ".top-artwork-prev-button",
  },
  breakpoints: {
    0: {
      slidesPerView: 1.2,
      spaceBetween: 5,
    },
    350: {
      slidesPerView: 1.4,
      spaceBetween: 5,
    },
    576: {
      slidesPerView: 2.2,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 2.7,
      spaceBetween: 15,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
    1200: {
      spaceBetween: 10,
    },
    1600: {
      spaceBetween: 25,
    },
  },
});
/* Top Artwork Swiper End */

/* custom JavaScript Code*/

/* Light & Dark Toggle Mode Start */
const html = document.querySelector("html");
const toggle = document.querySelector(".toggle-wrapper");

// Get the current theme from local storage
let currentTheme = localStorage.getItem("mode");

// Set the initial theme if it's stored in local storage
if (currentTheme !== null && currentTheme === "light" && toggle) {
  toggle.classList.add("active");
}

// Toggle between light and dark themes on button click
if (toggle) {
  toggle.addEventListener("click", () => {
    const isToggleActive = toggle.classList.toggle("active");

    if (isToggleActive) {
      // Switch to light theme
      html.classList.add("light");
      html.classList.remove("dark");
      localStorage.setItem("mode", "light");
    } else {
      // Switch to dark theme
      html.classList.add("dark");
      html.classList.remove("light");
      localStorage.setItem("mode", "dark");
    }
  });
}
/* Light & Dark Toggle Mode End */

/* Hamburger in Add Active And Remove Class  Start */
document.querySelector("#hamburger").addEventListener("click", () => {
  document.body.classList.toggle("show-menu");
});

document.querySelector(".navbar-box-shadow").addEventListener("click", () => {
  document.body.classList.remove("show-menu");
});
/* Hamburger in Add Active And Remove Class  End */

/* Sticky Header Add Bg Color Start */
const header = document.getElementById("header");
function handleScroll() {
  if (window.scrollY > 50) {
    header.classList.add("header-scrolled");
  } else {
    header.classList.remove("header-scrolled");
  }
}
function initializeScrollHandling() {
  handleScroll();
  window.addEventListener("scroll", handleScroll);
}
initializeScrollHandling();

/* Sticky Header Add Bg Color End */

/* Hero Atropos Animation Start */
if (document.querySelector(".hero-atropos")) {
  const myAtropos = Atropos({
    el: ".hero-atropos",
    duration: 800,
    shadow: false,
    rotateTouch: false,
  });

  const handleAtropos = () => {
    if (screen.width < 991) {
      myAtropos.destroy();
    }
  };

  handleAtropos();

  window.addEventListener("resize", () => {
    handleAtropos();
  });
}
/* Hero Atropos Animation End */

/* Mouse Follower Start */
const cursor = new MouseFollower({});
const el = document.querySelector(".footer-link");
const customCursor = document.querySelector(".mf-cursor");

function mouseRemove() {
  if (window.innerWidth < 1200) {
    customCursor.style.display = "none";
  } else {
    customCursor.style.display = "block";
  }
}
mouseRemove();

window.addEventListener("resize", () => {
  console.log("resize done");
  mouseRemove();
});

el.addEventListener("mouseenter", () => {
  cursor.setSkewing(3);
});

el.addEventListener("mouseleave", () => {
  cursor.removeSkewing();
});

/* Mouse Follower End */