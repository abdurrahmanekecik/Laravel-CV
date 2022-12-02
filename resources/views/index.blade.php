@extends('app')
@section('content')

<!--Main-->
<main class="vlt-main">
    <!--Fullpage Slider-->
    <div class="vlt-fullpage-slider" data-loop-top="" data-loop-bottom="" data-speed="450">
        <!--Home-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Home">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Ken Burn Effect-->
                    <div class="vlt-section__ken-burn-background has-mobile-image"><img src="{{ asset('assets/img/home.jpg')}} alt=""><img src="{{ asset('assets/img/home-mobile.jpg')}}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="vlt-gap-160"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                    <!--Video button-->
                                    <div class="vlt-video-button"><a href="https://vimeo.com/367945766" data-fancybox data-small-btn="true" rel="nofollow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 27">
                                                <defs />
                                                <path fill="currentColor" d="M23.7471 13.2802L.876191 26.4847.876192.0757026 23.7471 13.2802z" /></svg></a></div>
                                </div>
                                <div class="vlt-gap-100"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;"><span class="vlt-display-1 has-white-color">Product Designer</span>
                                </div>
                                <div class="vlt-gap-15"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                    <h1 class="vlt-large-heading">Gilber<span class="has-accent-color">.</span></h1>
                                </div>
                                <div class="vlt-gap-15"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">
                                    <p>Working with client and community, we deliver masterplans that create vibrant new places and spaces, attract people, and encourage.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="About">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                    <div class="vlt-experience-block"><span class="vlt-experience-block__number">9<span class="has-accent-color">.</span></span>
                                        <h5 class="vlt-experience-block__title">Years<br>Experience<br>Working</h5>
                                    </div>
                                </div>
                                <div class="vlt-gap-100--lg"></div>
                            </div>
                            <div class="col-xl-6 col-md-8">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                                    <h3>Great Experience</h3>
                                </div>
                                <div class="vlt-gap-45"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                    <p>Fill appear won't may make moveth signs. Fourth. Good own. Green you're moveth us, lesser.</p>
                                </div>
                                <div class="vlt-gap-70"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">
                                    <!--Progress Bar-->
                                    <div class="vlt-progress-bar" data-final-value="70" data-animation-speed="1000">
                                        <h5 class="vlt-progress-bar__title">Web design<span class="counter">0</span>
                                        </h5>
                                        <div class="vlt-progress-bar__bar"><span></span></div>
                                    </div>
                                </div>
                                <div class="vlt-gap-70"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.4s; animation-duration:700ms;">
                                    <!--Progress Bar-->
                                    <div class="vlt-progress-bar" data-final-value="85" data-animation-speed="1000">
                                        <h5 class="vlt-progress-bar__title">Figma<span class="counter">0</span>
                                        </h5>
                                        <div class="vlt-progress-bar__bar"><span></span></div>
                                    </div>
                                </div>
                                <div class="vlt-gap-70"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.5s; animation-duration:700ms;">
                                    <!--Progress Bar-->
                                    <div class="vlt-progress-bar" data-final-value="90" data-animation-speed="1000">
                                        <h5 class="vlt-progress-bar__title">WordPress<span class="counter">0</span>
                                        </h5>
                                        <div class="vlt-progress-bar__bar"><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Education-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Education">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <div class="container">
                        <div class="vlt-gap-70"></div>
                        <!--Animated Block-->
                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                            <div class="d-block d-md-flex align-items-center justify-content-between">
                                <h3>Education</h3>
                                <div class="vlt-gap-30--sm"></div>
                                <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md" href="#" target="_self">Download Resume</a>
                            </div>
                        </div>
                        <div class="vlt-gap-50"></div>
                        <!--Animated Block-->
                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                            <!--Content slider-->
                            <div class="vlt-content-slider " data-navigation-anchor=".vlt-education-anchor" data-effect="" data-gap="120" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/behance.png')}}" alt="Behance" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2019 - 2020</span>
                                                        <h5 class="vlt-timeline-item__title">Behance</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Which firmament dominion first rule and tree. The seas he i were cattle Under living. It may beast every forth place.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/envato.png')}}" alt="Envato" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2017 - 2018</span>
                                                        <h5 class="vlt-timeline-item__title">Envato</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Rule bearing whales. Created gathering blessed, sixth likeness male. Over were which you'll so be make moveth made saw above.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/twitter.png')}}" alt="Twitter" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2015 - 2018</span>
                                                        <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Firmament itself rule their evening, which moved very night so great them cattle bearing and gathered forth had whose bearing.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/behance.png')}}" alt="Behance" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2019 - 2020</span>
                                                        <h5 class="vlt-timeline-item__title">Behance</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Which firmament dominion first rule and tree. The seas he i were cattle Under living. It may beast every forth place.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/envato.png')}}" alt="Envato" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2017 - 2018</span>
                                                        <h5 class="vlt-timeline-item__title">Envato</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Rule bearing whales. Created gathering blessed, sixth likeness male. Over were which you'll so be make moveth made saw above.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/twitter.png')}}" alt="Twitter" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2015 - 2018</span>
                                                        <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Firmament itself rule their evening, which moved very night so great them cattle bearing and gathered forth had whose bearing.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/behance.png')}}" alt="Behance" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2019 - 2020</span>
                                                        <h5 class="vlt-timeline-item__title">Behance</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Which firmament dominion first rule and tree. The seas he i were cattle Under living. It may beast every forth place.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/envato.png')}}" alt="Envato" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2017 - 2018</span>
                                                        <h5 class="vlt-timeline-item__title">Envato</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Rule bearing whales. Created gathering blessed, sixth likeness male. Over were which you'll so be make moveth made saw above.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Timeline Item-->
                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="{{ asset('assets/img/root/twitter.png')}}" alt="Twitter" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">2015 - 2018</span>
                                                        <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">Firmament itself rule their evening, which moved very night so great them cattle bearing and gathered forth had whose bearing.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vlt-gap-75"></div>
                            <!--Slider controls-->
                            <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-education-anchor">
                                <div class="vlt-swiper-pagination"></div>
                                <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45">
                                        <defs />
                                        <path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd" /></svg></div>
                                <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45">
                                        <defs />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor" /></svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Designs-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Designs">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <div class="container">
                        <!--Animated Block-->
                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                            <h3>Designs</h3>
                        </div>
                        <div class="vlt-gap-100"></div>
                        <!--Animated Block-->
                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                            <ul class="vlt-partners">
                                <li><img src="{{ asset('assets/img/root/logo-01.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-02.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-03.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-04.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-05.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-06.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-07.png')}}" alt="" loading="lazy"></li>
                                <li><img src="{{ asset('assets/img/root/logo-08.png')}}" alt="" loading="lazy"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Blog-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Blog">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <div class="container">
                        <!--Animated Block-->
                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                            <h3>Recent news</h3>
                        </div>
                        <div class="vlt-gap-100"></div>
                        <div class="row">
                            <div class="col-xl-4">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                                    <!--Blog Item-->
                                    <article class="vlt-post vlt-post--masonry">
                                        <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                        <div class="vlt-post-media"><img src="{{ asset('assets/img/blog-01.jpg')}}" alt="" loading="lazy"></div>
                                        <div class="vlt-post-content">
                                            <header class="vlt-post-header"><span class="vlt-post-date">December 27, 2020</span>
                                                <h3 class="vlt-post-title"><a href="single-post.html">Scent in the Voyages</a></h3>
                                            </header>
                                            <div class="vlt-post-excerpt">
                                                <p>Let years seasons given two fowl above is itself shall third night female seasons you’re whales, unto had fowl Herb. Moving so. Said be fruitful first lights creeping deep void, lesser.
                                                </p>
                                            </div>
                                            <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                    Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                        <defs />
                                                        <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" /></svg></a></footer>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="vlt-gap-30--lg"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                    <!--Blog Item-->
                                    <article class="vlt-post vlt-post--masonry">
                                        <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                        <div class="vlt-post-media"><img src="{{ ('assets/img/blog-02.jpg') }}" alt="" loading="lazy"></div>
                                        <div class="vlt-post-content">
                                            <header class="vlt-post-header"><span class="vlt-post-date">December 27, 2020</span>
                                                <h3 class="vlt-post-title"><a href="single-post.html">The Stone of the Flames</a></h3>
                                            </header>
                                            <div class="vlt-post-excerpt">
                                                <p>Let years seasons given two fowl above is itself shall third night female seasons you’re whales, unto had fowl Herb. Moving so. Said be fruitful first lights creeping deep void, lesser.
                                                </p>
                                            </div>
                                            <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                    Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                        <defs />
                                                        <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" /></svg></a></footer>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="vlt-gap-30--lg"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">
                                    <!--Blog Item-->
                                    <article class="vlt-post vlt-post--masonry">
                                        <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                        <div class="vlt-post-media"><img src="{{ asset('assets/img/blog-03.jpg')}}" alt="" loading="lazy"></div>
                                        <div class="vlt-post-content">
                                            <header class="vlt-post-header"><span class="vlt-post-date">December 27, 2020</span>
                                                <h3 class="vlt-post-title"><a href="single-post.html">Secrets of the Serpents</a></h3>
                                            </header>
                                            <div class="vlt-post-excerpt">
                                                <p>Let years seasons given two fowl above is itself shall third night female seasons you’re whales, unto had fowl Herb. Moving so. Said be fruitful first lights creeping deep void, lesser.
                                                </p>
                                            </div>
                                            <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                    Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                        <defs />
                                                        <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" /></svg></a></footer>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Contact">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Ken Burn Effect-->
                    <div class="vlt-section__ken-burn-background"><img src="{{ asset('assets/img/contact.jpg')}}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                    <h3>Contact</h3>
                                    <div class="vlt-gap-30"></div>
                                    <p>You'll called for yielding male, so lights Stars abundantly, is their.</p>
                                    <div class="vlt-gap-40"></div>
                                    <address>27 Queen St, New York USA</address>
                                    <p><a class="tel" href="tel:+72126742510">+7 (212) 674-25-10</a></p>
                                    <p><a class="email" href="mailto:gilber.design@gmail.com">gilber.design@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 offset-xl-2">
                                <div class="vlt-gap-70--lg"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                                    <h4>Let's grab a coffee and jump on conversation <span class="has-accent-color">chat with me.</span></h4>
                                    <div class="vlt-gap-20"></div>
                                    <form class="vlt-contact-form" novalidate="novalidate">
                                        <div class="vlt-form-group">
                                            <input type="text" id="name" name="name" required="required" placeholder="Your Name">
                                        </div>
                                        <div class="vlt-form-group">
                                            <input type="email" id="email" name="email" required="required" placeholder="Your Email">
                                        </div>
                                        <div class="vlt-form-group">
                                            <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="message success">Your message is successfully sent...</div>
                                        <div class="message danger">Sorry something went wrong!</div>
                                        <!--Button-->
                                        <button class="vlt-btn vlt-btn--primary vlt-btn--md">Contact Me</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Progress Bar-->
        <div class="vlt-fullpage-slider-progress-bar"><span></span></div>
    </div>
</main>

@endsection('content')
@section('js')
@endsection
@section('css')
@endsection
