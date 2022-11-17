export default function () {
    // Create cookie
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    // Delete cookie
    function deleteCookie(cname) {
        const d = new Date();
        d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=;" + expires + ";path=/";
    }

    // Read cookie
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    const cookieEl = document.querySelector('.cookies')

    if(cookieEl) {
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