<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="project-page">
        <?php HeaderComponent("header--absolute"); ?>

        <div class="absolute-breadcrumps breadcrumps-not-tablet">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Areas</span>
                </div>
            </div>
        </div>

        <div class="banner project-banner">
            <img class="banner__image lazy" src="/public/images/lazy/project-banner.jpg"
                 data-src="/public/images/project-banner.jpg" alt="">

            <div class="banner__content project-banner__content">
                <div class="container">
                    <h1 class="project-banner__title">
                        <?php ProjectsTitleRender('project-banner__sg'); ?>
                        <span class="project-banner__first" data-aos="fade-right" data-aos-duration="1000"
                              data-aos-delay="400">1, 2 & 3BR Branded Apartments by Emaar Beachfront x Address Hotel</span>
                    </h1>
                </div>
            </div>

            <div class="banner-smoke">
                <div></div>
            </div>
        </div>

        <div class="project-description">
            <div class="container project-description__container">
                <p class="project-description__text">Address Residences The Bay at Emaar Beachfront blends beachfront
                    living andexcellent design flair
                    surrounded by unmatched views of the gulf's blue watersand superyachts, with direct access to the
                    beach
                    & an adjacent park. The toweroffers a wide array of ultra-luxury apartments and duplex penthouses
                    for
                    sale</p>

                <div class="project-description__buttons">
                    <a href="#!" class="btn btn--primary">Discover more</a>
                    <a href="#!" class="btn btn--primary-outline">Get Project Brochure</a>
                </div>
            </div>
        </div>

        <div class="project-items">
            <div class="container">
                <div class="project-items__wrapper">
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="53" height="45" viewBox="0 0 53 45" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L32.5 1M18 10L36.0678 4.12798C37.13 3.78276 38.269 4.37438 38.5975 5.44187L40 10"
                                      stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="43" cy="29" r="1" fill="#332E2A"/>
                                <path d="M49 23.5V24H49.5V23.5H49ZM47 14.5H5.5V15.5H47V14.5ZM45.5 8V10.5H46.5V8H45.5ZM48.5 17V23.5H49.5V17H48.5ZM49 23H41V24H49V23ZM38.5 25.5V31.5H39.5V25.5H38.5ZM41 34H50.5V33H41V34ZM53 31.5V24H52V31.5H53ZM48 36V40.5H49V36H48ZM44.5 44H5V45H44.5V44ZM1.5 40.5V10.5H0.5V40.5H1.5ZM39 6.5H44V5.5H39V6.5ZM5.5 6.5H18.5V5.5H5.5V6.5ZM53 24C53 22.8954 52.1046 22 51 22V23C51.5523 23 52 23.4477 52 24H53ZM50.5 34C51.8807 34 53 32.8807 53 31.5H52C52 32.3284 51.3284 33 50.5 33V34ZM38.5 31.5C38.5 32.8807 39.6193 34 41 34V33C40.1716 33 39.5 32.3284 39.5 31.5H38.5ZM5.5 14.5C3.29086 14.5 1.5 12.7091 1.5 10.5H0.5C0.5 13.2614 2.73858 15.5 5.5 15.5V14.5ZM5 44C3.067 44 1.5 42.433 1.5 40.5H0.5C0.5 42.9853 2.51472 45 5 45V44ZM47 15.5C47.8284 15.5 48.5 16.1716 48.5 17H49.5C49.5 15.6193 48.3807 14.5 47 14.5V15.5ZM41 23C39.6193 23 38.5 24.1193 38.5 25.5H39.5C39.5 24.6716 40.1716 24 41 24V23ZM48 40.5C48 42.433 46.433 44 44.5 44V45C46.9853 45 49 42.9853 49 40.5H48ZM46.5 8C46.5 6.61929 45.3807 5.5 44 5.5V6.5C44.8284 6.5 45.5 7.17157 45.5 8H46.5ZM1.5 10.5C1.5 8.29086 3.29086 6.5 5.5 6.5V5.5C2.73858 5.5 0.5 7.73858 0.5 10.5H1.5Z"
                                      fill="black"/>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">AED 2,600,000</p>
                            <p class="project-item__text">Starting Price</p>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="63" height="59" viewBox="0 0 63 59" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.2 29.816C30.4213 29.816 29.792 29.5333 29.312 28.968C28.832 28.4027 28.592 27.6667 28.592 26.76C28.592 25.8533 28.832 25.1173 29.312 24.552C29.792 23.9867 30.4213 23.704 31.2 23.704C31.9787 23.704 32.6027 23.9867 33.072 24.552C33.552 25.1067 33.792 25.8427 33.792 26.76C33.792 27.6773 33.552 28.4187 33.072 28.984C32.6027 29.5387 31.9787 29.816 31.2 29.816ZM37.952 23.8H39.184L31.536 35H30.304L37.952 23.8ZM31.2 28.904C31.6907 28.904 32.0747 28.7173 32.352 28.344C32.6293 27.96 32.768 27.432 32.768 26.76C32.768 26.088 32.6293 25.5653 32.352 25.192C32.0747 24.808 31.6907 24.616 31.2 24.616C30.72 24.616 30.336 24.808 30.048 25.192C29.7707 25.576 29.632 26.0987 29.632 26.76C29.632 27.4213 29.7707 27.944 30.048 28.328C30.336 28.712 30.72 28.904 31.2 28.904ZM38.288 35.096C37.5093 35.096 36.88 34.8187 36.4 34.264C35.9307 33.6987 35.696 32.9573 35.696 32.04C35.696 31.1227 35.9307 30.3867 36.4 29.832C36.88 29.2667 37.5093 28.984 38.288 28.984C39.0667 28.984 39.696 29.2667 40.176 29.832C40.656 30.3973 40.896 31.1333 40.896 32.04C40.896 32.9467 40.656 33.6827 40.176 34.248C39.696 34.8133 39.0667 35.096 38.288 35.096ZM38.288 34.184C38.768 34.184 39.1467 33.992 39.424 33.608C39.712 33.224 39.856 32.7013 39.856 32.04C39.856 31.3787 39.712 30.856 39.424 30.472C39.1467 30.088 38.768 29.896 38.288 29.896C37.7973 29.896 37.4133 30.088 37.136 30.472C36.8587 30.8453 36.72 31.368 36.72 32.04C36.72 32.712 36.8587 33.24 37.136 33.624C37.4133 33.9973 37.7973 34.184 38.288 34.184Z"
                                      fill="black"/>
                                <path d="M18.8125 5.34993C23.1993 2.5939 28.3901 1 33.9531 1C49.6932 1 62.4531 13.7599 62.4531 29.5C62.4531 45.2401 49.6932 58 33.9531 58C18.213 58 5.45312 45.2401 5.45312 29.5C5.45312 27.3585 5.68932 25.2722 6.13708 23.2656"
                                      stroke="black" stroke-linecap="round"/>
                                <path d="M6.34375 22.8203L6.75978 22.543C6.68355 22.4286 6.56362 22.3507 6.42817 22.3275C6.29272 22.3043 6.15369 22.3379 6.04375 22.4203L6.34375 22.8203ZM0.7 26.4281C0.479086 26.5938 0.434315 26.9072 0.6 27.1281C0.765685 27.349 1.07909 27.3938 1.3 27.2281L0.7 26.4281ZM9.49022 28.4414C9.6434 28.6712 9.95384 28.7333 10.1836 28.5801C10.4134 28.4269 10.4755 28.1165 10.3223 27.8867L9.49022 28.4414ZM6.04375 22.4203L0.7 26.4281L1.3 27.2281L6.64375 23.2203L6.04375 22.4203ZM5.92772 23.0977L9.49022 28.4414L10.3223 27.8867L6.75978 22.543L5.92772 23.0977Z"
                                      fill="black"/>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">50/50</p>
                            <p class="project-item__text">SPayment Plan</p>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="49" height="51" viewBox="0 0 49 51" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 25.5L25 1.5L48.5 25.5M7.5 27.5V50H18.5V33H31V50H42V27.5" stroke="black"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">Q4 26</p>
                            <p class="project-item__text">Completion</p>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.5" cy="28.5" r="28" stroke="black"/>
                                <path d="M28.0347 16.5502C28.2009 16.1275 28.7991 16.1275 28.9653 16.5502L31.5002 22.998C31.7137 23.5412 32.223 23.9112 32.8056 23.9465L39.7211 24.3648C40.1745 24.3922 40.3594 24.9612 40.0087 25.2499L34.6598 29.6531C34.2092 30.0241 34.0147 30.6228 34.1612 31.1877L35.9004 37.894C36.0144 38.3337 35.5304 38.6854 35.1474 38.4411L29.3068 34.7147C28.8147 34.4007 28.1853 34.4007 27.6932 34.7147L21.8526 38.4411C21.4696 38.6854 20.9856 38.3337 21.0996 37.894L22.8388 31.1877C22.9854 30.6228 22.7908 30.0241 22.3402 29.6531L16.9913 25.2499C16.6406 24.9612 16.8255 24.3922 17.2789 24.3648L24.1944 23.9465C24.777 23.9112 25.2863 23.5412 25.4998 22.998L28.0347 16.5502Z"
                                      stroke="black"/>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">Branded Residences</p>
                            <p class="project-item__text">by Emaar x Address Hotels</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-address">
            <div class="container">
                <h2 class="project-address__title">
                    <?php AddressTitleRender('project-address__sg'); ?>
                    <span class="project-address__first">Residences The Bay at Emaar Beachfront</span>
                </h2>
            </div>

            <div class="box-image">
                <div class="box-image__content box-image__content--p250">
                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" class="box-image__image lazy"
                         data-src="/public/images/project-page-1.jpg" alt="">
                </div>
            </div>

            <div class="container">
                <div class="project-address__content">
                    <p class="project-address__text">Address The Bay in Emaar Beachfront is an ultra-luxury residential
                        project from the leading developer in the UAE, Emaar Properties. The complex features a
                        collection of luxurious branded apartments, which comprise 1 to 3 bedrooms with areas ranging
                        from 803 to 1970 sqft. Residences will be 4 two-bedroom back side apartments on the upper
                        floors, three-bedroom corner units in the frontal part of the building, and 2 two-bedroom
                        residences in the middle section of the residential tower.These properties with world-class
                        interiors will provide stunning views of the sea and the Emaar Beachfront area. The thoughtful
                        design of the residential building will provide residents panoramic views from more than 75% of
                        the apartments in both directions. Luxurious amenities in the development will comprise
                        exclusive access to a private beach, an infinity swimming pool, a grand hotel lobby and
                        world-class hotel services from the famous Address Hotels + Resorts brand. The ultra-luxury
                        5-star hotel will be located on the podium level of the Address The Bay complex.
                        Request Available Units & Prices</p>

                    <a href="#!" class="btn btn--primary">Request Available Units & Prices</a>
                </div>
            </div>
        </div>

        <div class="project-items">
            <div class="container">
                <div class="project-items__wrapper">
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="51" height="51" viewBox="0 0 51 51" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_598_16502)">
                                    <path d="M19.8702 25.5V22.8507M45.039 50.3377H49.3442C50.0758 50.3377 50.6689 49.7446 50.6689 49.013V36.7598M19.8702 22.8507V12.9156M19.8702 22.8507H40.4026M50.6689 22.8507V12.9156M50.6689 22.8507H45.3702M50.6689 22.8507V27.487M19.8702 12.9156V1.98703C19.8702 1.25543 20.4632 0.662354 21.1948 0.662354H30.1364M19.8702 12.9156H30.1364M50.6689 12.9156V1.98703C50.6689 1.25543 50.0758 0.662354 49.3442 0.662354H40.4026M50.6689 12.9156H45.3702M40.4026 0.662354V22.8507M40.4026 0.662354H30.1364M40.4026 22.8507H45.3702M30.1364 0.662354V12.9156M30.1364 12.9156H45.3702M45.3702 12.9156V22.8507M44.0455 9.27274H46.6948M23.1819 16.5585V19.2078M42.0585 34.4416V28.8117C42.0585 28.0801 41.4654 27.487 40.7338 27.487H2.64938C1.91778 27.487 1.32471 28.0801 1.32471 28.8117V34.4416M42.0585 34.4416V49.013C42.0585 49.7446 41.4654 50.3377 40.7338 50.3377H39.078C38.3463 50.3377 37.7533 49.7446 37.7533 49.013V47.3572M42.0585 34.4416H41.065C39.236 34.4416 37.7533 35.9243 37.7533 37.7533V39.0779M37.7533 47.3572H5.6299M37.7533 47.3572V44.3766M5.6299 47.3572V49.013C5.6299 49.7446 5.03683 50.3377 4.30523 50.3377H2.64938C1.91778 50.3377 1.32471 49.7446 1.32471 49.013V34.4416M5.6299 47.3572V44.3766M1.32471 34.4416H2.31821C4.14721 34.4416 5.6299 35.9243 5.6299 37.7533V39.0779M5.6299 39.0779V44.3766M5.6299 39.0779H10.9286M21.526 44.3766V43.052C21.526 40.8572 19.7468 39.0779 17.552 39.0779H15.565M21.526 44.3766H5.6299M21.526 44.3766H22.1883M37.7533 44.3766V39.0779M37.7533 44.3766H22.1883M37.7533 39.0779H32.4546M10.9286 39.0779C9.90132 38.4616 9.27276 37.3514 9.27276 36.1534V35.2511C9.27276 33.5237 10.6731 32.1234 12.4005 32.1234H13.578C15.4069 32.1234 16.8896 33.6061 16.8896 35.4351V35.5634C16.8896 36.7666 16.4802 37.9339 15.7286 38.8735L15.565 39.0779M10.9286 39.0779H15.565M27.8182 39.0779H26.1624C23.9676 39.0779 22.1883 40.8572 22.1883 43.052V44.3766M27.8182 39.0779L27.6557 38.9155C26.6995 37.9592 26.1624 36.6624 26.1624 35.3101C26.1624 33.5501 27.5891 32.1234 29.3491 32.1234H30.4676C32.2965 32.1234 33.7793 33.6061 33.7793 35.4351V35.5634C33.7793 36.7666 33.3698 37.9339 32.6182 38.8735L32.4546 39.0779M27.8182 39.0779H32.4546M45.039 27.487H50.6689M50.6689 27.487V36.7598M45.039 36.7598H50.6689M45.039 42.0585V44.3766"
                                          stroke="#332E2A" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.9561 8.27917C12.0666 7.97033 12.9378 7.09909 13.2467 5.98853C13.5555 7.09909 14.4268 7.97039 15.5373 8.27917C14.4268 8.58802 13.5555 9.45926 13.2467 10.5698C12.9378 9.45926 12.0666 8.58802 10.9561 8.27917Z"
                                          stroke="black"/>
                                    <path d="M1.68359 20.2013C2.79414 19.8924 3.66543 19.0212 3.97424 17.9106C4.28306 19.0212 5.15435 19.8925 6.26489 20.2013C5.15435 20.5101 4.28306 21.3814 3.97424 22.4919C3.66543 21.3814 2.79414 20.5101 1.68359 20.2013Z"
                                          stroke="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_598_16502">
                                        <rect width="51" height="51" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">Furnished</p>
                            <p class="project-item__text">Apartments</p>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="60" height="63" viewBox="0 0 60 63" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_598_16506)">
                                    <path d="M16.8295 20.1219L16.7489 20.6169C15.1114 30.676 11.5074 40.3138 6.14305 48.9793L5.85388 49.4464M4.75632 51.2194L5.85388 49.4464M20.488 18.6584L20.0099 22.8028C18.8757 32.632 15.8713 42.1534 11.1588 50.8535L10.9606 51.2194M8.78071 55.2438L10.9606 51.2194M5.85388 49.4464C4.65883 48.6926 3.27478 48.2926 1.86184 48.2926H0.731934M10.9606 51.2194C15.7432 52.8898 19.9297 55.9286 22.9998 59.9583L24.1466 61.4633M35.1222 57.8048H53.4149M39.1466 61.4633H49.3905"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M44.2681 50.122C49.5215 50.122 53.7802 45.8633 53.7802 40.6099C53.7802 35.3564 49.5215 31.0977 44.2681 31.0977C39.0146 31.0977 34.7559 35.3564 34.7559 40.6099C34.7559 45.8633 39.0146 50.122 44.2681 50.122Z"
                                          stroke="black"/>
                                    <path d="M16.0977 53.7805H59.6342" stroke="black" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M28.5985 11.2893C32.5237 11.2953 36.0313 13.7336 37.407 17.4046L19.7715 17.3779C21.1583 13.711 24.6733 11.2834 28.5985 11.2893Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M21.8247 6.52017C24.7429 3.89504 28.9806 3.35551 32.4612 5.15941L19.35 16.9539C17.9232 13.3025 18.9065 9.14533 21.8247 6.52017Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M17.5089 6.80017C14.8255 4.05534 10.7249 3.26144 7.21387 4.79947L19.2764 17.1378C20.8934 13.6624 20.1924 9.54502 17.5089 6.80017Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M9.89113 11.7843C6.05696 11.9703 2.7419 14.511 1.5625 18.1581L18.7974 17.3222C17.2706 13.8063 13.7252 11.5983 9.89113 11.7843Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M8.59809 20.2112C6.02665 23.0612 5.49095 27.2034 7.24573 30.6113L18.8048 17.8001C15.2351 16.4038 11.1696 17.3612 8.59809 20.2112Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M30.1339 19.9006C32.7806 22.7993 33.3514 27.0328 31.5734 30.5268L19.6821 17.5033C23.3229 16.0495 27.4872 17.002 30.1339 19.9006Z"
                                          fill="#F2F0EF" stroke="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_598_16506">
                                        <rect width="60" height="62.1951" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">Private</p>
                            <p class="project-item__text">Beach</p>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="49" height="50" viewBox="0 0 49 50" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_598_16516)">
                                    <path d="M41.3653 0.609863H7.96545C7.06533 0.609863 6.29893 1.26472 6.15856 2.15384L0.667662 36.9295C0.317043 39.1501 2.03333 41.1586 4.28143 41.1586H43.7407C45.9345 41.1586 47.6351 39.2413 47.3731 37.0632L43.1815 2.22064C43.0709 1.3015 42.2911 0.609863 41.3653 0.609863Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.3291 11.2805L15.0429 10.656C16.0736 9.75409 17.5653 9.6114 18.7483 10.3015C19.779 10.9027 21.06 10.8776 22.0667 10.2369C23.1118 9.57183 24.4649 9.58201 25.51 10.2471C26.5031 10.8791 27.776 10.9349 28.8124 10.3768L29.0664 10.2401C30.3116 9.56951 31.8285 9.65817 32.9872 10.4693L34.1462 11.2805"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.0244 17.378L14.7382 16.7534C15.7689 15.8515 17.2606 15.7088 18.4436 16.3989C19.4744 17.0002 20.7553 16.975 21.762 16.3343C22.8071 15.6692 24.1602 15.6794 25.2053 16.3445C26.1984 16.9765 27.4713 17.0323 28.5077 16.4742L28.7617 16.3375C30.0069 15.6669 31.5238 15.7556 32.6825 16.5667L33.8415 17.378"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.7197 23.4756L14.4335 22.851C15.4642 21.9492 16.9559 21.8065 18.1389 22.4966C19.1697 23.0978 20.4506 23.0726 21.4573 22.432C22.5024 21.7669 23.8555 21.7771 24.9006 22.4422C25.8938 23.0742 27.1666 23.1299 28.203 22.5718L28.457 22.4351C29.7022 21.7646 31.2191 21.8532 32.3778 22.6643L33.5368 23.4756"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M25.61 34.2989V49.6952H22.2563V34.4513C22.2563 32.9359 21.0278 31.7074 19.5124 31.7074C17.997 31.7074 16.7685 32.9359 16.7685 34.4513V37.1952H13.7197V34.2989C13.7197 31.0155 16.3814 28.3538 19.6648 28.3538C22.9483 28.3538 25.61 31.0155 25.61 34.2989Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M37.8048 34.2989V49.6952H34.4511V34.4513C34.4511 32.9359 33.2227 31.7074 31.7072 31.7074C30.1918 31.7074 28.9633 32.9359 28.9633 34.4513V37.1952H25.9146V34.2989C25.9146 31.0155 28.5763 28.3538 31.8597 28.3538C35.1431 28.3538 37.8048 31.0155 37.8048 34.2989Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M25.6099 44.2073H34.4513V47.8658H25.6099V44.2073Z" fill="#F2F0EF"
                                          stroke="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_598_16516">
                                        <rect width="48.1707" height="50" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">Infinity</p>
                            <p class="project-item__text">Pool</p>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-item__left">
                            <svg width="57" height="55" viewBox="0 0 57 55" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_598_16525)">
                                    <path d="M15.8782 13.3172C19.4613 13.3172 22.366 10.4125 22.366 6.82936C22.366 3.24624 19.4613 0.341553 15.8782 0.341553C12.2951 0.341553 9.39038 3.24624 9.39038 6.82936C9.39038 10.4125 12.2951 13.3172 15.8782 13.3172Z"
                                          stroke="black"/>
                                    <path d="M40.4636 13.3172C44.0468 13.3172 46.9514 10.4125 46.9514 6.82936C46.9514 3.24624 44.0468 0.341553 40.4636 0.341553C36.8805 0.341553 33.9758 3.24624 33.9758 6.82936C33.9758 10.4125 36.8805 13.3172 40.4636 13.3172Z"
                                          stroke="black"/>
                                    <path d="M40.1709 10C41.8278 10 43.1709 8.65685 43.1709 7C43.1709 5.34315 41.8278 4 40.1709 4C38.514 4 37.1709 5.34315 37.1709 7C37.1709 8.65685 38.514 10 40.1709 10Z"
                                          stroke="black"/>
                                    <path d="M16.1709 10C17.8278 10 19.1709 8.65685 19.1709 7C19.1709 5.34315 17.8278 4 16.1709 4C14.514 4 13.1709 5.34315 13.1709 7C13.1709 8.65685 14.514 10 16.1709 10Z"
                                          stroke="black"/>
                                    <path d="M1.87839 38.9269C5.08434 38.9269 7.68327 41.5259 7.68327 44.7318V50.1952M15.5369 40.6343L11.9479 41.8306C11.6778 41.9206 11.3901 41.7536 11.3343 41.4745L10.8831 39.2187C10.5917 37.7614 9.5743 36.5548 8.18714 36.0213C6.80913 35.4913 5.2561 35.6987 4.06548 36.5719L3.31888 37.1194C1.76942 38.2556 0.854004 40.0621 0.854004 41.9836V46.9319C0.854004 49.0113 1.72673 50.9952 3.25955 52.4003C4.34784 53.3979 5.77056 53.9513 7.24688 53.9513H10.5202C14.3712 53.9513 18.0469 52.342 20.6589 49.5123L17.9272 43.0245L15.5369 40.6343Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M54.4559 39.2683C51.2257 39.2683 48.6072 41.8868 48.6072 45.1169V50.5366M40.6943 40.9756L44.316 42.1738C44.5854 42.2629 44.8721 42.0964 44.9282 41.8182L45.3783 39.5847C45.675 38.1123 46.7057 36.8947 48.109 36.359C49.4928 35.8308 51.0497 36.0379 52.2472 36.9095L52.9894 37.4497C54.5593 38.5924 55.488 40.4169 55.488 42.3585V47.2455C55.488 49.3417 54.6041 51.3406 53.0537 52.7513C51.9636 53.743 50.5428 54.2927 49.0691 54.2927H46.0331C42.0136 54.2927 38.2195 52.4357 35.7536 49.2615C35.7102 49.2056 35.7012 49.1304 35.7301 49.0657L38.286 43.3658L40.6943 40.9756Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M28.1709 16.7318C29.1139 16.7318 29.8783 15.9674 29.8783 15.0245C29.8783 14.0815 29.1139 13.3171 28.1709 13.3171C27.228 13.3171 26.4636 14.0815 26.4636 15.0245C26.4636 15.9674 27.228 16.7318 28.1709 16.7318Z"
                                          stroke="black"/>
                                    <path d="M40.805 35.5122C40.805 44.8367 34.9215 52.2439 27.8294 52.2439C20.7372 52.2439 14.8538 44.8367 14.8538 35.5122C14.8538 26.1877 20.7372 18.7805 27.8294 18.7805C34.9215 18.7805 40.805 26.1877 40.805 35.5122Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M17.2441 25.9512C13.2749 27.4948 9.97924 30.3921 7.93988 34.1309L7.00024 35.8536M38.4149 25.9512C43.1758 27.466 47.0202 31.0136 48.9119 35.6378L49.0002 35.8536"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.1123 23.4526L18.2727 23.4325C21.0893 23.0804 23.9199 23.9692 26.0297 25.8681C26.0886 25.9211 26.1222 25.9965 26.1222 26.0758V29.56C26.1222 29.6537 26.0818 29.7428 26.0113 29.8045C24.3033 31.299 22.1871 32.2481 19.935 32.5296L19.2506 32.6152C18.4889 32.7104 17.7715 32.2362 17.5607 31.4982L17.3057 30.6057C16.8152 28.889 16.7018 27.0864 16.9733 25.3217L17.1112 24.4258C17.1899 23.9141 17.5986 23.5168 18.1123 23.4526Z"
                                          fill="#F2F0EF" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M38.6643 23.1134L38.5607 23.1C35.8005 22.7431 33.0247 23.6339 30.9877 25.5304C30.9334 25.581 30.9026 25.6518 30.9026 25.726V29.2272C30.9026 29.3155 30.9399 29.3996 31.0053 29.4587C32.6576 30.9545 34.7278 31.9092 36.9382 32.195L37.554 32.2747C38.2828 32.3689 38.9699 31.9125 39.1656 31.2041L39.4338 30.2328C39.9027 28.5354 40.011 26.7586 39.752 25.0168L39.6064 24.0377C39.5344 23.5536 39.1497 23.1762 38.6643 23.1134Z"
                                          fill="#F2F0EF" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M28.1708 31.0731C29.8681 31.0731 31.244 29.6972 31.244 27.9999C31.244 26.3027 29.8681 24.9268 28.1708 24.9268C26.4736 24.9268 25.0977 26.3027 25.0977 27.9999C25.0977 29.6972 26.4736 31.0731 28.1708 31.0731Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M41.4881 14.3415C41.4881 20.5149 35.58 25.6098 28.1711 25.6098C20.7621 25.6098 14.854 20.5149 14.854 14.3415C14.854 8.16815 20.7621 3.07324 28.1711 3.07324C35.58 3.07324 41.4881 8.16815 41.4881 14.3415Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M28.1709 20C29.8278 20 31.1709 18.6569 31.1709 17C31.1709 15.3431 29.8278 14 28.1709 14C26.514 14 25.1709 15.3431 25.1709 17C25.1709 18.6569 26.514 20 28.1709 20Z"
                                          fill="#F2F0EF" stroke="black"/>
                                    <path d="M22.6709 13C23.4993 13 24.1709 12.3284 24.1709 11.5C24.1709 10.6716 23.4993 10 22.6709 10C21.8425 10 21.1709 10.6716 21.1709 11.5C21.1709 12.3284 21.8425 13 22.6709 13Z"
                                          stroke="black"/>
                                    <path d="M33.6709 13C34.4993 13 35.1709 12.3284 35.1709 11.5C35.1709 10.6716 34.4993 10 33.6709 10C32.8425 10 32.1709 10.6716 32.1709 11.5C32.1709 12.3284 32.8425 13 33.6709 13Z"
                                          stroke="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_598_16525">
                                        <rect width="56" height="54.6341" fill="white" transform="translate(0.170898)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="project-item__right">
                            <p class="project-item__title">Kids</p>
                            <p class="project-item__text">Play Zone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-slider">
            <div class="swiper project-slider__swiper">
                <div class="swiper-wrapper">
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-1.jpg"
                             data-src="/public/images/project-slide-1.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-2.jpg"
                             data-src="/public/images/project-slide-2.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-3.jpg"
                             data-src="/public/images/project-slide-3.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-4.jpg"
                             data-src="/public/images/project-slide-4.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-5.jpg"
                             data-src="/public/images/project-slide-5.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-1.jpg"
                             data-src="/public/images/project-slide-1.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-5.jpg"
                             data-src="/public/images/project-slide-5.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-1.jpg"
                             data-src="/public/images/project-slide-1.jpg" alt="">
                    </div>
                </div>

                <button class="btn-icon btn-nav btn-nav--prev project-slider-prev"><span
                            class="icon-arrow-prev"></span>
                </button>
                <button class="btn-icon btn-nav btn-nav--next project-slider-next"><span
                            class="icon-arrow-next"></span>
                </button>
            </div>

            <!--            <div class="project-slider__items"></div>-->
            <div class="swiper project-slider__items">
                <div class="swiper-wrapper">
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-1.jpg"
                             data-src="/public/images/project-slide-1.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-2.jpg"
                             data-src="/public/images/project-slide-2.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-3.jpg"
                             data-src="/public/images/project-slide-3.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-4.jpg"
                             data-src="/public/images/project-slide-4.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-5.jpg"
                             data-src="/public/images/project-slide-5.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-1.jpg"
                             data-src="/public/images/project-slide-1.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-5.jpg"
                             data-src="/public/images/project-slide-5.jpg" alt="">
                    </div>
                    <div class="project-slider__slide swiper-slide">
                        <img class="lazy" src="/public/images/lazy/project-slide-1.jpg"
                             data-src="/public/images/project-slide-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="project-info">
            <div class="project-info__sect">
                <img class="project-info__image lazy" data-src="/public/images/project-page-2.jpg" alt="">
            </div>

            <div class="project-info__sect">
                <div class="project-info__content">
                    <h2 class="project-info__title">he Pinnacle of Seaside Living in Emaar Beachfront</h2>
                    <p class="project-info__text">Address The Bay has a prime beachfront location on the best plot in
                        Emaar Beachfront, where there will be plenty of Michelin star restaurants around the complex.
                        The building will be surrounded by Grand Bleu Tower Interiors by Elie Saab, Palace Beach
                        Residence and Beach Mansion.</p>
                    <p class="project-info__text">Residents of Address The Bay will easily be able to reach the main
                        highway of the emirate of Dubai - Sheikh Zayed Road, by car, and will take about a 10-minute
                        drive. Neighbouring districts of the new residential and hotel complex include Palm Jumeirah,
                        Dubai Marina and Dubai Media City.</p>
                </div>
                <img class="project-info__image-2 lazy" data-src="/public/images/project-page-3.jpg" alt="">
            </div>
        </div>

        <div class="project-info-2 bg-second">
            <div class="project-info-2__content">
                <p class="project-info-2__text">Emaar Beachfront, where Address The Bay is located, was launched back in
                    2018 and is the number one
                    selling location in the emirate of Dubai. Upon its completion, the district will offer world-class
                    leisure, sports and wellness facilities, as well as a marina and two cruise terminals.</p>
                <p class="project-info-2__text">Branded residences in Address The Bay will be a profitable investment
                    with an ROI rate of 5%. The minimum
                    price for a 1-bedroom residence in similar projects in Emaar Beachfront constitutes about AED
                    110,000
                    per annum. By purchasing a property in the Emaar Address The Bay development, investors will be
                    eligible
                    to apply for a UAE Golden Visa, which requires a minimum property investment of AED 2,000,000 after
                    new
                    regulations. The benefits of this type of visa include a long residence and 100% business ownership
                    by
                    foreigners on the UAE’s mainland.</p>

                <a href="#!" class="btn btn--primary-outline project-info-2__btn">Find out more about Dubai areas</a>
            </div>
        </div>

        <div class="project-marks">
            <img class="project-marks__image lazy" data-src="/public/images/project-marks.jpg" alt="">
            <div class="project-marks__items">
                <p class="project-marks__item project-marks__item--large" style="top: 8.63%; right: 37%;">the palm <br>island</p>
                <p class="project-marks__item" style="top: 34.38%; right: 50.05%;">Beach <br>Vista</p>
                <p class="project-marks__item" style="top: 34.38%; right: 41.04%;">Beach <br>isle</p>
                <p class="project-marks__item" style="top: 34.38%; right: 23.59%;">grand bleu tower <br>interiors by elie saab</p>
                <p class="project-marks__item" style="top: 34.88%; right: 7%;">Address <br>residences - the bay</p>
                <p class="project-marks__item" style="top: 84.88%; right: 55.63%;">sunrise <br>bay</p>
                <p class="project-marks__item" style="top: 84.88%; right: 47.76%;">south <br>beach</p>
                <p class="project-marks__item" style="top: 84.88%; right: 40.89%;">marina <br>vista</p>
                <p class="project-marks__item" style="top: 84.88%; right: 32.29%;">Beach <br>mansion</p>
                <p class="project-marks__item" style="top: 84.88%; right: 19.27%;">palace beach <br>residence</p>
            </div>
        </div>

        <div class="card-schema" id="plan">
            <div class="container">
                <div class="card-schema__wrapper">
                    <div class="card-schema__section">
                        <p class="card-schema__price card-detail-price" data-aos="fade-right" data-aos-duration="1000">1-bedroom units</p>
                        <p class="card-detail-category card-schema__category" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">The Royal Residences</p>
                        <p class="card-detail-map card-schema__map" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600"><span class="icon-location"></span>Palm Jumeirah</p>

                        <div class="card-schema__item-icon" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1400"><span class="icon-sort-fill"></span><b>Total Area:</b> 758 sqft</div>

                        <a href="#!" class="card-schema__btn btn btn--primary"><span class="icon icon-download"></span>Get All Floor Plans</a>
                        <a href="#!" class="card-schema__btn btn btn--primary-outline"><span class="icon icon-download"></span>Download Brochure</a>

                        <div class="card-schema__navs" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="2000">
                            <button class="btn-icon btn-nav btn-nav--prev card-schema-prev"><span
                                        class="icon-arrow-prev"></span>
                            </button>
                            <button class="btn-icon btn-nav btn-nav--next card-schema-next"><span
                                        class="icon-arrow-next"></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-schema__section">
                        <div class="swiper slider-schema" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                            <div class="swiper-wrapper slider-schema__wrapper">
                                <div class="swiper-slide slider-schema__slide">
                                    <img class="slider-schema__image lazy" src="/public/images/lazy/schema.jpg" data-src="/public/images/schema.jpg" alt="">
                                </div>
                                <div class="swiper-slide slider-schema__slide">
                                    <img class="slider-schema__image lazy" src="/public/images/lazy/scroll-3.jpg" data-src="/public/images/scroll-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>