<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="personal-page personal-page--restored">
        <img data-src="/public/images/about-bg.svg" alt="" class="personal-page__background lazy">

        <?php HeaderComponent("header--dark"); ?>

        <div class="content-center content-center--min">
            <div class="personal-page__container container">
                <div class="personal-page__center">
                    <h1 class="personal-page__title">Password has been successfully restored</h1>

                    <a href="/" class="btn btn--primary">Go to main</a>
                </div>
            </div>
        </div>
    </main>

<?php include_once "./templates/components/cookies.component.php"; ?>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>