<section class="no-top no-bottom position-relative z-1000" style="background-size: cover; background-repeat: no-repeat;">
    <div class="v-center" style="background-size: cover; background-repeat: no-repeat;">
        <div class="swiper swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden"
            style="background-size: cover; background-repeat: no-repeat;">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" id="swiper-wrapper" aria-live="off"
                style="background-size: cover; background-repeat: no-repeat;">
                <!-- Slides -->
                @foreach ($games as $game)
                <div class="swiper-slide swiper-slide-next"
                style="width: 1915px; background-size: cover; background-repeat: no-repeat;" role="group"
                aria-label="" data-swiper-slide-index="">
                <div class="swiper-inner bgcustom" data-bgimage="url({{$game->gamePhoto}})"
                    style="background: url({{$game->gamePhoto}}) cover no-repeat;">
                    <div class="sw-caption" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="row gx-5 align-items-center"
                                style="background-size: cover; background-repeat: no-repeat;">
                                <div class="col-lg-8 mb-sm-30"
                                    style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="subtitle blink mb-4"
                                        style="background-size: cover; background-repeat: no-repeat;">Şuanda Kiralanabilir</div>
                                    <h1 class="slider-title text-uppercase mb-1">{{$game->gameName}}</h1>
                                </div>
                                <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                                    <p class="slider-text"></p>
                                    <div class="sw-price wow fadeInUp animated"
                                        style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                                        <div class="d-price"
                                            style="background-size: cover; background-repeat: no-repeat;">
                                            <span class="d-val">{{$game->gamePrice}}</span>
                                            <span class="d-cur">TRY</span>
                                            <span class="d-period">/Aylık</span>
                                        </div>
                                        <div class="d-starting"
                                            style="background-size: cover; background-repeat: no-repeat;">
                                            Başlayan Fiyatlarla...
                                        </div>
                                    </div>
                                    <div class="spacer-10"
                                        style="background-size: cover; background-repeat: no-repeat;"></div>
                                    <a class="btn-main mb10" href="{{$game->gameRentPath}}">HEMEN KİRALA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-overlay" style="background-size: cover; background-repeat: no-repeat;"></div>
                </div>
            </div>
                @endforeach

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"
                style="background-size: cover; background-repeat: no-repeat;"><span
                    class="swiper-pagination-current">4</span> / <span class="swiper-pagination-total">4</span></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper-69e2cfe1f59bca1c"
                style="background-size: cover; background-repeat: no-repeat;"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                aria-controls="swiper-wrapper-69e2cfe1f59bca1c"
                style="background-size: cover; background-repeat: no-repeat;"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar" style="background-size: cover; background-repeat: no-repeat;"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>
