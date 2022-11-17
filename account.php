<?php include_once "./templates/layout/start.layout.php"; ?>
    <main class="header-static account-page">
        <?php include_once "./templates/components/header.component.php"; ?>

        <img data-src="/public/images/about-bg.svg" alt="" class="account-page__background lazy">


        <div class="my-collections">
            <div class="container">
                <div class="my-collections__title-box">
                    <h2 class="account-page__title my-collections__title">Your collection</h2>
                    <a href="#!" class="btn btn--primary my-collections__sign">Sign out</a>
                    <p class="my-collections__text">Add more properties to your collection cliking on <span class="icon icon-heart"></span>
                        when you browse through our portfolio&</p>
                </div>

                <div class="my-collections__items">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        include "./templates/components/catalog-item.php";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="my-documents">
            <div class="container">
                <h2 class="account-page__title">Documents</h2>

                <div class="my-documents__items">
                    <?php for ($i = 1; $i <= 8; $i++): ?>
                        <a href="#!" class="my-documents-item">
                            <img class="my-documents-item__image" src="/public/images/document.svg" alt="">
                            <div class="my-documents-item__main">
                                <span class="my-documents-item__name">Document</span>
                                <span class="my-documents-item__type">PDF</span>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="my-properties">
           <div class="container">
               <h2 class="account-page__title">You might be interested in these properties</h2>

               <div class="my-properties__items">
                   <?php
                   for ($i = 1; $i <= 2; $i++) {
                       include "./templates/components/catalog-item.php";
                   }
                   ?>
               </div>
           </div>
        </div>
    </main>
<?php include_once "./templates/components/cookies.component.php"; ?>
<?php include_once "./templates/components/footer.component.php"; ?>
<?php include_once "./templates/layout/end.layout.php"; ?>