// header-icon - input-search
const inputSearchButton = $(".input-search-button");
// Wrapper of input
const inputSearchInputWrapper = $(".input-search__input-wrapper");
// Border of input
const inputSearchBorder = $(".input-search__border");
// Input
const headerInputSearchId = $("#header_input_search_id");
// Navigation tabs
const navigationTab1 = $("#navigation-tab-1");
const navigationTab2 = $("#navigation-tab-2");
const navigationTabSeconds = $$(".navigation-tab-second");
const navigationTabSecond1 = $("#navigation-tab-second-1");
const navigationTabSecond2 = $("#navigation-tab-second-2");
const navigationTabSecond3 = $("#navigation-tab-second-3");
const navigationTabSecond4 = $("#navigation-tab-second-4");
const navigationTabSecond5 = $("#navigation-tab-second-5");
const navigationTabSecond6 = $("#navigation-tab-second-6");
// Header placeholder
const headerMenuPlaceholders = $$(".header__menu-placeholder");
const headerMenuPlaceholder1 = $("#header__menu-placeholder-1");
const headerMenuPlaceholder2 = $("#header__menu-placeholder-2");
// pathname
const pathnameFashion = "/dior-informal-website/fashion";
const pathnameBeauty = "/dior-informal-website/beauty";
const pathnameItem =
    "/dior-informal-website/women-fashion-spring-summer-2022-collection";

function hoverNavigationTabs(navigationTab, headerMenuPlaceholder) {
    navigationTab.onmouseover = () => {
        navigationTab.classList.add("text-shadow");

        headerMenuPlaceholder.classList.remove("h-0");
        headerMenuPlaceholder.classList.add("h-6r");
        headerMenuPlaceholder.style.borderTop = "1px solid rgba(0, 0, 0, 0.2)";
    };

    navigationTab.onmouseout = function () {
        navigationTab.classList.remove("text-shadow");

        headerMenuPlaceholder.classList.remove("h-6r");
        headerMenuPlaceholder.classList.add("h-0");
        headerMenuPlaceholder.style.borderTop = "";
    };
}

function navigationTab2MouseOver(navigationTab, headerMenuPlaceholder) {
    navigationTab.classList.add("text-shadow");

    headerMenuPlaceholder.classList.remove("h-0");
    headerMenuPlaceholder.classList.add("h-6r");
    headerMenuPlaceholder.style.borderTop = "1px solid rgba(0, 0, 0, 0.2)";
}

function navigationTab2MouseOut(navigationTab, headerMenuPlaceholder) {
    navigationTab.classList.remove("text-shadow");

    headerMenuPlaceholder.classList.remove("h-6r");
    headerMenuPlaceholder.classList.add("h-0");
    headerMenuPlaceholder.style.borderTop = "";
}

headerInputSearchId.onfocus = function () {
    inputSearchBorder.style.backgroundColor = "#000";
};

for (let nTS = 0; nTS < navigationTabSeconds.length; nTS++) {
    const navigationTabSecond = navigationTabSeconds[nTS];

    navigationTabSecond.onmouseover = () => {
        navigationTabSecond.classList.add("text-shadow");
    };

    navigationTabSecond.onmouseout = () => {
        navigationTabSecond.classList.remove("text-shadow");
    };
}

if (window.location.pathname == pathnameFashion) {
    navigationTab1.style.textShadow = "0 -1px 1px #000";
} else if (window.location.pathname == pathnameBeauty) {
    navigationTab2.style.textShadow = "0 -1px 1px #000";
}
