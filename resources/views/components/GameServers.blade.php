<section class="jarallax" style="position: relative; z-index: 0; background-size: cover; background-repeat: no-repeat;">

    <div class="de-gradient-edge-top" style="background-size: cover; background-repeat: no-repeat;"></div>
    <div class="de-gradient-edge-bottom" style="background-size: cover; background-repeat: no-repeat;"></div>
    <div class="container z-1000" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                <div class="subtitle wow fadeInUp mb-3 animated"
                    style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                    En Çok Tercih Edilenler</div>
            </div>
            <div class="col-lg-5" style="background-size: cover; background-repeat: no-repeat;">
                <h2 class="wow fadeInUp animated" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Tüm Oyun Sunucuları</h2>
                <div class="spacer-20" style="background-size: cover; background-repeat: no-repeat;"></div>
            </div>
            <div class="col-lg-7" style="background-size: cover; background-repeat: no-repeat;">
                <ul id="filters" class="float-end float-sm-start wow fadeInUp animated" data-wow-delay="0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                    <li><a href="#" data-filter="*" class="selected">Tüm Oyunlar</a></li>
                    <li><a href="#" data-filter=".popular">Popüler</a></li>
                    <li><a href="#" data-filter=".fps">FPS</a></li>
                    <li><a href="#" data-filter=".survival">Hayatta Kalma</a></li>
                    <li><a href="#" data-filter=".sandbox">Açık Dünya</a></li>
                </ul>
            </div>
        </div>

        <div id="gallery" class="row g-4"
            style="background-size: cover; background-repeat: no-repeat; position: relative; height: 850.656px;">
            @foreach ($games as $game)
            <div class="col-lg-3 col-md-6 item {{$game->gameType}}"
            style="background-size: cover; background-repeat: no-repeat; position: absolute; left: 0px; top: 0px;">
            <div class="de-item" style="background-size: cover; background-repeat: no-repeat;">
                <div class="d-overlay" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="d-label" style="background-size: cover; background-repeat: no-repeat;">
                        20% İNDİRİM
                    </div>
                    <div class="d-text" style="background-size: cover; background-repeat: no-repeat;">
                        <h4>{{$game->gameName}}</h4>
                        <p class="d-price">Starting at <span class="price">{{$game->gamePrice}} TL</span></p>
                        <a class="btn-main btn-fullwidth" href="/sunucu/oyun/{{$game->gameRentPath}}/kirala">Hemen Şipariş Ver</a>
                    </div>
                </div>
                <img src="{{$game->gameThumbnail}}" class="img-fluid" alt="">
            </div>
        </div>
            @endforeach

        </div>
    </div>
    <div id="jarallax-container-0"
        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%); background-size: cover; background-repeat: no-repeat;">
        <img src="https://r4.wallpaperflare.com/wallpaper/726/464/46/video-game-4k-of-desktop-background-wallpaper-9659a6cbad4be7497919aee99dc01924.jpg" class="jarallax-img" alt=""
            style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1915px; height: 840.812px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -181.906px; transform: translate3d(0px, 782.906px, 0px);">
    </div>
</section>
<style>
    .img-fluid {
    max-width: 100%;
    height: auto;
    width: 100% !important;
}
</style>
