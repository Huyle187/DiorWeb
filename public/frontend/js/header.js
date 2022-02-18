// header-icon - input-search
const inputSearchButton = $(".input-search-button");
const inputSearchInputWrapper = $(".input-search__input-wrapper");
const inputSearchBorder = $(".input-search__border");
const headerInputSearchId = $("#header_input_search_id");

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

inputSearchButton.onmouseover = function () {
    openWrapperAndBorder();
};

headerInputSearchId.onblur = function () {
    closeWrapperAndBorder();
};

headerInputSearchId.onfocus = function () {
    inputSearchBorder.style.backgroundColor = "#000";
};
