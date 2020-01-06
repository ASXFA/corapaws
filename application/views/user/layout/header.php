<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $judul ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/logo/logo_p1.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/animate.css">
    
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/aos.css">

    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/user/css/style.css">
  </head>
  <body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
          <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
              <div class="row d-flex">
                <div class="col-md pr-4 d-flex topper align-items-center">
                  <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                  <span class="text">+ 1235 2355 98</span>
                </div>
                <div class="col-md pr-4 d-flex topper align-items-center">
                  <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                  <span class="text">youremail@email.com</span>
                </div>
                <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                  <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Minishop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clothing</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?= base_url() ?>user/clothing/clothing_men">Men</a>
                <a class="dropdown-item" href="<?= base_url() ?>user/clothing/clothing_women">Women</a>
              </div>
            </li>
            <li class="nav-item"><a href="<?= base_url() ?>user/custom" class="nav-link">Custom</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>user/contact" class="nav-link">Contact Us</a></li>
            <li class="nav-item cta cta-colored"><a href="<?= base_url() ?>user/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->