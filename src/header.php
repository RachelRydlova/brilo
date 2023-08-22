<?php
    require_once 'includes/helper-functions.php';
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo IMAGES_DIR; ?>/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php page_description(); ?>">
    <meta name="author" content="Jan Herman - www.janherman.com">
    <meta name="googlebot" content="index, follow, snippet, archive">
    <meta name="robots" content="index, follow">

    <!-- BASIC OG META
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo IMAGES_DIR; ?>/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="">
    <meta property="og:description" content="<?php page_description(); ?>">
    <meta property="og:title" content="<?php page_title(); ?>">
    <meta name="twitter:site" content="">
    <meta name="twitter:card" content="summary_large_image">
    -->

    <title><?php page_title(); ?></title>

    <!-- CSS -->
    <link href="<?php echo STYLES_DIR; ?>/style.css?ver=<?php echo VERSION; ?>" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <!-- TRACKING CODES HERE -->

</head>


<body>


<header class="header" id="header">
    <div class="header__inner">
        <div class="container">

            <div class="header__logo">
                <a href="#">
                    <img src="./public/images/logo.svg" alt="">
                </a>
            </div>

            <nav class="menu header__nav">
                <ul>
                    <li><a href="#">O nás</a></li>
                    <li>
                        <a class="has-submenu" href="#">Služby</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="">submenu</a></li>
                                <li>
                                    <a href="#" class="has-sub-submenu">submenu</a>
                                    <div class="sub-submenu">
                                        <ul>
                                            <li><a href="">Submenu</a></li>
                                            <li><a href="">Submenu</a></li>
                                            <li><a href="">Submenu</a></li>
                                            <li><a href="">Submenu</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="">submenu</a></li>
                                <li><a href="">submenu</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Aktuality</a></li>
                    <li><a href="#">Novinky</a></li>
                    <li><a href="#">Kontakty</a></li>
                </ul>
            </nav>

            <button class="header__expander" id="header-expander" aria-label="Toggle Menu">
                <span class="hamburger">
                    <span class="hamburger__inner"></span>
                </span>
            </button>

        </div>
    </div>
</header>


<!-- Start content wrapper -->
<div class="content-wrapper" id="content">