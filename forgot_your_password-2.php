<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="header-static personal-page">
        <img data-src="/public/images/about-bg.svg" alt="" class="personal-page__background lazy">

        <?php include_once "./templates/components/header.component.php"; ?>

        <div class="content-center">
            <div class="personal-page__container container">
                <div class="personal-page__center">
                    <h1 class="personal-page__title">Forgot your password</h1>
                    <p class="personal-page__text">We have already sent you an email with a link to change your password</p>

                    <img class="personal-page__helicopter lazy" data-src="/public/images/helicopter.svg" alt="">
                </div>
            </div>
        </div>
    </main>

<?php include_once "./templates/components/cookies.component.php"; ?>
<?php include_once "./templates/components/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>