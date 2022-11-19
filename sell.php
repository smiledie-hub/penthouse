<?php include_once "./templates/layout/start.layout.php"; ?>
<?php HeaderComponent("header--absolute"); ?>

    <div class="x-fix">
        <div class="absolute-breadcrumps breadcrumps-not-tablet">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Sell</span>
                </div>
            </div>
        </div>
        <div class="bg-dark">
            <div class="banner banner--3">
                <img class="banner__image" src="/public/images/sell-banner.jpg" alt="Banner">

                <div class="banner__content">
                    <h1 class="banner__title">
                        <span class="banner__sg fn-sg">Sell</span>
                        <span class="banner__first">Selling a dream</span>
                    </h1>
                    <p class="banner__text">Let professionals of Penthouse.ae powered by Metropolitan to sell your
                        luxurious
                        real estate in Dubai and we will find the right buyer quickly, due to our effective marketing
                        campaign and extensive customer base.</p>
                </div>

                <div class="banner-smoke banner-smoke--dark">
                    <div></div>
                </div>
            </div>

            <div class="sell-page__quote quote">
                <div class="container">
                    <div class="quote__inner">
                        <div class="quote__wrapper">
                            <div class="quote__item">
                                <span class="quote__icon"><span class="icon-quote"></span></span>

                                <div class="quote__content">
                                    <p class="quote__text">
                                        «As a head of sales department in Penthouse.ae powered by Metropolitan, I can
                                        safely say that our
                                        company provides the highest quality of service to clients from all over the
                                        world. Due to extensive
                                        and long-term experience in the market, we have created effective tools for
                                        working with luxurious
                                        real estate and we know exactly what our clients are looking for. I am
                                        especially proud of our team,
                                        which consists of strong and experienced specialists, offering an individual
                                        approach to each
                                        client.»
                                    </p>
                                    <div class="quote__author">
                                        <p class="quote__name">Petri Mannila</p>
                                        <p class="quote__spec">Luxury Property Specialist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote__item">
                                <img class="quote__image" src="/public/images/quote.jpg" alt="">
                                <p class="quote__sg fn-sg">Petri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sell-page__scrol sell-scroll sell-scroll--counter-white">
        <div class="sell-scroll__sticky">
            <div class="sell-scroll__wrapper">
                <div class="sell-scroll__header">
                    <h2 class="sell-scroll__title">How it works</h2>
                </div>
                <div class="sell-scroll__main">
                    <div class="sell-scroll-item sell-scroll-item--1" data-counter="white" data-title="black"
                         data-next="black">
                        <div class="sell-scroll-item__wrapper">
                            <p class="sell-scroll-item__number">01.</p>
                            <p class="sell-scroll-item__text">You contact us or send us the request by form below</p>
                        </div>
                    </div>
                    <div class="sell-scroll-item sell-scroll-item--2" data-counter="white" data-title="white"
                         data-next="white">
                        <div class="sell-scroll-item__center">
                            <div class="sell-scroll-item__form">
                                <?php contactSendComponent("Send us your request and we will contact you as soon as
                possible!", "/public/images/contact-bg.jpg"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="sell-scroll-item sell-scroll-item--3" data-counter="black" data-title="black"
                         data-next="black">
                        <div class="sell-scroll-item__wrapper-img-2">
                            <div class="sell-scroll-item__content">
                                <p class="sell-scroll-item__number">02.</p>
                                <p class="sell-scroll-item__text sell-scroll-item__text--2">We estimate your project and
                                    prepare a contract.</p>
                            </div>
                            <img class="sell-scroll-item__image-2" src="/public/images/scroll-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="sell-scroll-item sell-scroll-item--4" data-counter="white" data-title="white"
                         data-next="white">
                        <img class="sell-scroll-item__bg" src="/public/images/scroll-3.jpg" alt="">
                        <div class="sell-scroll-item__inner">
                            <p class="sell-scroll-item__number">03.</p>
                            <p class="sell-scroll-item__text sell-scroll-item__text--3">We come to your property to take
                                high-quality photos and videos.</p>
                        </div>
                    </div>
                    <div class="sell-scroll-item sell-scroll-item--5" data-counter="none" data-title="black"
                         data-next="black">
                        <div class="sell-scroll-item__wrapper-img">
                            <div class="sell-scroll-item__content">
                                <p class="sell-scroll-item__number">04.</p>
                                <p class="sell-scroll-item__text sell-scroll-item__text--4">We release your property on
                                    our catalog and start to sell it.</p>
                            </div>
                            <img class="sell-scroll-item__image" src="/public/images/scroll-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="sell-scroll__footer">
                    <p class="sell-scroll__next">Scroll <span class="icon-arrow-right-big"></span></p>
                    <p class="sell-scroll__counter"><span class="sell-scroll__current">01</span> / <span
                                class="sell-scroll__lenght">04</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="x-fix">
        <div class="sell-advantages">
            <div class="container">
                <h2 class="sell-advantages__title"><span class="sell-advantages__start">advantages</span> <span
                            class="sell-advantages__sg fn-sg">Advantages</span></h2>
            </div>

            <div class="sell-advantages__row-images row-images row-images--items-end row-images--right mb-100">
                <div class="row-images__item sell-advantages__item">
                    <p class="sell-page__text">Extensive online marketing campaigns</p>
                    <img class="sell-advantages__img row-images__img row-images__img--h710"
                         src="/public/images/sell-1.jpg" alt="">
                </div>
                <div class="row-images__item">
                    <img class="sell-advantages__img row-images__img row-images__img--h1080"
                         src="/public/images/sell-2.jpg" alt="">
                </div>
            </div>

            <div class="container">
                <p class="sell-page__text sell-page__text--2">Modern reporting system for real estate value analysis and
                    cost control </p>
            </div>
        </div>

        <div class="bg-second">
            <div class="sell-page__box-image box-image box-image--left">
                <div class="box-image__content">
                    <img class="box-image__image" src="/public/images/self-page-1.jpg" alt="">
                    <div class="sell-page__end">
                        <p class="sell-page__text sell-page__text--3">Promotion through social networks for a wide
                            audience coverage </p>
                    </div>
                </div>
            </div>

            <div class="sell-page__row-images row-images row-images--items-end row-images--right">
                <div class="row-images__item">
                    <p class="sell-page__text sell-page__text--4">Own database of high net worth individuals</p>
                    <img class="row-images__img row-images__img--h710" src="/public/images/sell-3.jpg" alt="">
                </div>
                <div class="row-images__item">
                    <img class="row-images__img row-images__img--h1080" src="/public/images/sell-4.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="row-images row-images--items-end row-images--right row-images--text sell-page__bg-mobile">
            <div class="row-images__item"></div>
            <div class="row-images__item">
                <p class="sell-page__text sell-page__text--5">Promotion of real estate through our extensive network of
                    banking contacts</p>
            </div>
        </div>

        <div class="box-image box-image--right sell-page__box-image2 sell-page__bg-mobile">
            <p class="sell-page__text sell-page__text--6">Creation of high-quality photos, videos and presentations </p>
            <div class="box-image__content box-image__content--p550">
                <img class="box-image__image" src="/public/images/self-page-1.jpg" alt="">
            </div>
        </div>
    </div>

<?php contactSendComponent("Send us your request and we will contact you as soon as possible!", "/public/images/contact-bg-2.jpg"); ?>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>