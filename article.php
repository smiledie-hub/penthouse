<?php include_once "./templates/layout/start.layout.php"; ?>
<?php HeaderComponent("header--dark"); ?>

    <main class="article header-static">
        <div class="container">
            <div class="breadcrumbs">
                <a href="/">Home</a>
                <span class="icon-arrow-next"></span>
                <span>Why choose Dubai?</span>
            </div>
        </div>

        <div class="article__header">
            <div class="container">
                <p class="article__time">
                    <time datetime="03.05.22">03.05.22</time>
                </p>
                <h1>Why choose Dubai?</h1>
            </div>
        </div>

        <div class="article-content">

            <div class="article-content__section article-content__section--mb-100">
                <div class="box-image box-image--right">
                    <div class="box-image__content box-image__content--p-none">
                        <img class="box-image__image box-image__image--mw-none mb-100"
                             src="/public/images/dubai-marina-economic-1.jpg" alt="">
                        <p class="article-content__text-1">Where the sea greets you every morning, and pristine white
                            sand welcomes you home—on an island with a statement address in Dubai. Awaken your senses
                            with every breath, as you redefine your premium lifestyle, overlooking the majestic Arabian
                            Sea at Emaar Beachfront. </p>
                    </div>
                </div>
            </div>

            <div class="article-content__section">
                <div class="row-images row-images--items-end row-images--right mb-100">
                    <div class="row-images__item">
                        <img class="row-images__img row-images__img--h710" src="/public/images/page-article-1.jpg"
                             alt="">
                    </div>
                    <div class="row-images__item">
                        <img class="row-images__img row-images__img--h1080" src="/public/images/page-article-2.jpg"
                             alt="">
                    </div>
                </div>

                <div class="row-images row-images--items-end row-images--right row-images--text">
                    <div class="row-images__item"></div>
                    <div class="row-images__item">
                        <p class="article-content__text-2">Where the sea greets you every morning, and pristine white sand welcomes you home—on an island with a statement address in Dubai. Awaken your senses with every breath, as you redefine your premium lifestyle, overlooking the majestic Arabian Sea at Emaar Beachfront. </p>
                    </div>
                </div>
            </div>

            <div class="article-content__section">
                <div class="box-image box-image--left">
                    <div class="box-image__content">
                        <img class="box-image__image box-image__image--mw-none mb-100"
                             src="/public/images/page-article-3.jpg" alt="">
                        <p class="article-content__text-3">Where the sea greets you every morning, and pristine white sand welcomes you home—on an island with a statement address in Dubai. Awaken your senses with every breath, as you redefine your premium lifestyle, overlooking the majestic Arabian Sea at Emaar Beachfront. </p>
                    </div>
                </div>
            </div>

            <div class="article-content__section">
                <div class="row-images row-images--items-end row-images--left row-images--960-710">
                    <div class="row-images__item">
                        <img class="row-images__img row-images__img--h1080" src="/public/images/page-article-4.jpg"
                             alt="">
                    </div>
                    <div class="row-images__item">
                        <img class="row-images__img row-images__img--h710" src="/public/images/page-article-5.jpg"
                             alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="blog article__another">
            <div class="container">
                <div class="blog__another">
                    <p>Another articles</p>
                    <a href="/" class="btn btn--primary blog__back">Back to blog</a>
                </div>

                <div class="blog__headers blog__headers--line-gray">
                    <p class="blog__header">Article</p>
                    <p class="blog__header">Date</p>
                </div>

                <div class="blog__items blog__items--line-gray">
                    <article class="blog-item">
                        <a href="#" class="blog-item__link"></a>
                        <div class="blog-item__start">
                            <img class="blog-item__image" src="/public/images/article-1.jpg" alt="">
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

                    <article class="blog-item">
                        <a href="#" class="blog-item__link"></a>
                        <div class="blog-item__start">
                            <img class="blog-item__image" src="/public/images/article-2.jpg" alt="">
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

                    <article class="blog-item">
                        <a href="#" class="blog-item__link"></a>
                        <div class="blog-item__start">
                            <img class="blog-item__image" src="/public/images/article-3.jpg" alt="">
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
                </div>
            </div>
        </div>
    </main>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>