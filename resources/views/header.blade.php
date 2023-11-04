<!DOCTYPE html>
<html class="no-js vlt-is--homepage vlt-is--footer-fixed" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $setting['name'] }} - Homepage</title>
    <meta name="description" content="Personal CV/Resume HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--Favicon-->

    <link rel="icon" type="image/svg" href="{{ asset("assets/img/root/favicon.svg") }}">
    <!--Framework-->
    <link rel="stylesheet" href="{{ asset("assets/css/framework/bootstrap.min.css") }}">
    <!--Fonts-->
    <link rel="stylesheet" href="{{ asset("assets/fonts/Gilroy/style.css")}}">
    <!--Icons-->
    <link rel="stylesheet" href="{{ asset("assets/fonts/LineIcons/Pro-Regular/font-css/LineIcons.css") }}">
    <!--Plugins-->
    <link rel="stylesheet" href="{{ asset("assets/css/vlt-plugins.min.css") }}">
    <!--Style-->
    <link rel="stylesheet" href="{{ asset("assets/css/vlt-main.min.css") }}">
    <!--Custom-->
    <link rel="stylesheet" href="{{ asset("assets/css/custom.css") }}">
</head>
<body class=" animsition">
<!--Header-->
<header class="vlt-header vlt-header--default">
    <div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky">
        <div class="vlt-navbar-background"></div>
        <div class="vlt-navbar-inner">
            <div class="vlt-navbar-inner--left">
                <!--Logo--><a class="vlt-navbar-logo" href="{{ route("home") }}"><img src="{{ $setting['logo'] }}" alt="Gilber"></a>
            </div>
            <div class="vlt-navbar-inner--center">
                <div class="container">
                    <nav class="vlt-default-menu__navigation">
                        <!--Navigation-->
                        <ul class="sf-menu">
                            <li data-menuanchor="Home"><a href="#Home">Anasayfa</a>
                            </li>
                            <li data-menuanchor="About"><a href="#About">Hakkımda</a>
                            </li>
                            <li data-menuanchor="Projects"><a href="#Projects">Projelerim</a>
                            </li>
                            <li data-menuanchor="Education"><a href="#Education">Eğitimim</a>
                            </li>
                            <li data-menuanchor="Blog"><a href="#Blog">Blog</a>
                            </li>
                            <li data-menuanchor="Contact"><a href="#Contact">İletişim</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="vlt-navbar-inner--right">
                <div class="d-flex align-items-center">
                    <!--Contacts-->
                    <div class="vlt-navbar-contacts"><a href="tel:{{ $contact['telephone'] }}">{{ $contact['telephone'] }}</a></div>
                    <!--Menu Burger--><a class="vlt-menu-burger js-offcanvas-menu-open" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Offcanvas Menu-->
<div class="vlt-offcanvas-menu">
    <div class="vlt-offcanvas-menu__header">
        <!--Menu Burger--><a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><defs/><path d="M18 6L6 18M6 6l12 12"/></svg></a>
    </div>
    <nav class="vlt-offcanvas-menu__navigation">
        <!--Navigation-->
        <ul class="sf-menu">
            <li data-menuanchor="Home"><a href="#Home">Anasayfa</a>
            </li>
            <li data-menuanchor="About"><a href="#About">Hakkımda</a>
            </li>
            <li data-menuanchor="Projects"><a href="#Projects">Projelerim</a>
            </li>
            <li data-menuanchor="Education"><a href="#Education">Eğitimim</a>
            </li>
            <li data-menuanchor="Blog"><a href="#Blog">Blog</a>
            </li>
            <li data-menuanchor="Contact"><a href="#Contact">İletişim</a>
            </li>
        </ul>
    </nav>
    <div class="vlt-offcanvas-menu__footer">
        <!--Socials-->
        <div class="vlt-offcanvas-menu__socials">
            <a class="vlt-social-icon vlt-social-icon--style-1" href="{{ $contact['facebook'] }}"><i class="lnir-facebook-filled"></i></a>
            <a class="vlt-social-icon vlt-social-icon--style-1" href="{{ $contact['twitter'] }}"><i class="lnir-twitter-original"></i></a>
            <a class="vlt-social-icon vlt-social-icon--style-1" href="{{ $contact['instagram'] }}"><i class="lnir-instagram"></i></a></div>
        <!--Copyright-->
        <div class="vlt-offcanvas-menu__copyright">
            <p>{{ $contact['copyright'] }}</p>
        </div>
    </div>
</div>
<!--Site Overlay-->
<div class="vlt-site-overlay"></div>
<!--Fixed socials-->
<div class="vlt-fixed-socials">
    <a class="vlt-social-icon vlt-social-icon--style-1" href="{{ $contact['facebook'] }}"><i class="lnir-facebook-filled"></i></a>
    <a class="vlt-social-icon vlt-social-icon--style-1" href="{{ $contact['twitter'] }}"><i class="lnir-twitter-original"></i></a>
    <a class="vlt-social-icon vlt-social-icon--style-1" href="{{ $contact['instagram'] }}"><i class="lnir-instagram"></i></a></div>
<!--Main-->
