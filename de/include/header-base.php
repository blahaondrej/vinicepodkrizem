<?php /*$url = 'https://' . $_SERVER['HTTP_HOST']; */?>
<?php /*$url = 'http://' . $_SERVER['HTTP_HOST']; */?>
<?php /*$url = 'http://' . $_SERVER['HTTP_HOST'] . '/vinarstvi'; */?>
<?php $url = 'https://' . $_SERVER['HTTP_HOST']; ?>
<?php $urlde = 'https://' . $_SERVER['HTTP_HOST'] . '/de';; ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145109468-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145109468-1');
    </script>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="Weinberg, Wein, Weingut, Znojmo"/>
    <meta name="description" content="Der Weinberg liegt in der Weinregion Znojmo. Unsere Trauben werden traditionell verarbeitet - sorgfältige Weinlese, Pressen mit der Hand und Gärung im Glas."/>
    <!-- OPENGRAPH -->
    <meta property="og:url"           content="https://www.vinicepodkrizem.cz" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Vinice Pod křížem" />
    <meta property="og:description"   content="Der Weinberg liegt in der Weinregion Znojmo. Unsere Trauben werden traditionell verarbeitet - sorgfältige Weinlese, Pressen mit der Hand und Gärung im Glas." />
    <meta property="og:image"         content="http://periti.cz/images/fbimage.jpg" />
    <meta property="og:image:alt"     content="Vinice Pod křížem" />
    <meta property="fb:app_id"        content="576420302761922" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?php echo $url; ?>/css/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $url; ?>/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $url; ?>/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $url; ?>/css/shop.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $url; ?>/css/fonts.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $url; ?>/css/yourstyle.css">
    <!--=============== favicons ===============-->

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url; ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url; ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url; ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $url; ?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $url; ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo $url; ?>/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo $url; ?>/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
