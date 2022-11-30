<?php
function contactSendComponent($title, $img, $content = "", $text = "")
{ ?>

    <div class="contact-send bg-white">
        <div class="contact-send__wrapper">
            <div class="contact-send__section">
                <?php if($text): ?>
                    <h2 class="contact-send__title contact-send__title--mb-text"><?php echo $title; ?></h2>
                    <p class="contact-send__text"><?php echo $text; ?></p>
                <?php else: ?>
                    <h2 class="contact-send__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php include "templates/components/forms/contact-send.php"; ?>
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