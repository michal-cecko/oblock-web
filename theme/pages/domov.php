<section class="hero" id="home">
    <img src="/assets/img/emblem.png" alt="emblem" class="emblem">
    <img src="/assets/img/razor.png" alt="razor" class="razor">
    <div class="hero-text" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="hidden-element">Oblock barbershop</h1>
        <img src="/assets/img/logo2.png" alt="O-Block" class="logo">
        <div class="hidden-element">Barbershop</div>
    </div>
    <div class="btn-container" data-aos="fade-left" data-aos-duration="1000" data-aos-duration="300"
         data-aos-offset="-500">
        <a href="<?= $bookio ?>" class="btn btn-secondary btn-large">Rezervovať</a>
    </div>
</section>

<section class="about" id="o-nas" data-aos="fade-down" data-aos-duration="1000">
    <div class="about-text">
        <h2 class="heading left">O Nás</h2>
        <p class="text">
            <span>O-BLOCK</span> JE PÁNSKE HOLIČSTVO,
            V KTOROM PONÚKAME OKREM SLUŽIEB A RELAXU AJ SKUTOČNÝ ZÁŽITOK ZO STRIHANIA.<br><br>
            OKREM TRADIČNÝCH SLUŽIEB U NÁS NÁJDETE AJ SLUŽBY AKO HOT ALEBO COLD TOWEL, DEPILÁCIU CHĹPKOV, OPÁLENIE UŠÍ
            ALEBO ÚPRAVU OBOČIA.<br><br>
            TAKTIEŽ POUŽÍVAME A PREDÁVAME KVALITNÚ PÁNSKU KOZMETIKU. STAČÍ SI UŽ LEN <a href="<?= $bookio ?>">REZERVOVAŤ
                TERMÍN</a>.
        </p>
    </div>
    <img src="/assets/img/razor.png" alt="razor" class="razor">
    <div class="img-1">
        <img src="/assets/img/oblock_1.jpg" alt="O nás - fotka č.1"/>
    </div>
    <div class="img-2">
        <img src="/assets/img/oblock_2.jpg" alt="O nás - fotka č.2"/>
    </div>
</section>


<?php

$cards = [
    [
        "icon" => "razor_icon.png",
        'services' => [
            ['text' => 'Úprava brady', 'price' => 12, 'desc' => '(Konzultácia, úprava, zaholenie kontúr, styling, servis)'],
            ['text' => 'Fullshaving', 'price' => 15, 'desc' => '(Konzultácia, naparenie, holenie, ošetrenie)']
        ]
    ],
    [
        "icon" => "scissors_icon.png",
        'services' => [
            ['text' => 'Pánsky strih', 'price' => 18, 'desc' => '(Konzultácia, strih, umytie, styling, servis)'],
            ['text' => 'Express strih', 'price' => 10, 'desc' => '(Konzultácia, strih)']
        ]
    ],
    [
        "icon" => "mustache.png",
        'services' => [
            ['text' => 'Combo štandard', 'price' => 26, 'desc' => '(Konzultácia, strih, úprava brady, umytie, styling, servis)'],
            ['text' => 'Combo vip', 'price' => 33, 'desc' => '(Konzultácia, strih, úprava, HOT TOWEL, úprava brady, ošetrenie kozmetikou, umytie, styling, servis)']
        ]
    ],
    [
        "icon" => "shampoo.png",
        'services' => [
            ['text' => 'EXTRA X', 'price' => 5, 'desc' => '(umytie, masáž hlavy, styling)'],
            ['text' => 'EXTRA Y', 'price' => 3, 'desc' => '(Depilácia chĺpkov, úprava obočia, opalovanie uší)']
        ]
    ],
];

$cardsNew = [
    [
        "icon" => "razor_icon.png",
        'services' => [
            ['text' => 'Úprava brady', 'price' => 16, 'desc' => '(Konzultácia, úprava, zaholenie kontúr, styling, servis)'],
            ['text' => 'Fullshaving', 'price' => 17, 'desc' => '(Konzultácia, naparenie, holenie, ošetrenie)']
        ]
    ],
    [
        "icon" => "scissors_icon.png",
        'services' => [
            ['text' => 'Pánsky strih', 'price' => 22, 'desc' => '(Konzultácia, strih, umytie, styling, servis)'],
            ['text' => 'Express strih', 'price' => 14, 'desc' => '(Konzultácia, strih)']
        ]
    ],
    [
        "icon" => "mustache.png",
        'services' => [
            ['text' => 'Combo štandard', 'price' => 30, 'desc' => '(Konzultácia, strih, úprava brady, umytie, styling, servis)'],
            ['text' => 'Combo vip', 'price' => 37, 'desc' => '(Konzultácia, strih, úprava, HOT TOWEL, úprava brady, ošetrenie kozmetikou, umytie, styling, servis)']
        ]
    ],
    [
        "icon" => "shampoo.png",
        'services' => [
            ['text' => 'EXTRA X', 'price' => 5, 'desc' => '(umytie, masáž hlavy, styling)'],
            ['text' => 'EXTRA Y', 'price' => 3, 'desc' => '(Depilácia chĺpkov, úprava obočia, opalovanie uší)']
        ]
    ],
];

$selectedCards = strtotime("2024-01-01 00:00:00") > time() ? $cards : $cardsNew;

?>

<section class="sluzby userSelectNone" id="sluzby" data-aos="fade-down" data-aos-duration="1000">
    <h2 class="heading center">Služby</h2>
    <div class="cards-container">
        <div class="cards">
            <?php foreach ($selectedCards as $card): ?>
            <div class="card">
                <img src="/assets/img/<?= $card['icon'] ?>" class="icon">
                <?php foreach ($card['services'] as $service) : ?>
                <div class="sluzba">
                    <div class="head">
                        <div class="name"><?= $service['text'] ?></div>
                        <div class="price"><span class="dash"></span><?= $service['price'] ?>€</div>
                    </div>
                    <div class="text">
                        <?= $service['desc'] ?>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
        </div>
        <div class="prev">
            <?php include("./assets/img/chevron.svg") ?>
        </div>
        <div class="next">
            <?php include("./assets/img/chevron.svg") ?>
        </div>
        <div class="btn-container center">
            <a href="<?= $bookio ?>" class="btn btn-secondary btn-large">Rezervovať</a>
        </div>
    </div>
</section>

<section class="largelogo" data-aos="fade-down" data-aos-duration="1000">
    <img src="/assets/img/logo1.png" alt="O-Block" class="logo">
</section>