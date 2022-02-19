// Icon id
const wishlistButton = $("#wishlist-button");
const accountButton = $("#account-button");
const cartButton = $("#cart-button");
// Tabs
const wishlistTabHeader = $("#wishlist-tab-header > .tabs-header-item");
const accountTabHeader = $("#account-tab-header > .tabs-header-item");
const cartTabHeader = $("#cart-tab-header > .tabs-header-item");
// Account panel content
const accountPanelContent = $(".account-panel-content");
// Email and password input
const loginInput = $(".input > #login");
const passwordInput = $(".input > #password");
// Email and password labels
const loginFormEmailLabel = $(".login-form__email > .label-field");
const passwordFieldInputLabel = $(".password-field__input > .label-field");
// Password icon button
const passwordFieldShowPassword = $(".password-field__show-password");
// Show and hide password icons
const passwordFieldShowPasswordIcon = $(".password-field__show-password__icon");
const passwordFieldHidePasswordIcon = $(".password-field__hide-password__icon");
// Error text
const loginError = $("#login-error");
const passwordError = $("#password-error");
// Border bottom color
const loginFormEmailSpanInput = $(".login-form__email > span.input");
const passwordFieldInputSpanInput = $(".password-field__input > span.input");
// Sign in button
const loginFormActionsSubmit = $(".login-form-actions-submit");
// Account panel
const accountPanelContentWishlist = $(".account-panel-content__wishlist");
const accountPanelContentAccount = $(".account-panel-content__account");
const accountPanelContentCart = $(".account-panel-content__cart");

// Click on the wishlist icon
wishlistButton.onclick = () => {
    tabHeaderButton(wishlistTabHeader, accountTabHeader, cartTabHeader);

    accountPanelCorresponding(
        accountPanelContentWishlist,
        accountPanelContentAccount,
        accountPanelContentCart
    );
};

// Click on the account icon
accountButton.onclick = () => {
    tabHeaderButton(accountTabHeader, cartTabHeader, wishlistTabHeader);

    accountPanelCorresponding(
        accountPanelContentAccount,
        accountPanelContentCart,
        accountPanelContentWishlist
    );
};

// Click on the cart button
cartButton.onclick = () => {
    tabHeaderButton(cartTabHeader, wishlistTabHeader, accountTabHeader);

    accountPanelCorresponding(
        accountPanelContentCart,
        accountPanelContentWishlist,
        accountPanelContentAccount
    );
};

// Click on the wishlist tab header
wishlistTabHeader.onclick = () => {
    tabHeaderButton(wishlistTabHeader, accountTabHeader, cartTabHeader);

    accountPanelCorresponding(
        accountPanelContentWishlist,
        accountPanelContentAccount,
        accountPanelContentCart
    );
};

// Click on the account tab header
accountTabHeader.onclick = () => {
    tabHeaderButton(accountTabHeader, cartTabHeader, wishlistTabHeader);

    accountPanelCorresponding(
        accountPanelContentAccount,
        accountPanelContentCart,
        accountPanelContentWishlist
    );
};

// Click on the cart tab header
cartTabHeader.onclick = () => {
    tabHeaderButton(cartTabHeader, wishlistTabHeader, accountTabHeader);

    accountPanelCorresponding(
        accountPanelContentCart,
        accountPanelContentWishlist,
        accountPanelContentAccount
    );
};

// On focus on the login input
inputFocus(loginInput, loginFormEmailLabel);

// On focus on the password input
inputFocus(passwordInput, passwordFieldInputLabel);

// Click on the button will change type of password to text
passwordFieldShowPasswordIcon.onclick = () => {
    changeTypeOfPasswordToText(
        passwordInput,
        passwordFieldShowPasswordIcon,
        passwordFieldHidePasswordIcon
    );
};

// Click on the button will change type of password to password
passwordFieldHidePasswordIcon.onclick = () => {
    changeTypeOfPasswordToPassword(
        passwordInput,
        passwordFieldShowPasswordIcon,
        passwordFieldHidePasswordIcon
    );
};

// Change color and add text when value of input equal to ""
loginInput.focusout = () => {
    if (loginInput.value == "") {
        loginError.innerText = "Please check your email";
        loginFormEmailSpanInput.style.borderColor = "#d70000";
    } else {
        passwordError.innerText = "";
        passwordFieldInputSpanInput.style.borderColor = "#000";
    }
};
passwordInput.focusout = () => {
    if (passwordInput.value == "") {
        passwordError.innerText = "Please check your email";
        passwordFieldInputSpanInput.style.borderColor = "#d70000";
    } else {
        passwordError.innerText = "";
        passwordFieldInputSpanInput.style.borderColor = "#000";
    }
};

// Disabled button every 0.5s
setInterval(() => {
    if (loginInput.value == "" || passwordInput.value == "") {
        loginFormActionsSubmit.classList.add("disabled");
    } else {
        loginFormActionsSubmit.classList.remove("disabled");
    }
}, 500);
