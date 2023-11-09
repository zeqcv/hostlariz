<div class="d-flex flex-column flex-shrink-0 bg-dark" style="background-size: cover;background-repeat: no-repeat;width: 80px;">
    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip"
        data-bs-placement="right" data-bs-original-title="Hostlarız">
        <img width="100%" src="{{ asset('images/logo.png') }}" alt="">
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
            <a href="/musteri" class="nav-link active py-3 text-light " aria-current="page" title=""
                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Anasayfa">
                <i class="fa fa-home"></i>
            </a>
        </li>
        <li>
            <a href="/musteri/sunucu" class="nav-link py-3 text-light " title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Sunucularım">
                <i class="fa-solid fa-server"></i>
            </a>
        </li>
        <li>
            <a href="/musteri/destek" class="nav-link py-3 text-light " title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Destek">
                <i class="fa-solid fa-headset"></i>
            </a>
        </li>
        <li>
            <a href="/musteri/kredi" class="nav-link py-3 text-light " title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Bakiye Ekle">
                <i class="fa-solid fa-credit-card"></i>
            </a>
        </li>
        <hr style="margin: 5px;" />
        <li>
            <a href="/musteri/sunucu/oyun" class="nav-link py-3 text-light " title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Oyun Sunucusu Kirala">
                <i class="fa-solid fa-gamepad"></i>
            </a>
        </li>
        <li>
            <a href="/musteri/sunucu/sanal" class="nav-link py-3 text-light " title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Sanal Sunucu Kirala">
                <i class="fa-solid fa-cloud"></i>
            </a>
        </li>
        <li>
            <a href="/musteri/sunucu/fiziksel" class="nav-link py-3 text-light" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Fiziksel Sunucu Kirala">
                <i class="fa-solid fa-server"></i>
            </a>
        </li>
    </ul>
    <div class="dropdown border-top">
        <a href="#" class="d-flex align-items-center p-3 text-decoration-none border-0" id="dropdownUser3"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
            <li><a class="dropdown-item text-dark" href="/musteri/profil/ayarlar">Ayarlar</a></li>
            <li><a class="dropdown-item text-dark" href="/musteri/profil">Profil</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-dark" href="/cikis">Çıkış Yap</a></li>
        </ul>
    </div>
</div>
<style>
    .nav-link {
        font-size: large;
    }
</style>
