<?php include_once "./templates/layout/start.layout.php"; ?>
    <div class="bg-second">

        <?php HeaderComponent("header--dark"); ?>

        <div class="container">
            <div class="breadcrumbs" data-aos="fade-down" data-aos-duration="1000">
                <a href="/">Home</a>
                <span class="icon-arrow-next"></span>
                <span>Catalog</span>
            </div>
        </div>

        <div class="catalog-page__header">
            <div class="container">
                <h2 class="catalog-page__title" data-aos="fade-right" data-aos-duration="1000">LUXURY Properties FOR
                    <wbr>
                    SALE IN DUBAI
                </h2>
            </div>

            <div class="catalog-page__panel-box" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                <div class="container">

                    <label class="search-field catalog-page__search">
                        <span class="icon-search search-field__icon"></span>
                        <input type="text" name="search" placeholder="Location, Community, City..."
                               class="search-field__input">
                    </label>

                    <div class="catalog-page__buttons">
                        <button class="btn btn--primary-outline catalog-page__plain-btn"><span
                                    class="icon-plain"></span> View map
                        </button>
                        <div class="catalog-page__buttons-items">
                            <button class="btn btn--primary-outline catalog-page__filter-btn"><span
                                        class="icon-filters"><span class="catalog-page__badge">3</span></span> <span
                                        class="catalog-page__filter-btn-text">Filters</span></button>
                            <div class="catalog-page__minmax-box">
                                <button class="btn btn--primary-outline catalog-page__minmax-btn"><span
                                            class="icon-minmax"></span> <span class="catalog-page__minmax-btn-text">For the price of min</span>
                                </button>
                                <form class="catalog-page__minmax-panel">
                                    <label class="field-radio">
                                        <input type="radio" value="price-min" name="sort" checked>
                                        <span class="field-radio__box"></span>
                                        <span>for the price of min</span>
                                    </label>
                                    <label class="field-radio">
                                        <input type="radio" value="price-max" name="sort">
                                        <span class="field-radio__box"></span>
                                        <span>for the price of max</span>
                                    </label>
                                    <label class="field-radio">
                                        <input type="radio" value="popularity" name="sort">
                                        <span class="field-radio__box"></span>
                                        <span>by popularity</span>
                                    </label>

                                    <button type="submit" class="btn btn--primary">done</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="catalog-page__panel">
                    <button type="button" class="catalog-page__close"><span class="icon-close"></span></button>

                    <div class="catalog-page__search-filter">
                        <?php include_once "./templates/components/search-filter.component.php"; ?>
                    </div>

                    <div class="catalog-page__sort-panel">
                        <div class="sort-panel">
                            <div class="container">
                                <div class="sort-panel__wrapper">
                                    <div class="sort-panel__section">
                                        <div class="sort-panel__part">
                                            <p class="sort-panel__title">Show price in:</p>
                                            <div class="sort-panel__items">
                                                <a href="#" class="active">AED</a>
                                                <a href="#">USD</a>
                                                <a href="#">EUR</a>
                                                <a href="#">RUB</a>
                                            </div>
                                        </div>

                                        <div class="sort-panel__part">
                                            <p class="sort-panel__title">Show area in:</p>
                                            <div class="sort-panel__items">
                                                <a href="#" class="active">Sq. Ft.</a>
                                                <a href="#">Sq. M.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sort-panel__section">
                                        <a href="#" class="sort-panel__reset"><span class="icon-reset"></span> Reset
                                            filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <button type="submit" class="sort-panel__find btn btn--primary">Find</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="catalog__main">
            <div class="catalog__content">
                <p class="catalog__result" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">160
                    results find</p>

                <div class="catalog__items">
                    <?php
                    for ($i = 1; $i <= 14; $i++) {
                        include "./templates/components/catalog-item.php";
                    }
                    ?>
                </div>
                <div class="catalog-footer">
                    <p class="catalog-footer__text" data-aos="fade-right" data-aos-duration="1000">1 – 40 of 120
                        objects</p>

                    <div class="pagination catalog-footer__navs" data-aos="fade-left" data-aos-duration="1000"
                         data-aos-delay="200">
                        <a href="#" class="btn-icon btn-nav btn-nav--prev pagination__prev"><span
                                    class="icon-arrow-prev"></span></a>
                        <div class="pagination__numbers catalog-footer__numbers">
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
                        <a href="#" class="btn-icon btn-nav btn-nav--next pagination__next"><span
                                    class="icon-arrow-next"></span></a>
                    </div>
                </div>
            </div>


        </div>

        <div class="catalog__map">
            <p class="catalog-toggle">
                <button class="catalog-toggle__open"><span class="icon-arrow-prev"></span></button>
                <button class="catalog-toggle__close"><span class="icon-arrow-next"></span></button>
            </p>
            <div id="map-catalog" class="catalog__map-box"></div>

            <script>
                const catalogMapData = [
                    {
                        lat: [25.183942, 55.259319],
                        title: "Dream Palm Residence",
                        text: "4BR Penthouse",
                        link: "#!",
                        images: ['/public/images/article-1.jpg', '/public/images/article-2.jpg', '/public/images/article-3.jpg']
                    },
                    {
                        lat: [25.183952, 55.265000],
                        title: "Dream Palm Residence 2",
                        text: "4BR Penthouse 2",
                        link: "#!",
                        images: ['/public/images/article-1.jpg', '/public/images/article-3.jpg']
                    }
                ]
            </script>
        </div>
    </div>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>