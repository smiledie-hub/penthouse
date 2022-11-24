<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="areas-page">
        <?php HeaderComponent("header--absolute"); ?>
        <div class="absolute-breadcrumps breadcrumps-not-tablet">
            <div class="container">
                <div class="breadcrumbs" data-aos="fade-down" data-aos-duration="1000">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Areas</span>
                </div>
            </div>
        </div>

        <div class="banner">
            <img class="banner__image" src="/public/images/areas-banner.jpg" alt="Banner">

            <div class="banner__content">
                <div class="container">
                    <h1 class="banner__title">
                        <span class="banner__first areas-page__first" data-aos="fade-right" data-aos-duration="1000">Discover Dubai's bestlocations with luxurious property and amazing views</span>
                        <?php AreasTitleRender('areas-page__sg'); ?>
                    </h1>
                </div>
            </div>

            <div class="banner-smoke"></div>
        </div>

        <div class="areas-palm">
            <div class="container">
                <div class="areas-palm__content">
                    <h2 class="areas-palm__title areas-page__title" data-aos="fade-right" data-aos-duration="1000">Palm
                        Jumeirah</h2>
                    <p class="areas-palm__text areas-page__text" data-aos="fade-right" data-aos-duration="1000"
                       data-aos-delay="200">Famous among local and foreign wealthy investors, Palm
                        Jumeirah is the
                        world's largest man-made island, with a size that equals 600 football pitches. </p>
                    <a href="#" class="btn btn--primary btn--small areas-page__more" data-aos="fade-right"
                       data-aos-duration="1000" data-aos-delay="400">Learn more</a>
                </div>
            </div>

            <div class="areas-palm__row-images row-images row-images--items-end row-images--right">
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" class="row-images__img row-images__img--h710"
                         src="/public/images/palm_jumeirah_1.jpg" alt="">
                </div>
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
                         class="row-images__img row-images__img--h1080" src="/public/images/palm_jumeirah_2.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="areas-beachfront">
            <div class="bg-gray">
                <div class="container">
                    <div class="areas-beachfront__end">
                        <h2 class="areas-beachfront__title areas-page__title" data-aos="fade-left"
                            data-aos-duration="1000">Emaar Beachfront</h2>
                    </div>
                </div>
            </div>

            <div class="bg-second">
                <div class="container">
                    <div class="areas-beachfront__between">
                        <div>
                            <p class="areas-beachfront__text areas-page__text" data-aos="fade-right"
                               data-aos-duration="1000">Famous among local and foreign wealthy
                                investors, Palm
                                Jumeirah is the world's largest man-made island, with a size that equals 600 football
                                pitches. </p>
                        </div>
                        <div>
                            <a href="#" class="btn btn--primary btn--small areas-page__more" data-aos="fade-left"
                               data-aos-delay="200" data-aos-duration="1000">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-image box-image--left areas-beachfront__box-image">
                <div class="box-image__content">
                    <img class="box-image__image" src="/public/images/emaar_beachfront_1.jpg" alt="" data-aos="fade-up"
                         data-aos-duration="1000">
                </div>
            </div>
        </div>

        <div class="areas-jumeirah">

            <div class="areas-jumeirah__bg">
                <div class="container">
                    <div class="areas-jumeirah__content">
                        <h2 class="areas-jumeirah__title areas-page__title" data-aos="fade-right"
                            data-aos-duration="1000">Madinat Jumeirah</h2>

                        <div>
                            <p class="areas-jumeirah__text areas-page__text" data-aos="fade-right"
                               data-aos-duration="1000" data-aos-delay="200">Madinat Jumeirah, which means Jumeirah
                                City, is a super-elite resort that was developed by Jumeirah International. It covers an
                                area of 40 hectares and was launched in 2000. </p>
                            <a href="#" class="btn btn--primary btn--small areas-page__more" data-aos="fade-right"
                               data-aos-duration="1000" data-aos-delay="400">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="areas-jumeirah__images row-images row-images--items-end row-images--left row-images--960-710">
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" class="row-images__img row-images__img--h1080"
                         src="/public/images/madinat_jumeirah_1.jpg" alt="">
                </div>
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
                         class="row-images__img row-images__img--h710" src="/public/images/madinat_jumeirah_2.jpg"
                         alt="">
                </div>
            </div>

        </div>

        <div class="areas-dubai">
            <div class="container">
                <div class="areas-dubai__content">
                    <h2 class="areas-dubai__title areas-page__title" data-aos="fade-right" data-aos-duration="1000">
                        Dubai Marina</h2>
                    <p class="areas-dubai__text areas-page__text" data-aos="fade-right" data-aos-duration="1000"
                       data-aos-delay="200">With an area of 50 million sq. ft., Dubai Marina is one of the first and
                        biggest real estate projects of its kind in the Middle East. The entire neighbourhood was
                        developed by Dubai's best-selling developer Emaar Properties.</p>
                    <a href="#" class="btn btn--primary btn--small areas-page__more" data-aos="fade-right"
                       data-aos-duration="1000" data-aos-delay="400">Learn more</a>
                </div>
            </div>

            <div class="areas-dubai__box-image box-image box-image--right">
                <div class="box-image__content box-image__content--p250">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"
                         class="box-image__image box-image__image--h930" src="/public/images/dubai_marina_1.jpg" alt="">
                </div>
            </div>
        </div>
    </main>

<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>