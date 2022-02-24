const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// Overplay
const overplay = $(".overplay");
// Side panel
const sidePanelRight = $(".side-panel__right");
// Class
const tabsHeaderItemSelected = "tabs-header-item__selected";
const show = "show";
const hide = "hide";
const active = "active";
// Type of password
const password = "password";
const text = "text";

// Show and hide overplay
function showAndHideOverplay(overplay) {
    if (overplay.classList.contains(hide)) {
        overplay.classList.remove(hide);
        overplay.classList.add(show);
    }

    document.onclick = function (e) {
        if (e.target == overplay) {
            overplay.classList.remove(show);
            overplay.classList.add(hide);
        }
    };
}

// Show and hide side panel
function activeSidePanel(overplay, sidePanel) {
    sidePanel.classList.contains(active) ? "" : sidePanel.classList.add(active);

    overplay.onclick = () => {
        sidePanel.classList.remove(active);
    };
}

// Click on the button icons
function tabHeaderButton(tabHeaderA, tabHeaderB, tabHeaderC) {
    showAndHideOverplay(overplay);

    activeSidePanel(overplay, sidePanelRight);

    tabHeaderA.classList.add(tabsHeaderItemSelected);
    tabHeaderB.classList.remove(tabsHeaderItemSelected);
    tabHeaderC.classList.remove(tabsHeaderItemSelected);
}

// Animate label
function inputFocus(input, label) {
    input.onfocus = () => {
        label.style.top = 0;
        label.style.color = "#757575";
    };

    input.onfocusout = () => {
        if (input.value == "") {
            label.style.top = "2rem";
            label.style.color = "#000";
        }
    };
}

// Change type of password to text
function changeTypeOfPasswordToText(
    passwordInput,
    showPasswordIcon,
    hidePasswordIcon
) {
    passwordInput.type == password && (passwordInput.type = text);

    showPasswordIcon.classList.remove(show);
    showPasswordIcon.classList.add(hide);
    hidePasswordIcon.classList.add(show);
}

// Change type of password to password
function changeTypeOfPasswordToPassword(
    passwordInput,
    showPasswordIcon,
    hidePasswordIcon
) {
    passwordInput.type == text && (passwordInput.type = password);

    hidePasswordIcon.classList.remove(show);
    hidePasswordIcon.classList.add(hide);
    showPasswordIcon.classList.add(show);
}

// When click tab header, account panel will be show corresponding to the tab header that is clicked
function accountPanelCorresponding(
    accountPanelContentA,
    accountPanelContentB,
    accountPanelContentC
) {
    accountPanelContentA.classList.remove("hidden");
    accountPanelContentB.classList.add("hidden");
    accountPanelContentC.classList.add("hidden");
}

window.onload = () => {
    dispatchElementChild[0].style.transform = "translateX(0)";

    dispatchElementChild[1].style.transform = "translateX(0)";
};
