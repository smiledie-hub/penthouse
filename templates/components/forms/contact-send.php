<form class="form contact-send__form" action="">
    <label class="form__row contact-send__name">
        <input class="field-line" type="text" placeholder="Name: " name="name">
    </label>
    <label class="form__row contact-send__email">
        <input class="field-line" type="text" placeholder="E-mail: " name="email">
    </label>
    <div class="contact-send__phone">
        <label for="phone-form" class="form__label">Phone:</label>
        <div class="field-phone" data-default="+966">
            <div class="field-phone__current">
                <div class="field-phone__open">
                    <span class="field-phone__span">Country</span>

                    <img class="field-phone__flag" src="" alt="">
                    <p class="field-phone__number"></p>
                    <span class="field-phone__icon icon-arrow-down"></span>
                </div>
                <div class="field-phone__items"></div>
            </div>
            <input id="phone-form" class="field-phone__input" type="text" placeholder="Enter your phone number" name="phone">
        </div>
    </div>
    <label class="form__row contact-send__message">
        <input class="field-line" type="text" placeholder="Message: " name="message">
    </label>

    <div class="form__row contact-send__checkbox-el">
        <label class="checkbox contact-send__checkbox">
            <input type="checkbox" name="privacy" class="checkbox__input" checked>
            <span class="checkbox__box"><span class="icon-check"></span></span>
            <span class="checkbox__text">I agree to <a href="#">Terms</a> of use and <a
                        href="#">Privacy Policy</a></span>
        </label>
    </div>

    <div class="form__row contact-send__send-el">
        <button type="submit" class="btn btn--primary contact-send__send">Send</button>
    </div>
</form>