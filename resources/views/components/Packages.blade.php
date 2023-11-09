<section class="no-top">
    <div class="container">
        <div class="row" style="background-size: cover;background-repeat: no-repeat;justify-content: center;">
            <div class="col-lg-12 text-center wow fadeInUp">
                <div class="switch-set">
                    <div>Aylık Plan</div>
                    <div><input id="sw-1" class="switch" type="checkbox"></div>
                    <div>Yıllık Plan</div>
                    <div class="spacer-20"></div>
                </div>
            </div>

            @foreach ($packages as $package)
                <div class="col-xl-3 col-md-6 mb-sm-30 wow fadeInRight"
                    style="background-size: cover;background-repeat: no-repeat;visibility: visible;animation-name: fadeInRight;margin-top: 20px;">
                    <div class="de_pricing-table type-2">
                        <div class="d-head">
                            <h3>{{ $package->gameServerSlot }} Oyuncu Slotu</h3>
                        </div>
                        <div class="d-price">
                            <h4 class="opt-1">{{ $package->monthlyPrice }} TL<span><small>/aylık</small></span></h4>
                            <h4 class="opt-2">{{ $package->yearlyPrice }} TL<span><small>/aylık</small></span></h4>
                            {{-- <p>Normally <s>$9.99</s></p> --}}
                        </div>
                        <div class="d-location">
                            <h4>Sunucu Lokasyonu</h4>
                            <select name='serverLocation' class="server_location" class="form-control">
                                <option value='option-1' data-src="{{ asset('images/flags/turkey.gif') }}">
                                    Bursa
                                </option>
                                <option value='option-2' data-src="{{ asset('images/flags/turkey.gif') }}">
                                    İstanbul
                                </option>
                                <option value='option-3' data-src="{{ asset('images/flags/turkey.gif') }}">
                                    Denizli
                                </option>
                                <option value='option-4' data-src="{{ asset('images/flags/netherlands.png') }}">
                                    Amsterdam
                                </option>
                                <option value='option-7' data-src="{{ asset('images/flags/usa.png') }}">
                                    Los Angeles
                                </option>
                            </select>
                        </div>
                        <div class="spacer-5"></div>
                        <div class="d-group">
                            <h4>Sistem Özellikleri</h4>
                            <ul class="d-list">
                                <li>{{ $package->gameServerCore }} Çekirdek</li>
                                <li>{{ $package->gameServerRam }} Ram</li>
                                <li>10GBps DDos Koruması</li>
                                <li>Özel Yönetim Paneli</li>
                            </ul>
                        </div>
                        <div class="spacer-5"></div>
                        <div class="d-group">
                            <h4>Genel Özellikler</h4>
                            <ul class="d-list">
                                <li>Super Hızlı Kurulum</li>
                                <li>Premium Donanım</li>
                                <li>DDos Koruması</li>
                                <li>24/7 Müşteri Desteği</li>
                            </ul>
                        </div>
                        <div class="d-action">
                            <a href="#" class="btn-main opt-1 w-100">Aylık Plan İle Satın Al</a>
                            <a href="#" class="btn-main opt-2 w-100">Yıllık Plan İle Satın Al</a>
                            <p>
                                Fiyatlar Otomatik Güncellenmektedir.
                                <br />
                                Fiyatlara KDV Dahil Değildir.
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
