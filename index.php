<?php
    require_once( "config.php" );
    require_once( "./theme/include/functions.php" );

    session_start();

    if ( !isset( $_GET[ 'url' ] ) ) {
        $page = "domov";
    } else {
        if ( !file_exists( "./theme/pages/" . $_GET[ 'url' ] . ".php" ) ) {
            $page = "domov";
        } else {
            $page = validation( $_GET[ 'url' ] );
        }
    }
    $bookio = "https://services.bookio.com/o-block/widget";
    $instagram = "https://www.instagram.com/o_block_barbershop/";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O-Block | Barbershop Žilina</title>
    <meta name="author" content="Synapps.sk"/>
    <meta name="description" content="O-block je pánske holičstvo, v ktorom ponúkame okrem služieb a relaxu aj skutočný zážitok zo strihania. Okrem tradičných služieb u nás nájdete aj služby ako hot alebo cold towel, depiláciu chĺpkov, opálenie uší alebo úpravu obočia. Taktiež používame a predávame kvalitnú pánsku kozmetiku. Stačí si už len rezervovať termín."/>
    <meta name="keywords" content="Oblock, O block, O-Block, O' Block žilina, barbershop žilina, barbershop mirage, barber žilina, barber mirage, Pánske holičstvo, Pánske kaderníctvo, Pánsky kaderník, kaderník žilina, kaderník mirage">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo BASE_URL ?>assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="O-Block | Barbershop"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?php echo BASE_URL ?>assets/img/oblock_4.jpg"/>
    <meta property="og:image:url" content="<?php echo BASE_URL ?>assets/img/oblock_4.jpg"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:alt" content=""/>
    <meta property="og:url" content="<?php echo BASE_URL ?>"/>
    <meta property="og:description" content="O-block je pánske holičstvo, v ktorom ponúkame okrem služieb a relaxu aj skutočný zážitok zo strihania. Okrem tradičných služieb u nás nájdete aj služby ako hot alebo cold towel, depiláciu chĺpkov, opálenie uší alebo úpravu obočia. Taktiež používame a predávame kvalitnú pánsku kozmetiku. Stačí si už len rezervovať termín."/>
    <?php require_once( "./theme/include/links.php" ); ?>
</head>

<body>

<?php require_once( "./theme/include/loader.php" ); ?>

<div class="wrapper">
    <div class="d-none" id="base_url" data-base_url="<?php echo BASE_URL; ?>"></div>
    <div class="d-none" id="sid" data-sid="<?php echo session_id(); ?>"></div>

    <?php require_once( "./theme/include/header.php" ); ?>

    <?php require_once( "./theme/pages/" . $page . ".php" ); ?>

    <?php require_once( "./theme/include/footer.php" ); ?>

    <?php require_once( "./theme/include/scripts.php" ); ?>
</div>
</body>
</html>