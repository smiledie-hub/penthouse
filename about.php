<?php include_once "./templates/layout/start.layout.php"; ?>
<?php HeaderComponent("header--absolute"); ?>

    <div class="absolute-breadcrumps breadcrumps-not-tablet">
        <div class="container">
            <div class="breadcrumbs" data-aos="fade-down" data-aos-duration="1000">
                <a href="/">Home</a>
                <span class="icon-arrow-next"></span>
                <span>About</span>
            </div>
        </div>
    </div>

    <div class="banner banner--2 about-page__banner">
        <img class="banner__image lazy" src="/assets/images/lazy/about-banner.jpg" data-src="/public/images/about-banner.jpg" alt="Banner">

        <div class="banner__content about-page__content">
            <h1 class="banner__title about-page__title">
                <span class="about-page__first" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Real estate agency <br>for connoisseurs of luxurious lifestyle</span>
                <?php AboutTitleRender('about-page__sg'); ?>
            </h1>
        </div>

        <div class="banner-smoke"></div>
    </div>

    <div class="about-page-desc">
        <div class="about-page-desc__box-image box-image box-image--right">
            <div class="about-page-desc__content box-image__content">
                <p class="about-page__text about-page-desc__text" data-aos="fade-right" data-aos-duration="1000">Penthouse.ae powered by Metropolitan is one of the
                    departments of the Metropolitan Group company.</p>
                <img class="about-page-desc__image box-image__image lazy" data-aos="fade-left" data-aos-duration="1000"
                     src="/assets/images/lazy/dubai-marina-economic-1.jpg"
                     data-src="/public/images/dubai-marina-economic-1.jpg" alt="">
            </div>
        </div>

        <div class="bg-second about-page-desc__sect">
            <div class="container">
                <p class="about-page__text about-page-desc__text2" data-aos="fade-right" data-aos-duration="1000">We are distinguished by a strong partnership with
                    all licensed development companies in the emirate, which allows our clients to benefit from
                    these links. </p>
            </div>

            <div class="about-page-block image-content image-content--type-1" >
                <div class="image-content__content">
                    <p class="about-page-block__text" data-aos="fade-up" data-aos-duration="1000">During the extensive work in Dubai's property market, the
                        company
                        has proven itself as a trustworthy provider of real estate services and received a lot of
                        awards
                        such as Damac Broker Awards 2022 Mid-Year 2nd Place, Emaar Broker Awards Q1 2022, 1 Place
                        Sobha
                        Q2 2022, Agency of the Month for May 2020 by Bayut, etc.</p>
                </div>

                <div class="image-content__image-box">
                    <img class="image-content__image lazy" src="/assets/images/lazy/projects-1.jpg" data-src="/public/images/projects-1.jpg" alt="" data-aos="fade-right" data-aos-duration="1000">
                </div>
            </div>

            <div class="about-page-desc__we-are">
                <?php include_once "./templates/components/front/front-we-are.component.php"; ?>
            </div>
        </div>


    </div>

    <div class="about-page__bg">
        <div class="about-company">

            <div class="about-company__first">
                <div class="container">
                    <h2 class="about-company__title">
                        <span class="about-company__start" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">Facts about</span>
                        <?php OurTitleRender('about-company__sg'); ?>
                        <span class="about-company__end" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000">company:</span>
                    </h2>
                </div>
            </div>

            <div class="about-company-scroll">
                <div class="about-company-scroll__sticky">


                    <div class="about-company-scroll__items swiper about-company__slider" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper about-company-scroll__wrapper">
                            <div class="about-company-item swiper-slide">
                                <div class="about-company-item__wrapper">
                                    <p class="about-company-item__title">14 years</p>
                                    <p class="about-company-item__text">14 years of productive work since 2008</p>
                                </div>
                            </div>
                            <div class="about-company-item swiper-slide">
                                <div class="about-company-item__wrapper">
                                    <p class="about-company-item__title">AED 15B</p>
                                    <p class="about-company-item__text">14 years of productive work since 2008</p>
                                </div>
                            </div>
                            <div class="about-company-item swiper-slide">
                                <div class="about-company-item__wrapper">
                                    <p class="about-company-item__title">6,000+</p>
                                    <p class="about-company-item__text">properties have been sold, rented and leased</p>
                                </div>
                            </div>
                            <div class="about-company-item swiper-slide">
                                <div class="about-company-item__wrapper">
                                    <p class="about-company-item__title">120,000+</p>
                                    <p class="about-company-item__text">customers</p>
                                </div>
                            </div>
                            <div class="about-company-item swiper-slide">
                                <div class="about-company-item__wrapper">
                                    <p class="about-company-item__title">90+</p>
                                    <p class="about-company-item__text">employees</p>
                                </div>
                            </div>
                            <div class="about-company-item swiper-slide">
                                <div class="about-company-item__wrapper">
                                    <p class="about-company-item__title">15+</p>
                                    <p class="about-company-item__text">languages</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-company__last">
                <div class="container" data-aos="fade-up" data-aos-duration="1000">
                    <p class="about-company__desc">Penthouse.ae powered by Metropolitan will let high net worth
                        individuals to invest in exclusive real estate across the emirate. </p>
                </div>

                <div class="about-company__image-content image-content image-content--type-2 image-content--image-right">
                    <div class="image-content__content">
                        <p class="about-page-block__text" data-aos="fade-up" data-aos-duration="1000">We know exactly what people who appreciate luxury life are
                            looking for and provide an individual approach to each client, which allows us to work out
                            each request in detail and find the right buyer to the seller.</p>
                    </div>

                    <div class="image-content__image-box">
                        <img class="image-content__image lazy" src="/assets/images/lazy/about-company-1.jpg" data-src="/public/images/about-company-1.jpg" alt="" data-aos="fade-left" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-text-block">
        <div class="container">
            <p class="about-text-block__text" data-aos="fade-up" data-aos-duration="1000">Best professionals of Penthouse.ae powered by Metropolitan clearly
                understand and recognise the market and will help you to purchase or sell luxurious villas and
                penthouses in Dubai. High-profile clients of our agency enjoy privileged access to exclusive luxury
                properties across the most prestigious destinations in the emirate, which are not available to the
                general public. </p>
        </div>

        <div class="bg-second">
            <div class="about-text-block__box-image box-image box-image--left">
                <div class="box-image__content">
                    <img class="box-image__image lazy" src="/assets/images/lazy/emaar_beachfront_1.jpg" data-src="/public/images/emaar_beachfront_1.jpg" alt="" data-aos="fade-right" data-aos-duration="1000">
                </div>
            </div>

            <p class="about-text-block__desc" data-aos="fade-up" data-aos-duration="1000">Guaranteed transparency of all transactions as well as power of our
                network make Penthouse.ae powered by Metropolitan different from other real estate agencies in
                Dubai.</p>
        </div>
    </div>

    <div class="about-specialists">
        <div class="container">
            <h2 class="about-specialists__title">
                <?php OurTitleRender('about-specialists__sg'); ?>
                <span class="about-specialists__end" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">specialists</span>
            </h2>

            <div class="about-specialists__items" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper about-specialists__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php include "templates/components/specialist.component.php"; ?>
                        </div>
                        <div class="swiper-slide">
                            <?php include "templates/components/specialist.component.php"; ?>
                        </div>


                        <?php
                        for ($i = 1; $i <= 12; $i++): ?>
                            <div class="swiper-slide">
                                <?php include "templates/components/specialist.component.php"; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="about-specialists__pagination">
                    <a href="#" class="btn-icon btn-nav btn-nav--prev about-specialists__prev"><span
                                class="icon-arrow-prev"></span></a>
                    <a href="#" class="btn-icon btn-nav btn-nav--next about-specialists__next"><span
                                class="icon-arrow-next"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="about-contact">
        <?php contactSendComponent("If you need one of our services send us a request and we will quickly contact you back", "/assets/images/contact-2.jpg"); ?>
    </div>

<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>