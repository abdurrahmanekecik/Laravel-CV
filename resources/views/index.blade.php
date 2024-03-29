

@include("header")
<main class="vlt-main">
    <!--Fullpage Slider-->
    <div class="vlt-fullpage-slider" data-loop-top="" data-loop-bottom="" data-speed="450">
        <!--Home-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Home">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Ken Burn Effect-->
                    <div class="vlt-section__ken-burn-background has-mobile-image">
                        <img src="assets/img/home.jpg" alt=""><img src="assets/img/home-mobile.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="vlt-gap-160"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                    <!--Video button-->
                                    <div class="vlt-video-button"><a href="https://vimeo.com/367945766" data-fancybox data-small-btn="true" rel="nofollow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 27"><defs/><path fill="currentColor" d="M23.7471 13.2802L.876191 26.4847.876192.0757026 23.7471 13.2802z"/></svg></a></div>
                                </div>
                                <div class="vlt-gap-100"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;"><span class="vlt-display-1 has-white-color">{{ $home['title_1'] }}</span>
                                </div>
                                <div class="vlt-gap-15"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                    <h1 class="vlt-large-heading">{{ $setting->name }}<span class="has-accent-color">.</span></h1>
                                </div>
                                <div class="vlt-gap-15"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">
                                    <p>{{ $home['description'] }}</p>
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
                                    <div class="vlt-experience-block"><span class="vlt-experience-block__number">{{ $about['experience_years'] }}<span class="has-accent-color">.</span></span>
                                        <h5 class="vlt-experience-block__title">Years<br>Experience<br>Working</h5>
                                    </div>
                                </div>
                                <div class="vlt-gap-100--lg"></div>
                            </div>
                            <div class="col-xl-6 col-md-8">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                                    <h3>{{ $about['experience_heading'] }}</h3>
                                </div>
                                <div class="vlt-gap-45"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                    <p>{{ $about['experience_description'] }}</p>
                                </div>



                                @foreach(json_decode($about['skills']) as $skill)


                                <div class="vlt-gap-70"></div>
                                <!--Animated Block-->
                                <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">
                                    <!--Progress Bar-->
                                    <div class="vlt-progress-bar" data-final-value="{{ $skill->count }}" data-animation-speed="1000">
                                        <h5 class="vlt-progress-bar__title">{{ $skill->heading }}<span class="counter">0</span>
                                        </h5>
                                        <div class="vlt-progress-bar__bar"><span></span></div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Projects-->


        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Projects">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Projects-->




                    <div class="vlt-section__projects-background"><img class="is-active" src="assets/img/project-01.jpg" alt="" loading="lazy"><img src="assets/img/project-02.jpg" alt="" loading="lazy"><img src="assets/img/project-03.jpg" alt="" loading="lazy"></div>
                    <div class="container">
                        <div class="vlt-gap-100"></div>
                        <!--Animated Block-->
                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                            <!--Content slider-->
                            <div class="vlt-content-slider " data-navigation-anchor=".vlt-projects-anchor" data-effect="fade" data-gap="" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach($projects as $project)
                                        <div class="swiper-slide">
                                            <!--Product-->
                                            <article class="vlt-project">
                                                <h3 class="vlt-project-title">{{ $project->heading }}<span class="has-accent-color">.</span></h3>
                                                <div class="vlt-project-excerpt">
                                                    <p>{{ $project->summary }}</p>
                                                </div>
                                                <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md" href="{{ $project->slug_url }}" target="_self">Projeyi Gör</a>
                                            </article>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="vlt-gap-150"></div>
                            <!--Slider controls-->
                            <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-projects-anchor">
                                <div class="vlt-swiper-pagination"></div>
                                <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45"><defs/><path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd"/></svg></div>
                                <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45"><defs/><path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor"/></svg></div>
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
                                <h3>Eğitimim</h3>
                                <div class="vlt-gap-30--sm"></div>
                                <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md" href="#" target="_self">Cv'yi İncele</a>
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
                                            @foreach($experiences as $experience)

                                            <div class="vlt-timeline-item">
                                                <div class="row">
                                                    <div class="col-xl-4"><img src="assets/img/root/behance.png" alt="Behance" loading="lazy">
                                                    </div>
                                                    <div class="col-xl-4"><span class="vlt-timeline-item__date">{{ $experience->date }}</span>
                                                        <h5 class="vlt-timeline-item__title">{{ $experience->company }}</h5>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <p class="vlt-timeline-item__text">
                                                            {{ $experience->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vlt-gap-75"></div>
                            <!--Slider controls-->
                            <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-education-anchor">
                                <div class="vlt-swiper-pagination"></div>
                                <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45"><defs/><path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd"/></svg></div>
                                <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45"><defs/><path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor"/></svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Testimonials-->
        <!--Section-->


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
                                        <div class="vlt-post-media"><img src="assets/img/blog-01.jpg" alt="" loading="lazy"></div>
                                        <div class="vlt-post-content">
                                            <header class="vlt-post-header"><span class="vlt-post-date">December 27, 2020</span>
                                                <h3 class="vlt-post-title"><a href="single-post.html">Scent in the Voyages</a></h3>
                                            </header>
                                            <div class="vlt-post-excerpt">
                                                <p>Let years seasons given two fowl above is itself shall third night female seasons you’re whales, unto had fowl Herb. Moving so. Said be fruitful first lights creeping deep void, lesser.
                                                </p>
                                            </div>
                                            <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                    Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8"><defs/><path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor"/></svg></a></footer>
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
                                        <div class="vlt-post-media"><img src="assets/img/blog-02.jpg" alt="" loading="lazy"></div>
                                        <div class="vlt-post-content">
                                            <header class="vlt-post-header"><span class="vlt-post-date">December 27, 2020</span>
                                                <h3 class="vlt-post-title"><a href="single-post.html">The Stone of the Flames</a></h3>
                                            </header>
                                            <div class="vlt-post-excerpt">
                                                <p>Let years seasons given two fowl above is itself shall third night female seasons you’re whales, unto had fowl Herb. Moving so. Said be fruitful first lights creeping deep void, lesser.
                                                </p>
                                            </div>
                                            <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                    Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8"><defs/><path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor"/></svg></a></footer>
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
                                        <div class="vlt-post-media"><img src="assets/img/blog-03.jpg" alt="" loading="lazy"></div>
                                        <div class="vlt-post-content">
                                            <header class="vlt-post-header"><span class="vlt-post-date">December 27, 2020</span>
                                                <h3 class="vlt-post-title"><a href="single-post.html">Secrets of the Serpents</a></h3>
                                            </header>
                                            <div class="vlt-post-excerpt">
                                                <p>Let years seasons given two fowl above is itself shall third night female seasons you’re whales, unto had fowl Herb. Moving so. Said be fruitful first lights creeping deep void, lesser.
                                                </p>
                                            </div>
                                            <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                    Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8"><defs/><path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor"/></svg></a></footer>
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
                    <div class="vlt-section__ken-burn-background"><img src="assets/img/contact.jpg" alt=""></div>
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

@include("footer")
