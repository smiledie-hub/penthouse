// FIXES
import "./fixes"
import "./spec"

import yall from "yall-js";
import {isDesktop, isMobile, isTable} from "./helpers/isDevice";
import PreloaderComponent from "./components/preloader.component";
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
import SliderProjectComponent from "./components/slider-project.component";
import SellScrollMobileComponent from "./components/sell-scroll-mobile.component";
import ScrollServicesComponent from "./components/scroll-services.component";
import AboutCompanyComponent from "./components/about-company.component";
import PromptComponent from "./components/prompt.component";
import ProjectSliderComponent from "./components/project-slider.component";

window.addEventListener("DOMContentLoaded", () => {

    yall({ // Lazy loader
        observeChanges: true
    });

    PreloaderComponent()
    MenuComponent()
    CookiesComponent()
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
    SliderProjectComponent()
    AboutCompanyComponent()
    PromptComponent()
    ProjectSliderComponent()

    ScrollServicesComponent()

    if (isDesktop) {
        SellScrollComponent()
        FrontResidenceComponent()
    }

    if(isTable || isMobile) {
        SellScrollMobileComponent()
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