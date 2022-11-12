<section class="hero" id="home">
    <img src="<?= BASE_URL ?>/assets/img/emblem.png" alt="emblem" class="emblem">
    <img src="<?= BASE_URL ?>/assets/img/razor.png" alt="razor" class="razor">
    <div class="hero-text" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="hidden-element">Oblock barbershop</h1>
        <img src="<?= BASE_URL ?>/assets/img/logo2.png" alt="O'BLOCK" class="logo">
        <div class="hidden-element">Barbershop</div>
    </div>
    <div class="btn-container"  data-aos="fade-left" data-aos-duration="1000" data-aos-duration="300" data-aos-offset="-500">
        <a href="<?= $bookio ?>" class="btn btn-secondary btn-large">Rezervovať</a>
    </div>
</section>

<section class="about" id="o-nas"  data-aos="fade-down" data-aos-duration="1000">
    <div class="about-text">
        <h2 class="heading left">O Nás</h2>
        <p class="text">
            <span>O-BLOCK</span> JE PÁNSKE HOLIČSTVO,
            V KTOROM PONÚKAME OKREM SLUŽIEB A RELAXU AJ SKUTOČNÝ ZÁŽITOK ZO STRIHANIA.<br><br>
            OKREM TRADIČNÝCH SLUŽIEB U NÁS NÁJDETE AJ SLUŽBY AKO HOT ALEBO COLD TOWEL, DEPILÁCIU CHĹPKOV, OPÁLENIE UŠÍ
            ALEBO ÚPRAVU OBOČIA.<br><br>
            TAKTIEŽ POUŽÍVAME A PREDÁVAME KVALITNÚ PÁNSKU KOZMETIKU. STAČÍ SI UŽ LEN <a href="<?= $bookio ?>">REZERVOVAŤ TERMÍN</a>.
        </p>
    </div>
    <img src="<?= BASE_URL ?>/assets/img/razor.png" alt="razor" class="razor">
    <div class="img-1">
        <img src="<?= BASE_URL ?>/assets/img/oblock_1.jpg" alt="O nás - fotka č.1"/>
    </div>
    <div class="img-2">
        <img src="<?= BASE_URL ?>/assets/img/oblock_2.jpg" alt="O nás - fotka č.2"/>
    </div>
</section>

<section class="sluzby userSelectNone" id="sluzby"  data-aos="fade-down" data-aos-duration="1000" >
    <h2 class="heading center">Služby</h2>
    <div class="cards-container">
        <div class="cards">
            <div class="card">
                <img src="<?= BASE_URL ?>/assets/img/razor_icon.png" class="icon">
                <div class="sluzba">
                    <div class="head">
                        <div class="name">Úprava brady</div>
                        <div class="price"><span class="dash"></span>12€</div>
                    </div>
                    <div class="text">
                        (Konzultácia, úprava, zaholenie kontúr, styling, servis)
                    </div>
                </div>
                <div class="sluzba">
                    <div class="head">
                        <div class="name">Fullshaving</div>
                        <div class="price"><span class="dash"></span>15€</div>
                    </div>
                    <div class="text">
                        (Konzultácia, naparenie, holenie, ošetrenie)
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="<?= BASE_URL ?>/assets/img/scissors_icon.png" class="icon">
                <div class="sluzba">
                    <div class="head">
                        <div class="name">Pánsky strih</div>
                        <div class="price"><span class="dash"></span>18€</div>
                    </div>
                    <div class="text">
                        (Konzultácia, strih, umytie, styling, servis)
                    </div>
                </div>
                <div class="sluzba">
                    <div class="head">
                        <div class="name">Express strih</div>
                        <div class="price"><span class="dash"></span>10€</div>
                    </div>
                    <div class="text">
                        (Konzultácia, strih)
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="<?= BASE_URL ?>/assets/img/mustache.png" class="icon">
                <div class="sluzba">
                    <div class="head">
                        <div class="name">Combo štandard</div>
                        <div class="price"><span class="dash"></span>26€</div>
                    </div>
                    <div class="text">
                        (Konzultácia, strih, úprava brady, umytie, styling, servis)
                    </div>
                </div>
                <div class="sluzba">
                    <div class="head">
                        <h4 class="name">Combo vip</h4>
                        <div class="price"><span class="dash"></span>33€</div>
                    </div>
                    <div class="text">
                        (Konzultácia, strih, úprava, HOT TOWEL, úprava brady, ošetrenie kozmetikou, umytie, styling, servis)
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="<?= BASE_URL ?>/assets/img/shampoo.png" class="icon">
                <div class="sluzba">
                    <div class="head">
                        <div class="name">EXTRA X</div>
                        <div class="price"><span class="dash"></span>5€</div>
                    </div>
                    <div class="text">
                        (umytie, masáž hlavy, styling)
                    </div>
                </div>
                <div class="sluzba">
                    <div class="head">
                        <div class="name">EXTRA Y</div>
                        <div class="price"><span class="dash"></span>3€</div>
                    </div>
                    <div class="text">
                        (Depilácia chĺpkov, úprava obočia, opalovanie uší)
                    </div>
                </div>
            </div>
        </div>
        <div class="prev">
            <?php include( "./assets/img/chevron.svg" ) ?>
        </div>
        <div class="next">
            <?php include( "./assets/img/chevron.svg" ) ?>
        </div>
        <div class="btn-container center">
            <a href="<?= $bookio ?>" class="btn btn-secondary btn-large">Rezervovať</a>
        </div>
    </div>
</section>

<section class="largelogo" data-aos="fade-down" data-aos-duration="1000">
    <img src="<?= BASE_URL ?>/assets/img/logo1.png" alt="O'BLOCK" class="logo">
</section>