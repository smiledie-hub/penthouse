<?php include_once "./templates/layout/start.layout.php"; ?>
<?php include_once "./templates/components/header.component.php"; ?>

    <main class="something-page fullpage">
        <img class="fullpage__backgrond lazy" data-src="/public/images/something-page.jpg" alt="">

        <div class="something-page__container">
            <div class="something-page__content">
                <h1 class="something-page__title">
                    <span class="something-page__title-start">something</span>
                    <span class="something-page__sg fn-sg">went</span>
                    <span class="something-page__title-end">wrong</span>
                </h1>

                <a href="/" class="btn btn--big-circle something-page__button">Go to Main page</a>
            </div>
        </div>

        <div class="fullpage__footer">
            <?php include_once "./templates/components/footer.component.php"; ?>
        </div>
    </main>

<?php include_once "./templates/layout/end.layout.php"; ?>