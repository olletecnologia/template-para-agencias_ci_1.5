<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $config['config_ga'] ?>
    <title><?= $config['config_site_nome'] ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= $config['config_autor'] ?>">
    <meta name="description" content="<?= $config['config_site_descricao'] ?>" />
    <meta name="keywords" content="<?= $config['config_keywords'] ?>" />
    <meta property="og:image" content="<?= base_url($config['config_og_image'])?>" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta charset="UTF-8" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url($config['config_icon'])?>">

    <!-- LINKS DO TEMPLATE-->

    <link href="<?= base_url('vendor/site/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url('vendor/site/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?= base_url('vendor/site/css/agency.min.css')?>" rel="stylesheet">

    <style>
        header {
            background-image: url("<?= $config['config_og_image']?>");
        }
        section#contact {
            background-image: url("<?= $config['config_rodape_img']?>");
        }
    </style>
</head>
<body id="page-top" class="index">