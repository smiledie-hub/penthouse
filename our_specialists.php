<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="our-specialists-page header-static">
        <div class="bg-second">
            <?php HeaderComponent("header--dark"); ?>

            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Our specialists</span>
                </div>
            </div>

            <div class="our-specialists-page__header">
                <div class="container">
                    <h1 class="our-specialists-page__title">
                        <span class="our-specialists-page__sg fn-sg">Our</span>
                        <span class="our-specialists-page__end">specialists</span>
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="our-specialists-page__items">
                <?php
                for ($i = 1; $i <= 15; $i++) {
                    include "templates/components/specialist.component.php";
                }
                ?>
            </div>
        </div>

        <?php contactSendComponent("If you need one of our services send us a request and we will quickly contact you back", "/public/images/contact-2.jpg", '<div class="contact-send__item contact-send-item">
                    <p class="contact-send-item__title">Contact us</p>
                    <a href="tel:+971 58 648 8888" class="contact-send-item__text">+971 58 648 8888</a>
                    <a href="mailto:info@mpd.a" class="contact-send-item__text">info@mpd.ae</a>
                </div>

                <div class="contact-send__item contact-send-item">
                    <p class="contact-send-item__title">Office</p>
                    <p class="contact-send-item__address">1913, Al Manara Business Bay, Dubai, UAE
                        from 9-00 to 18-00, Sun-Thu</p>
                </div>'); ?>
    </main>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>