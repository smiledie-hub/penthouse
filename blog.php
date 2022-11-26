<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="blog-page">

        <?php HeaderComponent("header--dark"); ?>

        <div class="container">
            <div class="breadcrumbs" data-aos="fade-down" data-aos-duration="1000">
                <a href="/">Home</a>
                <span class="icon-arrow-next"></span>
                <span>Blog</span>
            </div>
        </div>

        <div class="blog__header">
            <div class="container">

                <div class="blog__wrapper">
                    <h2 class="blog__title blog__title--page" data-aos="fade-right" data-aos-duration="1000">Blog</h2>
                    <div class="blog__categories">
                        <div class="swiper blog__slider" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                            <div class="swiper-wrapper">
                                <a href="#" class="swiper-slide btn-category btn-category--active"><span>Lifestyle/Trends</span></a>
                                <a href="#" class="swiper-slide btn-category"><span>News</span></a>
                                <a href="#" class="swiper-slide btn-category"><span>Market reviews</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog__body">
            <div class="container">
                <div class="blog__headers blog__headers--line-gray">
                    <p class="blog__header" data-aos="fade-right" data-aos-duration="1000">Article</p>
                    <p class="blog__header" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Date</p>
                </div>
                <div class="blog__items blog__items--line-gray">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <article class="blog-item" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" class="blog-item__link"></a>
                            <div class="blog-item__start">
                                <img class="blog-item__image lazy" src="/public/images/lazy/article-1.jpg" data-src="/public/images/article-1.jpg" alt="">
                                <div class="blog-item__content">
                                    <p class="blog-item__date-mobile">03.05.22</p>
                                    <h3 class="blog-item__title">Why choose Dubai?</h3>
                                    <p class="blog-item__text">Reputation, confort, quality and other more are the
                                        reasons to buy your penthouse in Dubai</p>
                                </div>
                            </div>
                            <div class="blog-item__end">
                                <p class="blog-item__date">03.05.22</p>
                                <a class="blog-item__button btn btn--primary-outline" href="#">Learn more</a>
                            </div>
                        </article>
                        <article class="blog-item" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" class="blog-item__link"></a>
                            <div class="blog-item__start">
                                <img class="blog-item__image lazy" src="/public/images/lazy/article-2.jpg" data-src="/public/images/article-2.jpg" alt="">
                                <div class="blog-item__content">
                                    <p class="blog-item__date-mobile">03.05.22</p>
                                    <h3 class="blog-item__title">Brad Pitt bought a penthouse in Palm Jumeirah</h3>
                                    <p class="blog-item__text">In January the famous Hollywood actor started seeing
                                        Aniston and found the best place to spend vacations together…</p>
                                </div>
                            </div>
                            <div class="blog-item__end">
                                <p class="blog-item__date">03.05.22</p>
                                <a class="blog-item__button btn btn--primary-outline" href="#">Learn more</a>
                            </div>
                        </article>
                        <article class="blog-item" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" class="blog-item__link"></a>
                            <div class="blog-item__start">
                                <img class="blog-item__image lazy" src="/public/images/lazy/article-3.jpg" data-src="/public/images/article-3.jpg" alt="">
                                <div class="blog-item__content">
                                    <p class="blog-item__date-mobile">03.05.22</p>
                                    <h3 class="blog-item__title">We've got Meraas!</h3>
                                    <p class="blog-item__text">We were nominated for Meraas as the best performing real
                                        estate agency! The ceremony was held in…</p>
                                </div>
                            </div>
                            <div class="blog-item__end">
                                <p class="blog-item__date">03.05.22</p>
                                <a class="blog-item__button btn btn--primary-outline" href="#">Learn more</a>
                            </div>
                        </article>
                    <?php endfor; ?>
                </div>

                <div class="blog__pagination pagination" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#" class="btn-icon btn-nav btn-nav--prev pagination__prev"><span class="icon-arrow-prev"></span></a>
                    <div class="pagination__numbers">
                        <a href="#" class="pagination__number">1</a>
                        <a href="#" class="pagination__number">2</a>
                        <a href="#" class="pagination__number">3</a>
                        <a href="#" class="pagination__number">4</a>
                        <a href="#" class="pagination__number">5</a>
                        <a href="#" class="pagination__number">6</a>
                        <a href="#" class="pagination__number">7</a>
                        <span class="pagination__dots">...</span>
                        <a href="#" class="pagination__number">40</a>
                    </div>
                    <a href="#" class="btn-icon btn-nav btn-nav--next pagination__next"><span class="icon-arrow-next"></span></a>
                </div>
            </div>
        </div>
    </main>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>