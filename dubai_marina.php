<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="dubai-marina-page">
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

        <div class="dubai-marina-banner">
            <img class="dubai-marina-banner__image lazy" src="/public/images/lazy/dubai-banner.jpg" data-src="/public/images/dubai-banner.jpg" alt="Banner">

            <div class="dubai-marina-banner__content">
                <h1 class="dubai-marina-banner__title" data-aos="fade-right" data-aos-duration="1000">Dubai Marina</h1>
            </div>

            <div class="banner-smoke"></div>
        </div>

        <div class="dubai-marina-about">
            <div class="container">
                <div class="dubai-marina-about__content">
                    <h2>
                        <?php AboutTitleRender('dubai-marina-about__title'); ?>
                    </h2>

                    <p class="dubai-marina-about__desc" data-aos="fade-right" data-aos-duration="1000"
                       data-aos-delay="200">With an area of 50 million sq. ft., Dubai Marina is one of the
                        first and biggest real estate projects of its kind in the Middle East. The entire neighbourhood
                        was developed by Dubai's best-selling developer Emaar Properties.</p>
                </div>
            </div>

            <div class="dubai-marina-about__images row-images row-images--items-end row-images--right">
                <div class="row-images__item">
                    <p class="dubai-marina-about__text" data-aos="fade-right" data-aos-duration="1000"
                       data-aos-delay="400">One of the community’s key features is a water canal with a
                        length of 11,482 ft. that provides access to the waterfront from both sides, which makes Dubai
                        Marina one of the most sought-after modern sailing locations in the emirate.</p>
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                         class="row-images__img row-images__img--h710 lazy" src="/public/images/lazy/dubai-marina-1.jpg" data-src="/public/images/dubai-marina-1.jpg"
                         alt="">
                </div>
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"
                         class="row-images__img row-images__img--h1080 lazy" src="/public/images/lazy/dubai-marina-2.jpg" data-src="/public/images/dubai-marina-2.jpg"
                         alt="">
                </div>
            </div>

            <div class="dubai-marina-about__sect bg-second">
                <div class="dubai-marina-about__wrapper row-images row-images--right">
                    <div class="row-images__item">
                        <div class="dubai-marina-about__text-box" data-aos="fade-right" data-aos-duration="1000"
                             data-aos-delay="400">
                            <p>The beautiful waterfront area houses more than 200 super-tall skyscrapers, including the
                                101-storey Princess Tower, which is the world's second-highest residential building.</p>
                        </div>
                    </div>
                    <div class="row-images__item">
                        <div class="dubai-marina-about__text-box2" data-aos="fade-right" data-aos-duration="1000"
                             data-aos-delay="600">
                            <p>Dubai Marina was designed to accommodate roughly 120,000 people and is considered to be
                                one
                                of the biggest freehold areas in Dubai, in terms of buildings and population.</p>

                            <p>The marina area consists of two parts: Jumeirah Beach Residence and the Beach, and it
                                offers
                                some of the city’s best nightlife venues, gourmet restaurants, hotels, and resorts,
                                which
                                are ideal for enjoying a dream vacation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dubai-marina-slider">
            <div class="swiper dubai-marina-slider__el">
                <div class="swiper-wrapper dubai-marina-slider__wrapper">
                    <div class="swiper-slide dubai-marina-slider__slide">
                        <img class="dubai-marina-slider__image lazy" src="/public/images/lazy/dubai-marina-slider-1.jpg" data-src="/public/images/dubai-marina-slider-1.jpg" alt="">
                    </div>
                    <div class="swiper-slide dubai-marina-slider__slide">
                        <img class="dubai-marina-slider__image lazy" src="/public/images/lazy/dubai-marina-slider-1.jpg" data-src="/public/images/dubai-marina-slider-1.jpg" alt="">
                    </div>
                    <div class="swiper-slide dubai-marina-slider__slide">
                        <img class="dubai-marina-slider__image lazy" src="/public/images/lazy/dubai-marina-slider-1.jpg" data-src="/public/images/dubai-marina-slider-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="dubai-marina-location">
            <div class="container">
                <div class="dubai-marina-location__content">
                    <h2 class="dubai-marina-location__title">
                        <span class="dubai-marina-location__start" data-aos="fade-right" data-aos-duration="1000">Location</span>
                        <?php AmpersandTitleRender('dubai-marina-location__sg'); ?>
                        <span class="dubai-marina-location__end" data-aos="fade-right" data-aos-duration="1000"
                              data-aos-delay="400">Infrastructure</span>
                    </h2>

                    <p class="dubai-marina-location__text" data-aos="fade-right" data-aos-duration="1000"
                       data-aos-delay="600">Dubai Marina is conveniently located along Sheikh Zayed Road,
                        one of the city's key highways, which provides easy access to other parts of the emirate.
                        Business Bay, Downtown Dubai, and Dubai International Airport can be reached within a 25-minute
                        drive of the neighbourhood.</p>
                </div>
            </div>

            <div class="row-images row-images--items-end row-images--left row-images--960-710">
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
                         class="row-images__img row-images__img--h1080 lazy"
                         src="/public/images/lazy/dubai-marina-location-1.jpg"
                         data-src="/public/images/dubai-marina-location-1.jpg"
                         alt="">
                </div>
                <div class="row-images__item">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                         class="row-images__img row-images__img--h710 lazy"
                         src="/public/images/lazy/dubai-marina-location-2.jpg"
                         data-src="/public/images/dubai-marina-location-2.jpg"
                         alt="">
                </div>
            </div>

            <div class="dubai-marina-location-block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">

                <div class="dubai-marina-location-block__image-box" >
                    <div class="dubai-marina-location-block__wrapper">
                        <div class="dubai-marina-location-block__text-box">
                            <p>The area houses plenty of bus stations, as well as its own dedicated Metro station, Sobha
                                Realty, formerly known as Dubai Marina Metro Station, and the DMCC Metro Station can
                                also be reached a short distance away.</p>
                            <p>At the beginning of 2022, Dubai Marina witnessed the launch of a boat service that
                                connects the area to Bluewaters Island, which is famed for having some of the city's
                                best attractions, including Ain Dubai and Madame Tussauds Dubai.</p>
                        </div>

                        <div class="dubai-marina-location-block__image">
                            <img class="lazy"
                                 data-src="/public/images/dubai-marina-location-3.jpg"
                                 src="/public/images/lazy/dubai-marina-location-3.jpg"
                                 alt="">
                        </div>
                    </div>
                </div>

                <div class="dubai-marina-location-block__content">
                    <div class="swiper area-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="dubai-marina-location-block__text">Dubai Marina is home to several grocery
                                    stores,
                                    nurseries, and medical centres, including:</p>
                                <p class="dubai-marina-location-block__text2">Blossom Marina Nursery Dubai, Raffles
                                    Nursery Dubai
                                    Marina, and Willow Children's Nursery - Dubai Marina</p>
                            </div>

                            <div class="swiper-slide">
                                <p class="dubai-marina-location-block__text">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Accusantium, asperiores!</p>
                                <p class="dubai-marina-location-block__text2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Beatae culpa enim exercitationem ipsam iure, qui quisquam sunt.
                                    Pariatur, placeat rem.</p>
                            </div>
                        </div>
                    </div>

                    <div class="dubai-marina-location-block__navs">
                        <button class="btn-icon btn-nav btn-nav--prev btn-icon--white area-slider__prev"><span
                                    class="icon-arrow-prev"></span></button>
                        <button class="btn-icon btn-nav btn-nav--next btn-icon--white area-slider__next"><span
                                    class="icon-arrow-next"></span></button>
                    </div>
                </div>

            </div>

            <div class="dubai-marina-economic">
                <div class="container">
                    <div class="dubai-marina-economic__content">
                        <h2 class="dubai-marina-economic__title">
                            <?php EconomicTitleRender('dubai-marina-economic__sg'); ?>
                            <span class="dubai-marina-economic__end" data-aos="fade-right" data-aos-duration="1000"
                                  data-aos-delay="400">Appeal</span>
                        </h2>
                        <p class="dubai-marina-economic__text dubai-marina-economic__text--1"
                           data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">As of Q3 2022, the entire
                            area of Dubai Marina has been
                            developed, leaving only a few options for off-plan properties. The latest real estate
                            launches in the neighbourhood include LIV Marina by LIV Real Estate Development LLC and
                            Marina Shores by Emaar Properties.</p>
                    </div>
                </div>

                <div class="dubai-marina-economic__box">
                    <div class="dubai-marina-economic__box-image box-image box-image--left">
                        <div class="box-image__content">
                            <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                                 class="box-image__image lazy" src="/public/images/lazy/dubai-marina-economic-1.jpg" data-src="/public/images/dubai-marina-economic-1.jpg" alt="">
                        </div>
                    </div>

                    <div class="container">
                        <div class="dubai-marina-economic__box-text">
                            <p class="dubai-marina-economic__text dubai-marina-economic__text--2" data-aos="fade-right"
                               data-aos-duration="1000" data-aos-delay="400">According to Bayut and
                                dubizzle’s H1 2022 Dubai Property Sales Market Report, Dubai Marina was
                                the most popular area in H1 2022 in terms of upscale apartment acquisition. That being
                                said, the
                                neighbourhood witnessed a whopping 5.96% surge in price per sq. ft., which currently
                                amounts to
                                AED 1,459 (USD 397).</p>

                            <p class="dubai-marina-economic__text dubai-marina-economic__text--3" data-aos="fade-right"
                               data-aos-duration="1000" data-aos-delay="600">Also, in line with the
                                Dubai 2040 Urban Master Plan, Dubai Marina, alongside Jumeirah Beach
                                Residence, is set to become a thriving leisure, hospitality, and tourism hub, which will
                                drive
                                even more international real estate investors into the area who opt to invest in
                                expensive
                                assets.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dubai-marina-promo">
            <div class="container">
                <p class="dubai-marina-promo__desc" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    Dubai Marina offers an abundance of exclusive leisure facilities,
                    which serve as a major driving force behind strong demand for properties in this area. A few popular
                    attractions include the following sites.</p>
            </div>

            <div class="dubai-marina-promo__image-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="dubai-marina-promo__image">
                    <img class="lazy" src="/public/images/lazy/dubai-marina-promo-1.jpg" data-src="/public/images/dubai-marina-promo-1.jpg" alt="">
                </div>

                <div class="dubai-marina-promo__content" >

                    <div class="swiper area-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="dubai-marina-promo__text">Dubai Marina Walk is a beautiful 22,965 ft. long
                                    palm-framed
                                    promenade, which features 305 retail outlets and 69 fine dining restaurants.</p>
                            </div>

                            <div class="swiper-slide">
                                <p class="dubai-marina-promo__text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Ab aperiam architecto consectetur deleniti dolorem earum iusto molestias ullam
                                    vel voluptate.</p>
                            </div>
                        </div>
                    </div>

                    <div class="dubai-marina-promo__navs">
                        <button class="btn-icon btn-nav btn-nav--prev btn-icon--white area-slider__prev"><span
                                    class="icon-arrow-prev"></span></button>
                        <button class="btn-icon btn-nav btn-nav--next btn-icon--white area-slider__next"><span
                                    class="icon-arrow-next"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="dubai-marina-popular">
            <div class="container">
                <h2 class="dubai-marina-popular__title">
                    <span class="dubai-marina-popular__start" data-aos="fade-right" data-aos-duration="1000"
                          data-aos-delay="400">Popular</span>
                    <?php PropertiesTitleRender('dubai-marina-popular__sg'); ?>
                </h2>
            </div>

            <div class="dubai-marina-popular-block dubai-marina-popular-block--1" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200">
                <div class="dubai-marina-popular-block__content dubai-marina-popular-block__content--left">
                    <div>
                        <p class="dubai-marina-popular-block__subtitle">Developed by DAMAC Properties,</p>
                        <p class="dubai-marina-popular-block__dev">Cavalli Tower</p>
                    </div>

                    <p class="dubai-marina-popular-block__text">is the world's first residential development that comes
                        under the iconic Cavalli brand. Due in Q4 2025, it will have a total of 485 stylish residences,
                        including one- to four-bedroom modern apartments and two- to four-bedroom penthouses, as well as
                        gorgeous five-bedroom penthouses for sale called Flying Villas. The latter dream homes are being
                        constructed in the Super Luxury section on the upper floors of the 70-storey tower. Units will
                        feature hydroponic walls, barbecue zones, and private pools.
                        Additionally, residents of Cavalli Tower penthouses will be granted exclusive access to a cigar
                        lounge, infinity pool, and private pavilion for dinner parties.</p>

                    <div class="dubai-marina-popular-block__options">
                        <div>
                            <p class="dubai-marina-popular-block__label">The size of penthouses for sale ranges:</p>
                            <p class="dubai-marina-popular-block__value">2,665 sq. ft</p>
                        </div>

                        <div>
                            <p class="dubai-marina-popular-block__label">The starting price amounts to:</p>
                            <p class="dubai-marina-popular-block__value">AED 11M (USD 2.9M)</p>
                        </div>
                    </div>
                </div>
                <div class="dubai-marina-popular-block__image dubai-marina-popular-block__image--right">
                    <img class="dubai-marina-popular-block__img-1 lazy" src="/public/images/lazy/dubai-marina-popular-block-1.jpg" data-src="/public/images/dubai-marina-popular-block-1.jpg"
                         alt="">
                </div>
            </div>
            <div class="dubai-marina-popular-block dubai-marina-popular-block--2" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200">
                <div class="dubai-marina-popular-block__content dubai-marina-popular-block__content--right">
                    <div>
                        <p class="dubai-marina-popular-block__subtitle">Developed by Verve Developments</p>
                        <p class="dubai-marina-popular-block__dev">Le Reve</p>
                    </div>

                    <p class="dubai-marina-popular-block__text">is an ultra-luxury 52-storey tower with a bespoke
                        selection of 80 four-bedroom penthouses. Properties include 70 Presidential Apartments, 9 Royal
                        Apartments, and 1 Super Penthouse. Completed in 2006, the complex was designed to provide a
                        royal lifestyle thanks to a wide array of VIP amenities, which include landscaped gardens and
                        private valet parking, as well as a gym, rooftop swimming pool, spa, and health club.</p>

                    <div class="dubai-marina-popular-block__options">
                        <div>
                            <p class="dubai-marina-popular-block__label">The size of penthouses for sale ranges:</p>
                            <p class="dubai-marina-popular-block__value">6,307 sq. ft</p>
                        </div>

                        <div>
                            <p class="dubai-marina-popular-block__label">The starting price amounts to:</p>
                            <p class="dubai-marina-popular-block__value">AED 19M (USD 5.17M)</p>
                        </div>
                    </div>
                </div>

                <div class="dubai-marina-popular-block__image dubai-marina-popular-block__image--left">
                    <img class="dubai-marina-popular-block__img-1 lazy" src="/public/images/lazy/dubai-marina-popular-block-2.jpg" data-src="/public/images/dubai-marina-popular-block-2.jpg"
                         alt="">
                </div>
            </div>
            <div class="dubai-marina-popular-block dubai-marina-popular-block--3" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200">
                <div class="dubai-marina-popular-block__content dubai-marina-popular-block__content--left">
                    <div>
                        <p class="dubai-marina-popular-block__subtitle">Developed by Real Estate Development LLC</p>
                        <p class="dubai-marina-popular-block__dev">LIV Marina</p>
                    </div>

                    <p class="dubai-marina-popular-block__text">is a 44-storey tower that is due in Q2 2025. Properties
                        will include studios and one- to three-bedroom apartments for sale, as well as entire-floor
                        signature penthouses with four-bedroom configurations that will be listed in the expensive
                        segment of the local real estate market. Residents of penthouses will be treated to an extensive
                        range of in-home amenities, such as a game room, study/library, bar, and formal lounge.
                        For the utmost comfort and convenience of its occupants, LIV Marina will house an entire floor
                        filled with various leisure offerings, such as a virtual golf room, music room, outdoor yoga
                        area, and LIV FIT area, among other amenities.</p>

                    <div class="dubai-marina-popular-block__options">
                        <div>
                            <p class="dubai-marina-popular-block__label">The size of penthouses for sale ranges:</p>
                            <p class="dubai-marina-popular-block__value">6,808 sq. ft.</p>
                        </div>

                        <div>
                            <p class="dubai-marina-popular-block__label">The starting price amounts to:</p>
                            <p class="dubai-marina-popular-block__value">19.9M (USD 5.4M)</p>
                        </div>
                    </div>
                </div>

                <div class="dubai-marina-popular-block__image dubai-marina-popular-block__image--right">
                    <img class="dubai-marina-popular-block__img-1 lazy" src="/public/images/lazy/dubai-marina-popular-block-3.jpg" data-src="/public/images/dubai-marina-popular-block-3.jpg"
                         alt="">
                </div>
            </div>
        </div>

        <div class="dubai-marina-agents">
            <div class="container">
                <h2 class="dubai-marina-agents__title">Discover other areas</h2>
            </div>
            <?php include_once "./templates/components/front/front-agents.component.php"; ?>
        </div>
    </main>

<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>