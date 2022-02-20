<div class="account-panel-content__account hidden">
    <div class="account-panel-content__account__login" id="forgot-password">
        <span class="title-with-level account-panel-content__account__login__title text-uppercase">
            <span class="multiline-text">
                Log in
            </span>
        </span>
        <p class="multiline-text account-panel-content__account__login__subtitle">
            To access your account
        </p>
        <form action="POST" class="login-form">
            <div class="form-group login-form__email">
                <label for="login" class="label-field">*Email address</label>
                <span class="input">
                    <input id="login" name="login" type="email" aria-describedby="login-error" required="" pattern="^[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$" maxlength="50" autocapitalize="none" aria-invalid="true" autocomplete="email" aria-autocomplete="none" value="">
                    <span role="status"></span>
                </span>
                <span class="error-text" id="login-error"></span>
            </div>
            <div class="password-field login-form__password">
                <div class="form-group password-field__input">
                    <label for="password" class="label-field">*Password</label>
                    <span class="input">
                        <input id="password" name="password" type="password" aria-describedby="password-error" required="" autocapitalize="none" aria-invalid="true" autocomplete="current-password" data-end-to-end="password" aria-autocomplete="none" value="">
                        <span role="status"></span>
                    </span>
                    <span class="error-text" id="password-error"></span>
                </div>
                <button class="password-field__show-password" type="button">
                    <span class="icon password-field__show-password__icon css-f86pio show">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.57 3.9a.46.46 0 00-.67 0 .48.48 0 000 .67l11.5 11.5a.449.449 0 00.34.14.43.43 0 00.33-.14.46.46 0 000-.67L4.57 3.9zM10.83 13.94c-2.59.38-5.2-1-7.22-3.94A12 12 0 014.9 8.43a.502.502 0 00-.72-.7 13.64 13.64 0 00-1.6 2 .52.52 0 000 .56c2 3 4.67 4.72 7.42 4.72a6.34 6.34 0 001-.07.506.506 0 00.056-.989.505.505 0 00-.196-.011h-.03zM17.42 9.72C15.14 6.3 12.06 4.61 9 5.08a.506.506 0 00.15 1c2.61-.39 5.22 1 7.25 3.94a12.008 12.008 0 01-1.29 1.57.51.51 0 000 .71.54.54 0 00.35.14.51.51 0 00.36-.15c.59-.62 1.125-1.288 1.6-2a.52.52 0 000-.57z" fill="currentColor"></path>
                        </svg>
                    </span>

                    <span class="icon password-field__hide-password__icon css-f86pio hide">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.42 9.72C15.39 6.68 12.75 5 10 5S4.61 6.68 2.58 9.72a.52.52 0 000 .56c2 3 4.67 4.72 7.42 4.72s5.39-1.68 7.42-4.72a.52.52 0 000-.56zM10 14c-2.33 0-4.59-1.42-6.39-4C5.41 7.42 7.67 6 10 6s4.59 1.42 6.39 4c-1.8 2.58-4.07 4-6.39 4z" fill="currentColor"></path>
                            <path d="M10 7a3 3 0 100 6 3 3 0 000-6zm0 5.1a2.1 2.1 0 110-4.2 2.1 2.1 0 010 4.2z" fill="currentColor"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <button class="login-form__forgotten-password" type="button">
                I forgot my password
            </button>
            <div class="login-form-actions">
                <button class="button login-form-actions-submit text-uppercase background-color-black color-white disabled">
                    <span class="button-link-content">
                        <span class="button-link__title">Sign in</span>
                    </span>
                </button>
                <span class="login-form-error"></span>
            </div>
        </form>
    </div>
    <div class="account-panel-content__account__forgot-password hidden" id="back-to-login">
        <span class="title-with-level account-panel-content__account__forgot-password__title text-uppercase">
            <span class="multiline-text">
                Forgot your password ?
            </span>
        </span>
        <p class="multiline-text account-panel-content__account__forgot-password__subtitle">
            Please enter the email address you registered with. We will send you a link for changing your password.
        </p>
        <form action="POST" class="forgot-password">
            <div class="form-group forgot-password__forgot-password">
                <label for="forgot-password-input" class="label-field">*Email address</label>
                <span class="input">
                    <input id="forgot-password-input" name="forgot-password" type="email" aria-describedby="forgot-password-error" required="" pattern="^[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$" maxlength="50" autocapitalize="none" aria-invalid="true" autocomplete="email" aria-autocomplete="none" value="">
                    <span role="status"></span>
                </span>
                <span class="error-text" id="forgot-password-error"></span>
            </div>
            <div class="forgot-password-actions">
                <button class="button forgot-password-actions-submit text-uppercase background-color-black color-white disabled">
                    <span class="button-link-content">
                        <span class="button-link__title">send</span>
                    </span>
                </button>
                <span class="forgot-password-error"></span>
            </div>
            <button class="forgot-password__forgotten-password forgotten-password__back-to-login" type="button">
                Back to login
            </button>
        </form>
    </div>
    <div class="account-panel-content__account__signup">
        <span class="title-with-level account-panel-content__account__signup__title text-uppercase">
            <span class="multiline-text">Already have an account?</span>
        </span>
        <a href="/couture/account/create" target="_self" rel="">
            <span class="button color-white background-color-black text-uppercase">
                <span class="button-link-content">
                    <span class="button-link__title" data-title="Create an account">
                        Create an account
                    </span>
                </span>
            </span>
        </a>
    </div>
</div>
