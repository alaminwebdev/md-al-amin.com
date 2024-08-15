/* GASP Javascript */
/* PreLoader Start */
// Create a timeline for the preloader animation
const preLoader = gsap.timeline();
// Disable body overflow during preloader animation
preLoader
  .to("body", {
    overflow: "hidden",
  })
  // Fade in the text container with a specified duration and easing
  .to(".preloader .text-container", {
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

// Profile File Upload Javascript Start
// Check if the element with id "profileUpload" exists
if (document.getElementById("profileUpload")) {
  // Add event listener to the file input
  document.getElementById("profileUpload").addEventListener("change", (e) => {
    // Check if a file has been selected
    if (e.target.files[0]) {
      // Create a FileReader to read the selected file
      var picture = new FileReader();

      // Event listener for when the FileReader has loaded the file
      picture.addEventListener("load", function (ev) {
        // Set the source of the image element to the loaded data URL
        document
          .getElementById("uploadedImage")
          .setAttribute("src", ev.target.result);
      });
      // Read the file as a data URL
      picture.readAsDataURL(e.target.files[0]);
    }
  });
}
// Profile File Upload Javascript End

/* Swiper JavaScript Code Start */
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

/* Top Seller Swiper One Start */
var topSelllerSwiperOne = new Swiper(".top-seller-swiper-one", {
  slidesPerView: 5.7,
  spaceBetween: 35,
  loop: true,
  grabCursor: true,
  autoplay: {
    delay: 0,
    pauseOnMouseEnter: true, // added
    disableOnInteraction: false, // added
  },
  speed: 5000,
  breakpoints: {
    0: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    400: {
      slidesPerView: 1.5,
      spaceBetween: 10,
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    992: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
    1200: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1440: {
      slidesPerView: 4.5,
      spaceBetween: 25,
    },
    1800: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});
/* Top Seller Swiper One End */

/* Top Seller Swiper Two Start  */
var topSellerSwiperTwo = new Swiper(".top-seller-swiper-two", {
  slidesPerView: 5,
  spaceBetween: 35,
  loop: true,
  grabCursor: true,
  autoplay: {
    delay: 0,
    pauseOnMouseEnter: true,
    disableOnInteraction: false,
    reverseDirection: true, // added
  },
  speed: 5000,
  breakpoints: {
    0: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    400: {
      slidesPerView: 1.5,
      spaceBetween: 10,
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    992: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
    1200: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1440: {
      slidesPerView: 4.5,
      spaceBetween: 25,
    },
    1800: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});
/* Top Seller Swiper Two End */

/* Live Auction Swiper Start*/
var liveAuctionSwiper = new Swiper(".live-auction-swiper", {
  slidesPerView: 3,
  spaceBetween: 62,
  loop: true,
  grabCursor: true,
  speed: 2000,
  autoplay: {
    pauseOnMouseEnter: true, // added
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".live-auction-next-button",
    prevEl: ".live-auction-prev-button",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    576: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 25,
    },
    992: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 2.5,
      spaceBetween: 30,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1800: {
      slidesPerView: 3,
      spaceBetween: 62,
    },
  },
});
/* Live Auction Swiper End*/

/* Related Artwork Swiper Start*/
var relatedArtworkSwiper = new Swiper(".related-artwork-swiper", {
  slidesPerView: 4,
  spaceBetween: 40,
  loop: true,
  grabCursor: true,
  speed: 1000,
  autoplay: {
    pauseOnMouseEnter: true, // added
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".related-artwork-next-button",
    prevEl: ".related-artwork-prev-button",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    576: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 25,
    },
    992: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 2.5,
      spaceBetween: 30,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1800: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});
/* Related Artwork Swiper End*/

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

/* Custom Range Slider Start */
const rangeInput = document.querySelectorAll(".range-silder-input input"),
  priceInput = document.querySelectorAll(".range-slider-price-input input"),
  range = document.querySelector(".range-slider .range-slider-progress-bar");
let priceGap = 100;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

/* Custom Range Slider End */

/* Copy To ClipBoard Start */
const infoText = document.querySelector("[data-info]");
const copyBtn = document.querySelector("#copyBtn");
if (infoText) {
  console.log(copyBtn);
  let infoInnerText = infoText.dataset.info;
  let slicedText = infoInnerText.slice(0, 6) + "..." + infoInnerText.slice(-4);
  infoText.innerText = slicedText;
  copyBtn.addEventListener("click", () => {
    navigator.clipboard.writeText(infoInnerText);
    console.log(copyBtn);
  });
}
/* Copy To ClipBoard End */

/* Explore Product Toggle Menu Start */
const exploreProductToggleMenuOpen = document.querySelector(
  ".explore-product-toggle-menu-open"
);
const exploreProductToggleMenuClose = document.querySelector(
  ".explore-product-toggle-menu-close"
);
const exploreProductSideMenu = document.querySelector(
  ".explore-products-left-side-wrapper"
);

const closeMenu = () => {
  if (exploreProductSideMenu) {
    exploreProductSideMenu.classList.remove("menu-open");
  }
};

if (exploreProductToggleMenuOpen) {
  exploreProductToggleMenuOpen.addEventListener("click", () => {
    if (exploreProductSideMenu) {
      exploreProductSideMenu.classList.add("menu-open");
    }
  });
}

if (exploreProductToggleMenuClose) {
  exploreProductToggleMenuClose.addEventListener("click", closeMenu);
}

document.addEventListener("click", (e) => {
  if (
    exploreProductToggleMenuClose &&
    exploreProductToggleMenuOpen &&
    exploreProductSideMenu
  ) {
    if (
      ![
        exploreProductToggleMenuClose,
        exploreProductToggleMenuOpen,
        exploreProductSideMenu,
      ].some((el) => el.contains(e.target))
    ) {
      closeMenu();
    }
  }
});

/* Explore Product Toggle Menu End */

/* Dropdown Value Change Start */
let customDropdownBtn = document.querySelector(".custom-dropdown-btn");
let customDropdownLink = document.querySelectorAll(".custom-dropdown-link");
if (customDropdownLink && customDropdownBtn) {
  customDropdownBtn.textContent = customDropdownLink[0].textContent;
  customDropdownLink.forEach((eachLink) => {
    eachLink.addEventListener("click", (e) => {
      customDropdownBtn.textContent = e.target.textContent;
    });
  });
}
/* Dropdown Value Change End */

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

/* Nice Select Starts */
$(document).ready(function () {
  $(".gender-select").niceSelect();
});

$(document).ready(function () {
  $(".place-select").niceSelect();
});

$(document).ready(function () {
  $(".city-select").niceSelect();
});

$(document).ready(function () {
  $(".category-select").niceSelect();
});
/* Nice Select Ends */