<div class="position-relative">
    <div class="header-placeholder"></div>
    <header class="header position-absolute">
        <div class="header__top">
            <!-- Left -->
            <nav id="nav" class="header__top__navigation">
                <div class="navigation-tab" id="navigation-tab-1">
                    <a class="open text-uppercase" href="{{ url('/fashion') }}" aria-label="FASHION &amp; ACCESSORIES" target="_self" rel="" tabindex="1" data-end-to-end="auto_menu_tab_fashion">FASHION &amp; ACCESSORIES</a>
                </div>
                <div class="navigation-tab" id="navigation-tab-2">
                    <a class="open text-uppercase" href="{{ url('/beauty') }}" aria-label="FRAGRANCE &amp; BEAUTY" target="_self" rel="" tabindex="1" data-end-to-end="auto_menu_tab_beauty">FRAGRANCE &amp; BEAUTY</a>
                </div>
            </nav>
            <!-- Middle -->
            <a href="{{ url('/beauty') }}" class="header__top__logo position-absolute">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494.5 138.3">
                        <path d="M1.5 2.7h64.2c55.2 0 76.8 32.4 76.8 66.7 0 34.9-27.7 66-80.4 66H1.6c-1.1 0-1.5-.7-1.5-1.3 0-.7.7-1.3 1.7-1.3h11.3c3.5 0 5.8-2.1 5.8-6V11.5c0-2.9-1.4-6.1-6-6.1H1.4C.5 5.4 0 4.8 0 4.1c0-.6.2-1.4 1.5-1.4m40.1 126.5c0 2.9 1.3 3.8 3.2 3.8h17c41.9 0 57.1-32.1 57.1-64.3S102.8 5.3 67.4 5.3H44.3c-2.4 0-2.6 2-2.6 2.9l-.1 121zM148.9 2.7c-1 0-1.9.4-1.9 1.2 0 .8.5 1.3 1.4 1.3h11.3c2.6 0 5.1 1.8 5.1 6.8v114.9c0 2.4-1.8 6-5 6h-11.2c-1.3 0-1.4 1-1.4 1.4 0 .4-.1 1.1 1.4 1.1H203c.8 0 1.9-.1 1.9-.9s-.2-1.6-1.6-1.6h-10.5c-1.5 0-5.6-.9-5.6-5.5V10.8c0-3.3 2.1-5.5 5.9-5.5h10.3c.9 0 1.4-.5 1.4-1.2s-.5-1.3-1.7-1.3h-54.2zm85 66.4c0-36.7 16.4-66.4 47.2-66.4 30.2 0 47.2 29.7 47.2 66.4s-15.5 66.4-47.2 66.4c-30.7.1-47.2-29.7-47.2-66.4m47.2 69.2c43.8 0 71.4-31 71.4-69.1S325.2 0 281.1 0c-44 0-71.4 31-71.4 69.1s28.5 69.2 71.4 69.2m211.4-3.7c-17.2 1.8-26.7-26.4-35.4-39.8-6.5-9.9-20.3-20-33.9-22 22.4-1.3 47.5-8.5 47.5-33.9 0-20.6-12.7-36.2-59.3-36.2h-53.7c-.7 0-1.4.4-1.4 1.2 0 .8.7 1.3 1.4 1.3H370c2.6 0 5.1 1.8 5.1 6.8v114.9c0 2.4-1.8 6-5 6H358c-1 0-1.4.8-1.4 1.2s.4 1.3 1.4 1.3h57c.8 0 1.5-.4 1.5-1.2 0-.8-.5-1.3-1.6-1.3h-11.5c-1.5 0-5.6-1-5.6-5.5V73.1h5.9c28.2 0 30.3 30.6 44.3 48.1 12 15 27.7 16.9 36.6 16.9 3.8 0 6.4-.1 8.8-.7 1.5-.5 1.8-3.1-.9-2.8m-89-129.4h8.3c14.2 0 37.2 5.6 37.2 32.4 0 24.6-20.4 32.9-39.3 32.9h-12.1V10.8c0-3.4 2.1-5.6 5.9-5.6"></path>
                    </svg>
                </span>
            </a>
            <!-- Right -->
            <nav class="header__top__nav">
                <ul>
                    <li class="header-icon">
                        <div role="search" class="input-search">
                            <div class="input-search__wrapper">
                                <div class="input-search__input-wrapper wrapper-is-close">
                                    <div role="search" class="lib-header-search-field">
                                        <div>
                                            <form action="" class="lib-header-components-search search-bar-autocomplete">
                                                <div role="comboBox" class="react-autosuggest__container">
                                                    <input type="search" name="header_input_search_id" id="header_input_search_id" autocomplete="off" class="react-autosuggest__input" placeholder="What are you looking for?" value>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button aria-label="aria_searchButtonOpen" class="input-search-button" tabindex="1">
                                    <span class="icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.17 16.48L12 11.36a5.5 5.5 0 10-4.22 2 5.41 5.41 0 003.51-1.27l5.14 5.13a.51.51 0 00.7 0 .5.5 0 00.04-.74zm-9.35-4.15a4.5 4.5 0 110-9 4.5 4.5 0 010 9z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <span class="input-search__border border-is-close"></span>
                        </div>
                    </li>
                    <li class="header-icon">
                        <button aria-haspopup="true" aria-label="Wishlist" tabindex="1" data-end-to-end="auto_header_wl" id="wishlist-button">
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.48 3.91a3.25 3.25 0 012.68 1.62L10 6.85l.83-1.33a3.12 3.12 0 012.63-1.61 2.8 2.8 0 012.08.93c1.48 1.59 1.33 3.78-.37 5.57L10 15.66l-5.22-5.3c-1.67-1.85-1.8-4-.36-5.53a2.8 2.8 0 012.06-.92zm0-1a3.8 3.8 0 00-2.79 1.24C1.94 6 2 8.73 4 11l6 6.06 5.9-6c2.16-2.27 2.15-5.06.4-6.95a3.871 3.871 0 00-2.82-1.25A4.1 4.1 0 0010 5a4.23 4.23 0 00-3.52-2.09z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </button>
                    </li>
                    <li class="header-icon">
                        <button aria-haspopup="true" class="my-account" aria-label="Account" tabindex="1" id="account-button">
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0-7a3 3 0 110 6 3 3 0 010-6zM10 11c-5 0-7 2-7 7h14c0-5-2-7-7-7zm0 1c4.08 0 5.73 1.33 6 5H4c.27-3.67 1.92-5 6-5z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </button>
                    </li>
                    <li class="header-icon m-0">
                        <button aria-haspopup="true" aria-live="polite" aria-atomic="true" tabindex="1" data-end-to-end="auto_header_cart" id="cart-button">
                            <div class="sr-only">Your shopping cart currently contains 0 items</div>
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.63 17.47l-.6-11a.51.51 0 00-.5-.47h-2v-.43a3.5 3.5 0 00-7 0V6h-2a.51.51 0 00-.5.47l-.62 11a.49.49 0 00.49.53h12.3a.49.49 0 00.43-.53zm-12.31-.42L4.9 7h10.2l.56 10.1-11.34-.05zM7.5 5.57a2.5 2.5 0 115 0V6h-5v-.43z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </button>
                    </li>
                </ul>
                @include("components.side-panel-overplay")
            </nav>
        </div>


        <div class="header__menu-placeholder h-0" id="header__menu-placeholder-1">
            <div class="navigation-tab-second text-uppercase" id="navigation-tab-second-1">
                <a href="{{ url('/womens-fashion/woman') }}" aria-label="Women's Fashion" target="_self" rel="" tabindex="-1" data-end-to-end="auto_menu_level2_item_69279">Women's Fashion</a>
            </div>
            <div class="navigation-tab-second text-uppercase" id="navigation-tab-secon-2">
                <a href="{{ url('/mens-fashion/man') }}" aria-label="Men's Fashion" target="_self" rel="" tabindex="-1" data-end-to-end="auto_menu_level2_item_69538">Men's Fashion</a>
            </div>
            <div class="navigation-tab-second text-uppercase" id="navigation-tab-second-3">
                <a href="{{ url('/kids/kids-fashion') }}" aria-label="KIDS &amp; BABY" target="_self" rel="" tabindex="-1" data-end-to-end="auto_menu_level2_item_69628">KIDS &amp; BABY</a>
            </div>
        </div>

        <div class="header__menu-placeholder h-0" id="header__menu-placeholder-2">
            <div class="navigation-tab-second text-uppercase" id="navigation-tab-second-4">
                <a href="{{ url('/womens-fragance/new') }}" aria-label="Women's Fragrance" target="_self" rel="" tabindex="-1" data-end-to-end="auto_menu_level2_item_146619">Women's Fragrance</a>
            </div>
            <div class="navigation-tab-second text-uppercase" id="navigation-tab-second-5">
                <a href="{{ url('/mens-fragance/new') }}" aria-label="Men's Fragrance" target="_self" rel="" tabindex="-1" data-end-to-end="auto_menu_level2_item_146623">Men's Fragrance</a>
            </div>
            <div class="navigation-tab-second text-uppercase" id="navigation-tab-second-6">
                <a href="{{ url('/skincare/new-skincare') }}" aria-label="Skincare" target="_self" rel="" tabindex="-1" data-end-to-end="auto_menu_level2_item_45679">Skincare</a>
            </div>
        </div>

    </header>
</div>
