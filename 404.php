<?php include_once "./templates/layout/start.layout.php"; ?>

<?php HeaderComponent("header--absolute"); ?>

    <main class="page-404 fullpage">
        <img class="fullpage__backgrond lazy" src="/public/images/lazy/404.jpg" data-src="/public/images/404.jpg" alt="">

        <div class="container page-404__container">
            <div class="page-404__content">

                <div class="page-404__title">
                    <span class="page-404__num">4</span>
                    <img class="page-404__image lazy" src="/public/images/lazy/404-2.jpg" data-src="/public/images/404-2.jpg" alt="404">
                    <span class="page-404__num">4</span>
                </div>

                <p class="page-404__text">Sorry! The page is not found!</p>
                <a href="/" class="btn btn--primary">Go to Main page</a>
            </div>
        </div>

        <div class="fullpage__footer">
            <?php include_once "./templates/layout/footer.component.php"; ?>
        </div>
    </main>
<?php include_once "./templates/layout/end.layout.php"; ?>