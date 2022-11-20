import {deleteCookie, getCookie, setCookie} from "../helpers/cookies";

export default function CookiesComponent() {
    const cookieEl = document.querySelector('.cookies')

    if (cookieEl) {
        const cookie = getCookie('user_cookie_consent');

        if (cookie) {
            cookieEl.remove()
        } else {
            cookieEl.classList.add('cookies--visible')

            const cookieAcceptEl = document.querySelector('.cookies__accept')
            cookieAcceptEl && cookieAcceptEl.addEventListener('click', acceptCookieConsent)
        }

        function acceptCookieConsent(e) {
            e.preventDefault()

            deleteCookie('user_cookie_consent')
            setCookie('user_cookie_consent', 1, 30)
            cookieEl.remove()
        }
    }
}