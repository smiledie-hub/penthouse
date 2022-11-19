<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="agent-page header-static header-static--white breadcrumbs-white">
        <div class="bg-dark agent-page__bg">
            <?php HeaderComponent(""); ?>
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span class="icon-arrow-next"></span>
                    <span>Our specialists</span>
                </div>
            </div>

            <div class="agent-page__header">
                <div class="container">
                    <div class="agent-page__wrapper">
                        <div class="agent-page__sect">
                            <h1 class="agent-page__title">Oybek Shamsiddinov</h1>
                            <p class="agent-page__spec">Senior Manager</p>
                            <div class="agent-page__items">
                                <div class="agent-page__item">
                                    <p>Experience:</p>
                                    <p>15 years</p>
                                </div>
                                <div class="agent-page__item">
                                    <p>Specialized in:</p>
                                    <p>Luxury property, Sales</p>
                                </div>
                                <div class="agent-page__item">
                                    <p>Languages:</p>
                                    <p>En, Fr, Rus</p>
                                </div>
                            </div>
                        </div>
                        <div class="agent-page__sect">
                            <img class="agent-page__image" src="/public/images/agent-page.jpg" alt="">

                            <div class="agent-page__content">
                                <p class="fn-sg agent-page__sg">Oybek</p>
                            </div>
                        </div>
                        <div class="agent-page__sect">
                            <p class="agent-page__title">Contact</p>
                            <div class="agent-page__socials">
                                <a href="#" class="agent-page__social">
                                    <span class="btn-icon btn-icon--orange"><span
                                                class="icon-whatsapp-thin"></span></span>
                                    Whatsapp
                                </a>
                                <a href="#" class="agent-page__social">
                                    <span class="btn-icon btn-icon--orange"><span class="icon-phone"></span></span>
                                    +971 58 648 8888
                                </a>
                                <a href="#" class="agent-page__social">
                                    <span class="btn-icon btn-icon--orange"><span class="icon-mail"></span></span>
                                    example@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="agent-page__desc">
                        <p>Oybek Shamsiddinov comes from a real estate background in the United Kingdom, where
                            he has had a successful career in sales. </p>
                        <p>Transitioning to the Dubai market, he is well-positioned to provide advisory on
                            single-family homes (villas and townhouses) across Dubai’s finest residential
                            communities. </p>
                        <p>Having studied History and Economics at university, he has a strong interest in
                            global affairs and always aims to keep his finger on the pulse of the market. He is
                            also very adept at working in a multicultural environment, and loves to meet people
                            from all corners of the world. </p>
                        <p>A people person at his core, Zain puts his heart and soul into his work and delivers
                            nothing less than five-star service, exceeding the needs of his clients at all
                            times. </p>
                        <p>Aside from socializing and building long standing relationships on both a personal
                            and professional level, Zain loves to spend time with family and has a love of
                            football (he’s a Manchester United fan) </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="agent-page__listing listings">
            <div class="listings__item">
                <h2 class="listings__title">Oybek's Listing:</h2>
            </div>
            <div class="listings__item">
                <div class="listings__items">
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        include "templates/components/listing.component.php";
                    }
                    ?>
                </div>
                <a href="#" class="listings__more btn btn--primary">Show more</a>
            </div>
        </div>

        <?php contactSendComponent("If you need one of our services send us a request and we will quickly contact you back", "/public/images/contact-2.jpg", '<div class="contact-send-profile">
                    <img class="contact-send-profile__image" src="/public/images/card-profile.jpg" alt="">
                    <p class="contact-send-profile__text">Contact<br>Oybek Shamsiddinov</p>
                </div>

                <div class="contact-send__socials">
                    <a href="#" class="contact-send__social">
                        <span class="btn-icon btn-icon--white"><span class="icon-whatsapp-thin"></span></span>
                        Whatsapp
                    </a>
                    <a href="#" class="contact-send__social">
                        <span class="btn-icon btn-icon--white"><span class="icon-phone"></span></span>
                        +971 58 648 8888
                    </a>
                    <a href="#" class="contact-send__social">
                        <span class="btn-icon btn-icon--white"><span class="icon-mail"></span></span>
                        example@gmail.com
                    </a>
                </div>'); ?>
    </main>
<?php include_once "./templates/layout/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>