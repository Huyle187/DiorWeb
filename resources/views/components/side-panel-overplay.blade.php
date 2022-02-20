<div class="overplay overlay-default hide" id="side-panel-overplay"></div>
<div class="side-panel side-panel__right">
    <div class="side-panel__close">
        <button aria-label="Close the order panel " class="side-panel__close-icon">
            <span class="icon css-ya210c" height="20" width="20">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.71 10l4.65-4.66a.495.495 0 10-.7-.7L10 9.29 5.34 4.64a.495.495 0 00-.7.7L9.29 10l-4.65 4.66a.48.48 0 000 .7.481.481 0 00.7 0L10 10.71l4.66 4.65a.482.482 0 00.7 0 .48.48 0 000-.7L10.71 10z" fill="currentColor"></path>
                </svg>
            </span>
        </button>
    </div>
    <ul role="tablist" class="side-panel__tabs-header">
        <li role="tab" id="wishlist-tab-header" aria-controls="wishlist-tab-content" tabindex="-1" class="tabs-header-item-container">
            <span class="tabs-header-item">
                <span class="title-with-level">
                    <span class="multiline-text text-uppercase">Wishlist</span>
                </span>
            </span>
        </li>
        <li role="tab" id="account-tab-header" aria-controls="account-tab-content" tabindex="-1" class="tabs-header-item-container">
            <span class="tabs-header-item">
                <span class="title-with-level">
                    <span class="multiline-text text-uppercase">Account</span>
                </span>
            </span>
        </li>
        <li role="tab" id="cart-tab-header" aria-controls="cart-tab-content" tabindex="0" class="tabs-header-item-container">
            <span class="tabs-header-item">
                <span class="title-with-level">
                    <span class="multiline-text text-uppercase">Cart</span>
                </span>
            </span>
        </li>
    </ul>

    <div class="account-panel-content">
        @include("components.wishlist")
        @include("components.account")
        @include("components.cart")
    </div>
</div>
