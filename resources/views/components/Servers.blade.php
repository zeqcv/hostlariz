<section class="jarallax" style="position: relative; z-index: 0; background-size: cover; background-repeat: no-repeat;">

    <div class="de-gradient-edge-top" style="background-size: cover; background-repeat: no-repeat;"></div>
    <div class="de-gradient-edge-bottom" style="background-size: cover; background-repeat: no-repeat;"></div>
    <div class="container z-1000" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                <div class="subtitle wow fadeInUp mb-3 animated"
                    style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                    En Çok Tercih Edilenler</div>
                <h2 class="wow fadeInUp mb20 animated" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Öne Çıkan Sunucular</h2>
            </div>
            <div class="col-lg-6 text-lg-end" style="background-size: cover; background-repeat: no-repeat;">
                <a class="btn-main mb-sm-30" href="/sunucu/oyun">Tüm Oyun Sunucuları</a>
            </div>
        </div>
        <div class="row g-4 sequence" style="background-size: cover; background-repeat: no-repeat;">
            @foreach ($games as $game)
            <div class="col-lg-3 col-md-6 gallery-item" style="background-size: cover; background-repeat: no-repeat;">
                <div class="de-item wow fadeInRight animated"
                    style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInRight; animation-delay: 0s;"
                    data-wow-delay="0s">
                    <div class="d-overlay" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="d-label" style="background-size: cover; background-repeat: no-repeat;">
                            20% İndirim
                        </div>
                        <div class="d-text" style="background-size: cover; background-repeat: no-repeat;">
                            <h4>{{$game->gameName}}</h4>
                            <p class="d-price"><span class="price">{{$game->gamePrice}} TL'den Başlayan fiyatlarla...</span></p>
                            <a class="btn-main btn-fullwidth" href="pricing-table-one.html">Sipariş Ver</a>
                        </div>
                    </div>
                    <img src="{{$game->gameThumbnail}}" class="img-fluid slideInUp" alt="" data-wow-delay="0s">
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div id="jarallax-container-1"
        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%); background-size: cover; background-repeat: no-repeat;">
        <img src="https://r4.wallpaperflare.com/wallpaper/726/464/46/video-game-4k-of-desktop-background-wallpaper-9659a6cbad4be7497919aee99dc01924.jpg" class="jarallax-img" alt=""
            style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1915px; height: 838.32px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -180.66px; transform: translate3d(0px, 131.254px, 0px);">
    </div>
</section>
<style>
    .img-fluid {
    max-width: 100%;
    height: auto;
    width: 100% !important;
}
</style>
