<section class="v-center jarallax"
    style="position: relative; z-index: 0; background-size: cover; background-repeat: no-repeat;">
    <div class="de-gradient-edge-top" style="background-size: cover; background-repeat: no-repeat;"></div>
    <div class="de-gradient-edge-bottom" style="background-size: cover; background-repeat: no-repeat;"></div>

    <div class="container z-1000" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-lg-4 offset-lg-4" style="background-size: cover; background-repeat: no-repeat;">
                <div class="padding40 rounded-10 shadow-soft bg-dark-1"
                    style="background-size: cover; background-repeat: no-repeat;">
                    <div class="text-center" style="background-size: cover; background-repeat: no-repeat;">
                        <h4>Hesabına Giriş Yap!</h4>
                    </div>
                    <div class="spacer-10" style="background-size: cover; background-repeat: no-repeat;"></div>
                    <form id="form_register" class="form-border" method="POST" action="{{ route('loginUser')}}">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        @csrf
                        <div class="field-set" style="background-size: cover; background-repeat: no-repeat;">
                            <label>Eposta Adresiniz</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="field-set" style="background-size: cover; background-repeat: no-repeat;">
                            <label>Şifre</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="field-set" style="background-size: cover; background-repeat: no-repeat;">
                            <input type="checkbox" checked="" id="html" name="fav_language" value="HTML">
                            <label for="html"><span class="op-5">Beni Hatırla</span></label><br>
                        </div>
                        <div class="spacer-20" style="background-size: cover; background-repeat: no-repeat;"></div>
                        <div id="submit" style="background-size: cover; background-repeat: no-repeat;">
                            <input type="submit" id="send_message" value="GİRİŞ YAP"
                                class="btn-main btn-fullwidth rounded-3">
                        </div>
                    </form>
                    <div class="title-line" style="background-size: cover; background-repeat: no-repeat;">
                        veya</div>
                    <div class="row g-1" style="background-size: cover;background-repeat: no-repeat;justify-content: center;text-align: center;">
                        <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                            <a class="btn-sc btn-fullwidth mb10" href="/kayit"><i class="fa-solid fa-user-plus"></i> Kayıt Ol</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="jarallax-container-0"
        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%); background-size: cover; background-repeat: no-repeat;">
        <video src="{{asset('assets/bg.webm')}}" muted autoplay loop class="jarallax-img" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1915px; height: 603.391px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -63.1953px; transform: translate3d(0px, 63.1953px, 0px);">
    </div>
</section>
