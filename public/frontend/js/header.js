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

function openWrapperAndBorder() {
    if (
        inputSearchInputWrapper.classList.contains("wrapper-is-close") &&
        inputSearchBorder.classList.contains("border-is-close")
    ) {
        inputSearchInputWrapper.classList.remove("wrapper-is-close");
        inputSearchBorder.classList.remove("border-is-close");

        inputSearchInputWrapper.classList.add("wrapper-is-open");
        inputSearchBorder.classList.add("border-is-open");
    }
}

function closeWrapperAndBorder() {
    inputSearchInputWrapper.classList.remove("wrapper-is-open");
    inputSearchBorder.classList.remove("border-is-open");

    inputSearchInputWrapper.classList.add("wrapper-is-close");
    inputSearchBorder.classList.add("border-is-close");

    inputSearchBorder.style.backgroundColor = "#b3b3b3";
}

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

inputSearchButton.onmouseover = function () {
    openWrapperAndBorder();
};

headerInputSearchId.onblur = function () {
    closeWrapperAndBorder();
};

headerInputSearchId.onfocus = function () {
    inputSearchBorder.style.backgroundColor = "#000";
};

if (window.location.pathname != "/dior-informal-website/fashion") {
    hoverNavigationTabs(navigationTab1, headerMenuPlaceholder1);
    hoverNavigationTabs(navigationTab2, headerMenuPlaceholder2);

    headerMenuPlaceholder1.onmouseover = () => {
        navigationTab2MouseOver(navigationTab1, headerMenuPlaceholder1);
    };
    headerMenuPlaceholder1.onmouseout = () => {
        navigationTab2MouseOut(navigationTab1, headerMenuPlaceholder1);
    };

    headerMenuPlaceholder2.onmouseover = () => {
        navigationTab2MouseOver(navigationTab2, headerMenuPlaceholder2);
    };
    headerMenuPlaceholder2.onmouseout = () => {
        navigationTab2MouseOut(navigationTab2, headerMenuPlaceholder2);
    };
}

for (let nTS = 0; nTS < navigationTabSeconds.length; nTS++) {
    const navigationTabSecond = navigationTabSeconds[nTS];

    navigationTabSecond.onmouseover = () => {
        navigationTabSecond.classList.add("text-shadow");
    };

    navigationTabSecond.onmouseout = () => {
        navigationTabSecond.classList.remove("text-shadow");
    };
}
