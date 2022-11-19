<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="header-static personal-page">
        <img data-src="/public/images/about-bg.svg" alt="" class="personal-page__background lazy">

        <?php HeaderComponent("header--dark"); ?>

        <div class="content-center content-center--min">
            <div class="personal-page__container container">
                <div class="personal-page__center">
                    <h1 class="personal-page__title">Forgot your password</h1>

                    <div class="personal-wrap">
                        <form action="" class="form-single">
                            <label class="label-center">
                                <span>Enter your e-mail:</span>
                                <input class="field" type="email" placeholder="Email" required>
                            </label>

                            <div class="form-single__send">
                                <button type="submit" class="btn btn--primary">Send</button>
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