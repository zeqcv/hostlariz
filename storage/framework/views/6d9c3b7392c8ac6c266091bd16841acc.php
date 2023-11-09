<header class="transparent clone">
    <div class="container" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-md-12" style="background-size: cover; background-repeat: no-repeat;">
                <div class="de-flex sm-pt10" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="de-flex-col" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="de-flex-col" style="background-size: cover; background-repeat: no-repeat;">
                            <!-- logo begin -->
                            <div id="logo" style="background-size: cover; background-repeat: no-repeat;">
                                <a href="/">
                                    <img class="logo-main" src="<?php echo e(asset('images/logo.png')); ?>" alt=""
                                        style="width: 60px;">
                                    
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid"
                        style="background-size: cover; background-repeat: no-repeat;">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="/">Anasayfa</a></li>
                            <li class="menu-item-has-children has-child">
                                <a class="menu-item" href="/sunucu/oyun">Oyun Sunucuları</a><span></span>
                                <ul>
                                    <li><a class="menu-item" href="/sunucu/oyun">Tüm Oyunlar</a></li>
                                    <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="menu-item" href="/sunucu/oyun/<?php echo e($game->gameRentPath); ?>">
                                        <img width="10%" src="<?php echo e($game->gameLogo); ?>">  <?php echo e($game->gameName); ?>

                                    </a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-child">
                                <a class="menu-item" href="/sunucu/sanal">Sanal Sunucular</a><span></span>
                                <ul>
                                    <li><a class="menu-item" href="/sunucu/vps">VPS Sunucular</a></li>
                                    <li><a class="menu-item" href="/sunucu/vds/eko">Eko VDS Sunucular</a></li>
                                    <li><a class="menu-item" href="/sunucu/vds/ext">Extreme VDS Sunucular</a></li>
                                    <li><a class="menu-item" href="/sunucu/bot">Discord Bot Sunucusu</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-child">
                                <a class="menu-item" href="/sunucu/fiziksel">Fiziksel Sunucular</a><span></span>
                                <ul>
                                    <li><a class="menu-item" href="/sunucu/fiziksel/eko">Ekonomik Sunucular</a></li>
                                    <li><a class="menu-item" href="/sunucu/fiziksel/ext">Extreme Sunucular</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="/sunucu/lokasyonlar">Lokasyonlar</a></li>
                            <li class="menu-item-has-children has-child"><a class="menu-item"
                                    href="#">Destek</a><span></span>
                                <ul>
                                    <li><a class="menu-item" href="/destek/yeni">Destek Talebi Oluştur</a></li>
                                    <li><a class="menu-item" href="/destek/banka">Bilgi Bankası</a></li>
                                    <li><a class="menu-item" href="/destek/sss">SSS</a></li>
                                    <li><a class="menu-item" href="/destek/iletisim">İletişim</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="news.html">Haberler</a></li>
                            <li class="menu-item-has-children has-child"><a class="menu-item"
                                    href="#">Şirket</a><span></span>
                                <ul>
                                    <li><a class="menu-item" href="about.html">Hakkımızda</a></li>
                                    <li><a class="menu-item" href="about.html">Sözleşmeler</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="de-flex-col" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="menu_side_area" style="background-size: cover; background-repeat: no-repeat;">
                            <a href="/musteri" class="btn-line">YÖNETİM PANELİ</a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH E:\Projects\laravel\hostlariz\resources\views/components/Header.blade.php ENDPATH**/ ?>