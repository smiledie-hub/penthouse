<?php
function contactSendComponent($title, $img, $content = "")
{ ?>

    <div class="contact-send bg-white">
        <div class="contact-send__wrapper">
            <div class="contact-send__section">
                <h2 class="contact-send__title"><?php echo $title; ?></h2>
                <?php include_once "templates/components/forms/contact-send.php"; ?>
            </div>
            <div class="contact-send__section">
                <img class="contact-send__image" src="<?php echo $img; ?>" alt="">

                <?php if ($content): ?>
                    <div class="contact-send__content">
                        <?php echo $content; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php }