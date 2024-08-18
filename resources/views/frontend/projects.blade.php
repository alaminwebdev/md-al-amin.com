@extends('app')
@section('content')

<style>
    .ms--images {
        position: relative;
        overflow: hidden;
    }

    .ms--images.ms-container--horizontal {
        width: 100%;
        height: 400px;
        max-width: 100%;
    }

    .ms--images.ms-container--horizontal .ms-track {
        left: calc(50% - 350px);
    }

    .ms--images.ms-container--horizontal .ms-slide {
        display: inline-flex;
    }

    .ms--images .ms-track {
        display: flex;
        position: absolute;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .ms--images .ms-slide {
        align-items: center;
        justify-content: center;
        width: 700px;
        height: 400px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ms--images {
        left: calc(50% - 280px);
    }

    .ms--images.ms-container--horizontal .ms-track {
        left: -70px;
    }

    .ms--images .ms-slide:nth-child(1) .ms-slide__image {
        background-image: url("https://cdn.jsdelivr.net/gh/lmgonzalves/momentum-slider@3b3037f7f1bab402fe3c75cd20ab18e04e1cbe0b/portfolio-carousel/img/harvey-gibson-498362-unsplash.jpg");
    }

    .ms--images .ms-slide:nth-child(2) .ms-slide__image {
        background-image: url("https://cdn.jsdelivr.net/gh/lmgonzalves/momentum-slider@3b3037f7f1bab402fe3c75cd20ab18e04e1cbe0b/portfolio-carousel/img/andre-hunter-461305-unsplash.jpg");
    }

    .ms--images .ms-slide:nth-child(3) .ms-slide__image {
        background-image: url("https://cdn.jsdelivr.net/gh/lmgonzalves/momentum-slider@3b3037f7f1bab402fe3c75cd20ab18e04e1cbe0b/portfolio-carousel/img/joanna-nix-389128-unsplash.jpg");
    }

    .ms--images .ms-slide:nth-child(4) .ms-slide__image {
        background-image: url("https://cdn.jsdelivr.net/gh/lmgonzalves/momentum-slider@3b3037f7f1bab402fe3c75cd20ab18e04e1cbe0b/portfolio-carousel/img/jurica-koletic-321003-unsplash.jpg");
    }

    .ms--images .ms-slide__image-container {
        width: 80%;
        height: 80%;
        background-color: rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .ms--images .ms-slide__image {
        width: 100%;
        height: 100%;
        background-size: cover;
    }

    .ms--numbers {
        position: relative;
        overflow: hidden;
    }

    .ms--numbers.ms-container--horizontal {
        width: 240px;
        height: 240px;
        max-width: 100%;
    }

    .ms--numbers.ms-container--horizontal .ms-track {
        left: calc(50% - 120px);
    }

    .ms--numbers.ms-container--horizontal .ms-slide {
        display: inline-flex;
    }

    .ms--numbers .ms-track {
        display: flex;
        position: absolute;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .ms--numbers .ms-slide {
        align-items: center;
        justify-content: center;
        width: 240px;
        height: 240px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ms--numbers {
        position: absolute;
        left: calc(50% - 380px);
        top: calc(50% - 300px);
        z-index: -1;
        pointer-events: none;
    }

    .ms--numbers .ms-slide {
        font-size: 9em;
        font-weight: 900;
        color: rgba(255, 255, 255, 0.2);
    }

    .ms--titles {
        position: relative;
        overflow: hidden;
    }

    .ms--titles.ms-container--vertical {
        width: 400px;
        height: 170px;
        max-height: 100%;
    }

    .ms--titles.ms-container--vertical .ms-track {
        flex-direction: column;
        top: calc(50% - 85px);
    }

    .ms--titles.ms-container--vertical.ms-container--reverse .ms-track {
        flex-direction: column-reverse;
        top: auto;
        bottom: calc(50% - 85px);
    }

    .ms--titles.ms-container--vertical .ms-slide {
        display: flex;
    }

    .ms--titles .ms-track {
        display: flex;
        position: absolute;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .ms--titles .ms-slide {
        align-items: center;
        justify-content: center;
        width: 400px;
        height: 170px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ms--titles {
        position: absolute;
        left: calc(50% - 420px);
        top: calc(50% - 85px);
        z-index: 1;
        pointer-events: none;
    }

    .ms--titles .ms-track {
        white-space: normal;
    }

    .ms--titles .ms-slide {
        font-size: 3.3em;
        font-weight: 600;
    }

    .ms--titles .ms-slide h3 {
        margin: 0;
        text-shadow: 1px 1px 2px black;
    }

    .ms--links {
        position: relative;
        overflow: hidden;
    }

    .ms--links.ms-container--vertical {
        width: 120px;
        height: 60px;
        max-height: 100%;
    }

    .ms--links.ms-container--vertical .ms-track {
        flex-direction: column;
        top: calc(50% - 30px);
    }

    .ms--links.ms-container--vertical .ms-slide {
        display: flex;
    }

    .ms--links .ms-track {
        display: flex;
        position: absolute;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .ms--links .ms-slide {
        align-items: center;
        justify-content: center;
        width: 120px;
        height: 60px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ms--links {
        position: absolute;
        left: calc(50% - 420px);
        top: calc(50% + 105px);
        z-index: 1;
    }

    .ms--links .ms-track {
        white-space: normal;
    }

    .ms--links .ms-slide__link {
        font-weight: 600;
        padding: 5px 0 8px;
        border-bottom: 2px solid white;
        cursor: pointer;
    }

    .pagination {
        display: flex;
        position: absolute;
        left: calc(50% - 420px);
        top: calc(100%);
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        z-index: 1;
    }

    .pagination__button {
        display: inline-block;
        position: relative;
        width: 36px;
        height: 20px;
        margin: 0 5px;
        cursor: pointer;
    }

    .pagination__button:before,
    .pagination__button:after {
        content: "";
        position: absolute;
        left: 0;
        top: calc(50% - 1px);
        width: 100%;
        box-shadow: 0 1px 0 #0B0D14;
    }

    .pagination__button:before {
        height: 2px;
        background-color: #6A3836;
    }

    .pagination__button:after {
        height: 3px;
        background-color: #DC4540;
        opacity: 0;
        transition: 0.5s opacity;
    }

    .pagination__item--active .pagination__button:after {
        opacity: 1;
    }

    @media screen and (max-width: 860px) {
        .ms--numbers {
            left: calc(50% - 120px);
        }

        .ms--titles {
            left: calc(50% - 200px);
            top: calc(50% - 135px);
            text-align: center;
        }

        .ms--links {
            left: calc(50% - 60px);
            top: calc(50% + 80px);
        }

        .pagination {
            left: 50%;
            top: calc(100% - 50px);
            transform: translateX(-50%);
        }
    }

    @media screen and (max-width: 600px) {
        .ms--images {
            overflow: visible;
        }
    }

    @media screen and (max-width: 400px) {
        .ms--titles .ms-slide {
            transform: scale(0.8);
        }
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        color: white;
        background-color: #1B1C21;
        overflow: hidden;
    }

    a {
        color: white;
        text-decoration: none;
        cursor: pointer;
    }

    .container {
        position: relative;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: rgba(0, 0, 0, 0.1);
    }

    .container:before {
        content: "";
        position: absolute;
        left: -150%;
        top: 0;
        width: 300%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        transform: rotate(45deg);
        z-index: -1;
    }

    .header {
        display: flex;
        align-items: center;
        padding: 30px;
    }

    .header__logo {
        font-size: 1.3em;
        font-weight: 900;
        letter-spacing: -1px;
    }

    .header__logo span {
        display: inline-block;
        transform: translateY(4px) rotate(180deg);
        pointer-events: none;
    }

    .header__menu {
        margin-left: auto;
    }

    .header__menu__list,
    .footer__menu__list {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .header__menu__link {
        margin-left: 50px;
    }

    .footer {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 30px;
    }

    .footer__menu__link {
        margin-left: 50px;
        color: rgba(255, 255, 255, 0.5);
    }

    .sliders-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
    }

    @media screen and (max-width: 860px) {

        .header__menu,
        .footer {
            display: none;
        }
    }
</style>

<section class="game-section mb-3 mb-sm-0" id="project-container">
    <div class="container">
        <header class="header">
            <a class="header__logo">mir<span>r</span>or</a>
            <nav class="header__menu">
                <ul class="header__menu__list">
                    <li class="header__menu__item"><a class="header__menu__link">works</a></li>
                    <li class="header__menu__item"><a class="header__menu__link">culture</a></li>
                    <li class="header__menu__item"><a class="header__menu__link">news</a></li>
                    <li class="header__menu__item"><a class="header__menu__link">careers</a></li>
                    <li class="header__menu__item"><a class="header__menu__link">contact</a></li>
                </ul>
            </nav>
        </header>
        <!-- Container for all sliders, and pagination -->
        <main class="sliders-container">
            <!-- Here will be injected sliders for images, numbers, titles and links -->

            <!-- Simple pagination for the slider -->
            <ul class="pagination">
                <li class="pagination__item"><a class="pagination__button"></a></li>
                <li class="pagination__item"><a class="pagination__button"></a></li>
                <li class="pagination__item"><a class="pagination__button"></a></li>
                <li class="pagination__item"><a class="pagination__button"></a></li>
            </ul>
        </main>
        <footer class="footer">
            <nav class="footer__menu">
                <ul class="footer__menu__list">
                    <li class="footer__menu__item"><a class="footer__menu__link">facebook</a></li>
                    <li class="footer__menu__item"><a class="footer__menu__link">dribbble</a></li>
                    <li class="footer__menu__item"><a class="footer__menu__link">instagram</a></li>
                </ul>
            </nav>
        </footer>
    </div>

</section>

<script>
(function() {

var slidersContainer = document.querySelector('.sliders-container');

// Initializing the numbers slider
var msNumbers = new MomentumSlider({
    el: slidersContainer,
    cssClass: 'ms--numbers',
    range: [1, 4],
    rangeContent: function (i) {
        return '0' + i;
    },
    style: {
        transform: [{scale: [0.4, 1]}],
        opacity: [0, 1]
    },
    interactive: false
});

// Initializing the titles slider
var titles = [
    'King of the Ring Fight',
    'Sound of Streets',
    'Urban Fashion',
    'Windy Sunset'
];
var msTitles = new MomentumSlider({
    el: slidersContainer,
    cssClass: 'ms--titles',
    range: [0, 3],
    rangeContent: function (i) {
        return '<h3>'+ titles[i] +'</h3>';
    },
    vertical: true,
    reverse: true,
    style: {
        opacity: [0, 1]
    },
    interactive: false
});

// Initializing the links slider
var msLinks = new MomentumSlider({
    el: slidersContainer,
    cssClass: 'ms--links',
    range: [0, 3],
    rangeContent: function () {
        return '<a class="ms-slide__link">View Case</a>';
    },
    vertical: true,
    interactive: false
});

// Get pagination items
var pagination = document.querySelector('.pagination');
var paginationItems = [].slice.call(pagination.children);

// Initializing the images slider
var msImages = new MomentumSlider({
    // Element to append the slider
    el: slidersContainer,
    // CSS class to reference the slider
    cssClass: 'ms--images',
    // Generate the 4 slides required
    range: [0, 3],
    rangeContent: function () {
        return '<div class="ms-slide__image-container"><div class="ms-slide__image"></div></div>';
    },
    // Syncronize the other sliders
    sync: [msNumbers, msTitles, msLinks],
    // Styles to interpolate as we move the slider
    style: {
        '.ms-slide__image': {
            transform: [{scale: [1.5, 1]}]
        }
    },
    // Update pagination if slider change
    change: function(newIndex, oldIndex) {
        if (typeof oldIndex !== 'undefined') {
            paginationItems[oldIndex].classList.remove('pagination__item--active');
        }
        paginationItems[newIndex].classList.add('pagination__item--active');
    }
});

// Select corresponding slider item when a pagination button is clicked
pagination.addEventListener('click', function(e) {
    if (e.target.matches('.pagination__button')) {
        var index = paginationItems.indexOf(e.target.parentNode);
        msImages.select(index);
    }
});

})();
</script>
@endsection