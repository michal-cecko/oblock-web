<header data-aos="fade-down" data-aos-duration="1000">
    <div class="topbar">
        <a class="toggler">
            <lottie-player id="hamburger" src="<?php echo BASE_URL; ?>assets/img/menu.json"></lottie-player>
        </a>
        <a href="<?= $instagram ?>" class="instagram">
            <?php include( "./assets/img/instagram.svg" ) ?>
        </a>
    </div>
    <div class="navmenu">
        <ul>
            <li><a href="#home">Domov</a></li>
            <li><a href="#o-nas">O nás</a></li>
            <li><a href="#sluzby">Služby</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
        </ul>
        <img src="<?= BASE_URL ?>assets/img/razor.png" alt="razor" class="razor">
        <a href="<?= $bookio ?>" class="btn btn-secondary btn-medium noresize">Rezervovať</a>
    </div>
</header>