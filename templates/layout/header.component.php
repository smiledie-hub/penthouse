<?php function HeaderComponent($classes) { ?>
    <header class="header <?php echo $classes; ?>" data-aos="slide-down" data-aos-duration="1000">
        <div class="header__wrapper">
            <div class="container header__container">
                <div class="header__items">
                    <div class="header__item">
                        <div class="header__btn-menu">
                            <button class="btn-menu">
                                <span class="btn-menu__burger">
                                    <span class="btn-menu__burger-item"></span>
                                    <span class="btn-menu__burger-item"></span>
                                </span>
                                <span class="btn-menu__text">MENU</span>
                            </button>
                        </div>


                        <div class="btn-lang btn-selects">
                            <button class="btn-lang__header btn-selects__header">En</button>
                            <div class="btn-lang__items btn-selects__items">
                                <a href="#!" class="btn-lang__item btn-selects__item">Ru</a>
                                <a href="#!" class="btn-lang__item btn-selects__item">Fr</a>
                            </div>
                        </div>

                        <div class="btn-currency btn-selects">
                            <button class="btn-currency__header btn-selects__header">AED</button>
                            <div class="btn-currency__items btn-selects__items">
                                <a href="#!" class="btn-currency__item btn-selects__item">USD</a>
                                <a href="#!" class="btn-currency__item btn-selects__item">EUR</a>
                                <a href="#!" class="btn-currency__item btn-selects__item">RUB</a>
                            </div>
                        </div>

                        <a href="#" class="btn-pdf">
                            <span class="btn-pdf__icon">PDF</span>
                            <span class="btn-pdf__text">Download<br>brochure</span>
                        </a>
                    </div>

                    <div class="header__item">
                        <div class="logotype">
                            <a href="/">
                                <span class="icon-logo"></span>
                            </a>
                        </div>
                    </div>

                    <div class="header__item">
                        <a href="#" class="btn-login">Log in</a>
                        <a href="#" class="btn-enquiry" data-micromodal-open="modal-enquiry">Enquiry</a>
                        <a href="#" class="btn-profile"><span class="icon icon-profile"></span></a>
                        <a href="#" class="btn-like"><span class="icon icon-like"></span></a>
                        <a href="#" class="btn-whatsapp"><span class="icon icon-whatsapp"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu">
        <div class="menu__overlay js-menu-close"></div>
        <div class="menu__wrapper">

            <div class="menu__close">
                <button class="btn-menu-close js-menu-close">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="44.1426" y="14.4443" width="2.83146" height="42" transform="rotate(45 44.1426 14.4443)"
                              fill="white"/>
                        <rect x="13.7363" y="16.5654" width="2.83146" height="42"
                              transform="rotate(-45 13.7363 16.5654)" fill="white"/>
                    </svg>
                </button>
            </div>

            <div class="menu__open">
                <button class="btn-menu">
                        <span class="btn-menu__burger">
                            <span></span>
                            <span></span>
                        </span>
                    <span class="btn-menu__text">MENU</span>
                </button>
            </div>

            <div class="menu__lang-currency">
                <div class="menu__lang-currency-wrap">
                    <div class="btn-lang btn-selects">
                        <button class="btn-lang__header btn-selects__header">En</button>
                        <div class="btn-lang__items btn-selects__items">
                            <a href="#!" class="btn-lang__item btn-selects__item">Ru</a>
                            <a href="#!" class="btn-lang__item btn-selects__item">Fr</a>
                        </div>
                    </div>
                    <div class="btn-currency btn-selects">
                        <button class="btn-currency__header btn-selects__header">AED</button>
                        <div class="btn-currency__items btn-selects__items">
                            <a href="#!" class="btn-currency__item btn-selects__item">USD</a>
                            <a href="#!" class="btn-currency__item btn-selects__item">EUR</a>
                            <a href="#!" class="btn-currency__item btn-selects__item">RUB</a>
                        </div>
                    </div>
                    <a href="#" class="btn btn--outline btn--default menu__enquiry"
                       data-micromodal-open="modal-enquiry">Enquiry</a>
                </div>
            </div>

            <nav class="menu__nav">
                <ul>
                    <li><a href="#!">Buy</a></li>
                    <li><a href="/sell.php">Sell</a></li>
                    <li><a href="/areas.php">Areas</a></li>
                    <li><a href="#!">Projects</a></li>
                    <li><a href="#!">Services</a></li>
                    <li><a href="/about.php">About us</a></li>
                    <li><a href="/our_specialists.php">Our specialists</a></li>
                    <li><a href="/blog.php">Blog</a></li>
                </ul>
            </nav>

            <div class="menu__metering">
                <div class="menu__metering-wrap">
                    <div class="btn-metering menu__mt">
                        <button class="btn-metering__header">
                            <span>Sq.Mt</span>
                        </button>
                        <div class="btn-metering__list">
                            <a href="#" class="btn-metering__item">Sq.Mt</a>
                        </div>
                    </div>

                    <div class="btn-metering">
                        <button class="btn-metering__header">
                            <span class="icon icon-sort"></span>
                            <span>Sq.Ft</span>
                            <span class="icon icon-arrow-down"></span>
                        </button>
                        <div class="btn-metering__list">
                            <a href="#" class="btn-metering__item">Sq.Ft</a>
                            <a href="#" class="btn-metering__item">Sq.Mt</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu__pdf">
                <a href="#" class="btn-pdf btn-pdf--big">
                    <span class="btn-pdf__icon">PDF</span>
                    <span class="btn-pdf__text">Download<br>brochure</span>
                </a>

                <div class="menu__whatsapp">
                    <a href="#" class="btn-whatsapp">
                        <span class="icon icon-whatsapp"></span>
                        Whatsapp
                    </a>
                </div>
            </div>

            <div class="menu__socials">
                <div class="socials">
                    <a href="#"><span class="icon-fb"></span></a>
                    <a href="#"><span class="icon-inst"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                </div>
            </div>

            <div class="menu__info">
                <a class="menu__tel" href="tel:+971 58 648 8888">+971 58 648 8888</a>
                <p class="menu__address">Office 1913, Al Manara Tower Business Bay, <br>
                    Dubai, United Arab Emirates</p>
            </div>
        </div>
    </div>
<?php }