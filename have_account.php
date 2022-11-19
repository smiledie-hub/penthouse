<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="header-static personal-page">
        <img data-src="/public/images/about-bg.svg" alt="" class="personal-page__background lazy">

        <?php HeaderComponent("header--dark"); ?>

        <div class="content-center">
            <div class="personal-page__container container">
                <div class="personal-page__center">
                    <h1 class="personal-page__title">Welcome</h1>
                    <p class="personal-page__text">Login or Sign up for a Metropolitan Premium Properties</p>

                    <div class="tabs personal-page__tabs">
                        <button type="button" class="tab-btn tab-btn--active" data-tab="tab-have">I have an account</button>
                        <button type="button" class="tab-btn" data-tab="tab-sign">I want to sign up</button>
                    </div>

                    <div class="personal-wrap">
                        <form action="" class="form-single tab-content tab-content--active" id="tab-have">
                            <label>
                                <input class="field" type="email" placeholder="Email" required>
                            </label>
                            <label>
                                <input class="field" type="password" placeholder="Password" required>
                            </label>

                            <div class="form-single__row">
                                <label class="checkbox form-single__checkbox">
                                    <input type="checkbox" name="privacy" class="checkbox__input" checked>
                                    <span class="checkbox__box"><span class="icon-check"></span></span>
                                    <span class="checkbox__text">Remember me</span>
                                </label>

                                <a href="/forgot_your_password.php" class="form-single__link">Forgot your password?</a>
                            </div>

                            <div class="form-single__send">
                                <button type="submit" class="btn btn--primary">Login</button>
                            </div>
                        </form>
                        <form action="" class="form-single tab-content" id="tab-sign">
                            <label>
                                <input class="field" type="text" placeholder="Full name" required>
                            </label>
                            <label>
                                <input class="field" type="email" placeholder="Email" required>
                            </label>
                            <label>
                                <input class="field" type="password" placeholder="Password" required>
                            </label>
                            <label>
                                <input class="field" type="password" placeholder="Confirm password" required>
                            </label>

                            <div class="form-single__row">
                                <label class="checkbox form-single__checkbox">
                                    <input type="checkbox" name="privacy" class="checkbox__input" checked>
                                    <span class="checkbox__box"><span class="icon-check"></span></span>
                                    <span class="checkbox__text">Remember me</span>
                                </label>
                            </div>

                            <div class="form-single__send">
                                <button type="submit" class="btn btn--primary">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php include_once "./templates/components/cookies.component.php"; ?>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>