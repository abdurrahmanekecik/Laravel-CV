
<!DOCTYPE html>
<html class="no-js vlt-is--homepage vlt-is--footer-fixed" lang="en">

<head>
    <meta charset="utf-8">
    <title>Gilber - Homepage</title>
    <meta name="description" content="Personal CV/Resume HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--Favicon-->
    <link rel="icon" type="image/svg" href="{{ asset('assets/img/root/favicon.svg') }}">
    <!--Framework-->
    <link rel="stylesheet" href="{{ asset('assets/css/framework/bootstrap.min.css') }}">
    <!--Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/fonts/Gilroy/style.css') }}">
    <!--Icons-->
    <link rel="stylesheet" href="{{ asset('assets/fonts/LineIcons/Pro-Regular/font-css/LineIcons.css') }}">
    <!--Plugins-->
    <link rel="stylesheet" href="{{ asset('assets/css/vlt-plugins.min.css') }}">
    <!--Style-->
    <link rel="stylesheet" href="{{ asset('assets/css/vlt-main.min.css') }}">
    <!--Custom-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @yield("css")
</head>

<body class=" animsition">
<!--Header-->
<header class="vlt-header vlt-header--default">
    <div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky">
        <div class="vlt-navbar-background"></div>
        <div class="vlt-navbar-inner">
            <div class="vlt-navbar-inner--left">
                <!--Logo--><a class="vlt-navbar-logo" href="index.html"><img src="{{ asset('assets/img/root/logo.svg') }}" alt="Gilber"></a>
            </div>
            <div class="vlt-navbar-inner--center">
                <div class="container">
                    <nav class="vlt-default-menu__navigation">
                        <!--Navigation-->
                        <ul class="sf-menu">
                            <li data-menuanchor="Home"><a href="#Home">Home</a>
                            </li>
                            <li data-menuanchor="About"><a href="#About">About</a>
                            </li>
                            
                            <li data-menuanchor="Education"><a href="#Education">Education</a>
                            </li>
                            <li data-menuanchor="Designs"><a href="#Designs">Partners</a>
                            </li>
                            <li data-menuanchor="Blog"><a href="#Blog">Blog</a>
                            </li>
                            <li data-menuanchor="Contact"><a href="#Contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="vlt-navbar-inner--right">
                <div class="d-flex align-items-center">
                    <!--Contacts-->
                    <div class="vlt-navbar-contacts"><a href="tel:+72126742510">+7 (212) 674-25-10</a></div>
                    <!--Menu Burger--><a class="vlt-menu-burger js-offcanvas-menu-open" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" /></svg></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Offcanvas Menu-->
<div class="vlt-offcanvas-menu">
    <div class="vlt-offcanvas-menu__header">
        <!--Locales-->
        <div class="vlt-language-switcher"><a class="is-active" href="#">Eng</a><a href="#">Fra</a><a href="#">Ger</a></div>
        <!--Menu Burger--><a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                <defs />
                <path d="M18 6L6 18M6 6l12 12" /></svg></a>
    </div>
    <nav class="vlt-offcanvas-menu__navigation">
        <!--Navigation-->
        <ul class="sf-menu">
            <li data-menuanchor="Home"><a href="#Home">Home</a>
            </li>
            <li data-menuanchor="About"><a href="#About">About</a>
            </li>
            <li data-menuanchor="Education"><a href="#Education">Education</a>
            </li>
            <li data-menuanchor="Designs"><a href="#Designs">Designs</a>
            </li>
            <li data-menuanchor="Blog"><a href="#Blog">Blog</a>
            </li>
            <li data-menuanchor="Contact"><a href="#Contact">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="vlt-offcanvas-menu__footer">
        <!--Socials-->
        <div class="vlt-offcanvas-menu__socials"><a class="vlt-social-icon vlt-social-icon--style-1" href="#"><i class="lnir-facebook-filled"></i></a><a class="vlt-social-icon vlt-social-icon--style-1" href="#"><i class="lnir-twitter-original"></i></a><a class="vlt-social-icon vlt-social-icon--style-1" href="#"><i class="lnir-instagram"></i></a></div>
        <!--Copyright-->
        <div class="vlt-offcanvas-menu__copyright">
            <p>© 2020 Copyright.<br>All rights reserved.</p>
        </div>
    </div>
</div>
<!--Site Overlay-->
<div class="vlt-site-overlay"></div>
<!--Fixed socials-->
<div class="vlt-fixed-socials"><a class="vlt-social-icon vlt-social-icon--style-1" href="#"><i class="lnir-facebook-filled"></i></a><a class="vlt-social-icon vlt-social-icon--style-1" href="#"><i class="lnir-twitter-original"></i></a><a class="vlt-social-icon vlt-social-icon--style-1" href="#"><i class="lnir-instagram"></i></a></div>

@yield("content")








<!--Footer-->
<footer class="vlt-footer vlt-footer--default vlt-footer--fixed">
    <div class="vlt-footer-copyright">
        <p>© Gilber. 2020</p>
    </div>
    <div class="vlt-language-switcher"><a class="is-active" href="#">Eng</a><a href="#">Fra</a><a href="#">Ger</a></div>
</footer>
<!--Libs-->
<script src="{{ asset('assets/vendors/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/scripts/vlt-plugins.min.js') }}"></script>
<script src="{{ asset('assets/scripts/vlt-helpers.js') }}"></script>
<script src="{{ asset('assets/scripts/vlt-controllers.min.js') }}"></script>
@yield("js")
</body>

</html>
