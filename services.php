<?php include_once "./templates/layout/start.layout.php"; ?>
    <div class="services-page">
        <?php HeaderComponent("header--absolute"); ?>

        <div class="banner banner--full">
            <img class="banner__image" src="/public/images/services-bg.jpg" alt="Banner">
            <div class="banner__content">
                <div class="container">
                    <h1 class="services-page__title banner__title">
                        <span class="banner__first">property</span>
                        <span class="services-page__sg banner__sg fn-sg">Services </span>
                    </h1>

                    <p class="services-page__text banner__text">Penthouse.ae powered by Metropolitan provides clients a wide range of
                        services from evaluating your luxurious property or portfolio, to achieving the highest
                        investment yields, and representing you professionally as a buyer, seller, landlord or a
                        tenant.</p>
                </div>
            </div>
        </div>

        <div class="absolute-breadcrumps breadcrumps-not-tablet">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Services</span>
                </div>
            </div>
        </div>


        <div class="services">
            <div class="services__inner" >
                <div class="services__items">
                    <div data-color="#AA9F8D" class="services-item">
                        <div class="services-item__content">
                            <div class="services-item__icon">
                                <span class="icon icon-leaf"></span>
                            </div>

                            <div>
                                <h2 class="services-item__title">
                                    <span class="services-item__title-text">Advisory</span>
                                    <span class="services-item__title-sg fn-sg">consulting</span>
                                </h2>

                                <p class="services-item__text">Get the most from your money by investing with us – via our significant market knowledge, privileged information, off-market deals and the best ROIs in the market.</p>
                            </div>

                            <p class="services-item__number">01 / 05</p>

                            <img class="services-item__image lazy" data-src="/public/images/service-mobile-1.jpg" alt="">
                        </div>
                    </div>
                    <div data-color="#3B3734" class="services-item">
                        <div class="services-item__content">
                            <div class="services-item__icon">
                                <span class="icon icon-home"></span>
                            </div>

                            <div>
                                <h2 class="services-item__title">
                                    <span class="services-item__title-text">Property</span>
                                    <span class="services-item__title-sg fn-sg">management</span>
                                </h2>

                                <p class="services-item__text">We can handle all your property needs leaving you to enjoy being a resort homeowner and a smart landlord.</p>
                            </div>

                            <p class="services-item__number">02 / 05</p>

                            <img class="services-item__image lazy" data-src="/public/images/service-mobile-2.jpg" alt="">
                        </div>
                    </div>
                    <div data-color="#E8E4DD" class="services-item">
                        <div class="services-item__content">
                            <div class="services-item__icon">
                                <span class="icon icon-international-passport"></span>
                            </div>

                            <div>
                                <h2 class="services-item__title">
                                    <span class="services-item__title-text">Citizenship</span>
                                    <span class="services-item__title-sg fn-sg">programs</span>
                                </h2>

                                <p class="services-item__text">We can help you to cancel out borders and to become a true citizen of the world with the best passports available through investment.</p>
                            </div>

                            <p class="services-item__number">03 / 05</p>

                            <img class="services-item__image lazy" data-src="/public/images/service-mobile-3.jpg" alt="">
                        </div>
                    </div>
                    <div data-color="#3B3734" class="services-item">
                        <div class="services-item__content">
                            <div class="services-item__icon">
                                <span class="icon icon-pazzle"></span>
                            </div>

                            <div>
                                <h2 class="services-item__title">
                                    <span class="services-item__title-text">Legal</span>
                                    <span class="services-item__title-sg fn-sg">services</span>
                                </h2>

                                <p class="services-item__text">Our in-house consultancy office will sort out any personal or business legal issues you may encounter in UAE, be it power of attorney, residence visa processing, company formation, bank account opening or a full scope litigation.</p>
                            </div>

                            <p class="services-item__number">04 / 05</p>

                            <img class="services-item__image lazy" data-src="/public/images/service-mobile-4.jpg" alt="">
                        </div>
                    </div>
                    <div data-color="#AA9F8D" class="services-item">
                        <div class="services-item__content">
                            <div class="services-item__icon">
                                <span class="icon icon-worker"></span>
                            </div>

                            <div>
                                <h2 class="services-item__title">
                                    <span class="services-item__title-text">Mortgages</span>
                                    <span class="services-item__title-sg fn-sg">assistance</span>
                                </h2>

                                <p class="services-item__text">Our in-house mortgage brokerage team will get you fast approval and the best rates.</p>
                            </div>

                            <p class="services-item__number">05 / 05</p>

                            <img class="services-item__image lazy" data-src="/public/images/service-mobile-5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="services__sticky">
                    <div class="services__wrapper">
                        <div class="service-image service-image--color-primary">
                            <img class="lazy" data-src="/public/images/service-1.png" alt="">
                        </div>
                        <div class="service-image service-image--center service-image--color-second">
                            <img class="lazy" data-src="/public/images/service-2.png" alt="">
                        </div>
                        <div class="service-image service-image--center service-image--color-ternary">
                            <img class="lazy" data-src="/public/images/service-3.png" alt="">
                        </div>
                        <div class="service-image service-image--color-second">
                            <img class="lazy" data-src="/public/images/service-4.png" alt="">
                        </div>
                        <div class="service-image service-image--color-primary">
                            <img class="lazy" data-src="/public/images/service-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-page__contact">
            <?php contactSendComponent("If you need one of our services send us a request and we will quickly contact you back", "/public/images/contact-2.jpg"); ?>
        </div>
    </div>

<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>