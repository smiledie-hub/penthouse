<?php include_once "./templates/layout/start.layout.php"; ?>
<main class="catalog-page header-static">
    <div class="bg-second">
        <?php HeaderComponent("header--dark"); ?>
        <div class="container">
            <div class="breadcrumbs">
                <a href="/">Home</a>
                <span class="icon-arrow-next"></span>
                <span>Catalog</span>
            </div>
        </div>

        <div class="catalog-page__header">
            <div class="container">
                <h2 class="catalog-page__title"><h2 class="catalog-page__title">no objects found, try again</h2></h2>
            </div>

            <div class="catalog-page__panel-box">
                <div class="container">

                    <label class="search-field catalog-page__search">
                        <span class="icon-search search-field__icon"></span>
                        <input type="text" name="search" placeholder="Location, Community, City..." class="search-field__input">
                    </label>

                    <div class="catalog-page__buttons">
                        <button class="btn btn--primary-outline catalog-page__plain-btn"><span class="icon-plain"></span> View map</button>
                        <div class="catalog-page__buttons-items">
                            <button class="btn btn--primary-outline catalog-page__filter-btn"><span class="icon-filters"><span class="catalog-page__badge">3</span></span> <span class="catalog-page__filter-btn-text">Filters</span></button>
                            <div class="catalog-page__minmax-box">
                                <button class="btn btn--primary-outline catalog-page__minmax-btn"><span class="icon-minmax"></span> <span class="catalog-page__minmax-btn-text">For the price of min</span></button>
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
                                        <a href="#" class="sort-panel__reset"><span class="icon-reset"></span> Reset filter</a>
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
                <p class="catalog__result">Sorry, we couldn’t find any results</p>
            </div>
        </div>
    </div>
</main>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>
