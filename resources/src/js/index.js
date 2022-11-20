// FIXES
import "./fixes"
import "./spec"

import yall from "yall-js";
import {isDesktop} from "./helpers/isDevice";
import PreloaderComponent from "./components/preloader.component";
import BtnSelectsComponent from "./components/btn-selects.component";
import CookiesComponent from "./components/cookies.component";
import SellScrollComponent from "./components/sell-scroll.component";
import FieldPhoneComponent from "./components/field-phone.component";
import ChoiceComponent from "./components/choice.component";
import AreaComponent from "./components/area.component";
import MenuComponent from "./components/menu.component";
import ModalsComponent from "./components/modals.component";
import CardBannerComponent from "./components/card-banner.component";
import FrontResidenceComponent from "./components/front-residence.component";
import FrontPageComponent from "./components/front-page.component";
import SmothToElComponent from "./components/smoth-to-el.component";
import TabsComponent from "./components/tabs.component";
import CatalogComponent from "./components/catalog.component";
import MapComponent from "./components/map.component";

window.addEventListener("DOMContentLoaded", () => {

    yall({ // Lazy loader
        observeChanges: true
    });

    PreloaderComponent()
    MenuComponent()
    CookiesComponent()
    BtnSelectsComponent()
    ChoiceComponent()
    AreaComponent()
    FieldPhoneComponent()
    ModalsComponent()
    CardBannerComponent()
    FrontPageComponent()
    SmothToElComponent()
    TabsComponent()
    CatalogComponent()
    MapComponent()

    if (isDesktop) {
        SellScrollComponent()
        FrontResidenceComponent()
    }

    SmoothScroll({
        animationTime    : 1000,
        stepSize         : 65,
        accelerationDelta : 30,
        accelerationMax   : 2,
        keyboardSupport   : true,
        arrowScroll       : 50,
        pulseAlgorithm   : true,
        pulseScale       : 4,
        pulseNormalize   : 1,
        touchpadSupport   : true,
    })
})