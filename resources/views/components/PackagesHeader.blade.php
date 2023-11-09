<section id="subheader" class="jarallax">
    <div class="de-gradient-edge-bottom"></div>
    <img style="filter: brightness(0.55);" src="{{$game->gamePhoto}}" class="jarallax-img" alt="">
    <div class="container z-1000">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-2 d-lg-block d-none">
                <img src="{{$game->gameThumbnail}}" class="img-fluid wow fadeInUp" alt="">
            </div>
            <div class="col-lg-6">
                <div class="subtitle wow fadeInUp mb-3">Oyun Sunucusu</div>
                <h2 class="wow fadeInUp mb20" data-wow-delay=".2s">{{$game->gameName}}</h2>
                <div class="de-rating-ext wow fadeInUp" data-wow-delay=".4s">
                    <span class="d-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </span>
                    <span class="d-val">4.75</span>
                    based on <strong>4086</strong> reviews.
                </div>
            </div>      
        </div>
    </div>
</section>