<footer>
    <div class="container" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row gx-5" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-lg-4" style="background-size: cover; background-repeat: no-repeat;">
                <div class="d-flex foologo column">
                    <img width="25%" src="<?php echo e(asset('images/logo.png')); ?>" alt="">
                    <span class="text">HOSTLARIZ</span>
                </div>
                <div class="spacer-20" style="background-size: cover; background-repeat: no-repeat;"></div>
                <p>HOSTLARIZ uzun yılların vermiş olduğu tecrübeyle yüksek performanslı sanal sunucu hizmetlerini
                    sizlerle buluşturuyor. Alanında uzman ekibimiz ve güçlü alt yapımız ile sizlere kesintisiz sunucu
                    hizmeti sunuyoruz. Üst düzey koruma imkanıyla oyun sunucusu kurmanın tadını çıkartabilirsiniz.</p>
            </div>
            <div class="col-lg-4" style="background-size: cover; background-repeat: no-repeat;">
                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="col-lg-6 col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                            <h5>Oyun Sunucuları</h5>
                            <ul>
                                <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($game->gameInfoPath); ?>"><?php echo e($game->gameName); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                            <h5>Sayfalar</h5>
                            <ul>
                                <li><a href="#">Oyun Sunucuları</a></li>
                                <li><a href="#">Sanal Sunucular</a></li>
                                <li><a href="#">Fiziksel Sunucular</a></li>
                                <li><a href="#">Bilgi Bankası</a></li>
                                <li><a href="#">Hakkımızda</a></li>
                                <li><a href="#">Lokasyonlar</a></li>
                                <li><a href="#">Haberler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="background-size: cover; background-repeat: no-repeat;">
                <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                    <h5>Gelişmeler ve Güncellemeler</h5>
                    <form action="blank.php" class="row form-dark" id="form_subscribe" method="post"
                        name="form_subscribe">
                        <div class="col text-center" style="background-size: cover; background-repeat: no-repeat;">
                            <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                placeholder="Eposta Adresiniz" type="text"> <a href="#" id="btn-subscribe"><i
                                    class="arrow_right bg-color-secondary"></i></a>
                            <div class="clearfix" style="background-size: cover; background-repeat: no-repeat;"></div>
                        </div>
                    </form>
                    <div class="spacer-10" style="background-size: cover; background-repeat: no-repeat;"></div>
                    <small>Gelişmelerden haberdar olmak için mail listemize katılın.</small>
                    <div class="spacer-30" style="background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                        <h5>Bizi Takip Edin</h5>
                        <div class="social-icons" style="background-size: cover; background-repeat: no-repeat;">
                            <a href="https://x.com/hostlariz"><i class="fa-brands fa-x"></i></a>
                            <a href="https://discord.gg/hostlariz"><i class="fa-brands fa-discord"></i></a>
                            <a href="https://linkedin.com/hostlariz"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter" style="background-size: cover; background-repeat: no-repeat;">
        <div class="container" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                <div class="col-lg-6 col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                    Copyright 2023 - Hostlarız
                </div>
                <div class="col-lg-6 col-sm-6 text-lg-end text-sm-start"
                    style="background-size: cover; background-repeat: no-repeat;">
                    <ul class="menu-simple">
                        <li><a href="#">Hizmet Sözleşmesi</a></li>
                        <li><a href="#">Gizlilik Politikası</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    .text {
        font-size: 35px;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        margin: 31px 0px 0px 5px;
    }
</style>
<?php /**PATH E:\Projects\laravel\hostlariz\resources\views/components/Footer.blade.php ENDPATH**/ ?>