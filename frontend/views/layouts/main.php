<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

// Meta tags
$this->registerMetaTag(['name' => 'author', 'content' => 'geknology.com']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Geknology es una empresa dedicada a la integración tecnológica con visión a futuro, desarrollando soluciones con procedimientos y estándares de calidad.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'soporte, tecnico, desarrollo, diseño, redes, formateo']);

// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '196x196', 'href' => Yii::getAlias('@web') . '/img/favicon-196x196.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => Yii::getAlias('@web') . '/img/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => Yii::getAlias('@web') . '/img/favicon-32x32.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => Yii::getAlias('@web') . '/img/favicon-16x16.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '128x128', 'href' => Yii::getAlias('@web') . '/img/favicon-128.png']);

$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-57x57.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-114x114.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-72x72.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-144x144.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '60x60', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-60x60.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-120x120.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-76x76.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => Yii::getAlias('@web') . '/img/apple-touch-icon-152x152.png']);

$this->registerMetaTag(['name' => 'application-name', 'content' => 'Floreria Linda Primavera']);
$this->registerMetaTag(['name' => 'msapplication-TileColor', 'content' => '#FFFFFF']);
$this->registerMetaTag(['name' => 'msapplication-TileImage', 'content' => './img/mstile-144x144.png']);
$this->registerMetaTag(['name' => 'msapplication-square70x70logo', 'content' => './img/mstile-70x70.png']);
$this->registerMetaTag(['name' => 'msapplication-square150x150logo', 'content' => './img/mstile-150x150.png']);
$this->registerMetaTag(['name' => 'msapplication-wide310x150logo', 'content' => './img/mstile-310x150.png']);
$this->registerMetaTag(['name' => 'msapplication-square310x310logo', 'content' => './img/mstile-310x310.png']);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="300">
    <div class="u-header__section u-header__section--dark g-transition-0_3 g-py-10" data-header-fix-moment-exclude="u-header__section--dark g-py-10" data-header-fix-moment-classes="g-bg-white-opacity-0_9 u-header__section--light g-py-0">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Responsive Toggle Button -->
          <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="hamburger hamburger--slider">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Logo -->
          <a href="#home" class="navbar-brand">
            <img src="./img/logo/logo.png" class="img-responsive" alt="Image Description" style="max-height:75px">
          </a>
          <!-- End Logo -->

          <!-- Navigation -->
          <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
            <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
              <li class="nav-item g-mx-20--lg active">
                <a href="#home" class="nav-link px-0">Inicio
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#about" class="nav-link px-0">Quienes Somos
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#it" class="nav-link px-0">Soporte Técnico
                </a>
              <li class="nav-item g-mx-20--lg">
                <a href="#development" class="nav-link px-0">Desarrollo Web
                </a>
              <li class="nav-item g-mx-20--lg">
                <a href="#portfolio" class="nav-link px-0">Portafolio
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#contact" class="nav-link px-0">Contacto
                </a>
              </li>
            </ul>
          </div>
          <!-- End Navigation -->
        </div>
      </nav>
    </div>
  </header>

<div class="wrap">
    <?php
    /*NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();*/
    ?>

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<!-- Footer -->
<section class="shortcode-html">
  <!-- Footer -->
  <div class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-pt-30 g-pb-20">
    <div class="container">
      <div class="row">
        <!-- Footer Content -->
        <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
          <a class="d-block g-mb-20" href="index.html">
            <img class="img-fluid" src="./img/logo/logo-white.png" alt="Logo" style="max-height: 75px">
          </a>
          <p>Geknology es una empresa dedicada a la integración tecnológica con visión a futuro, desarrollando soluciones con procedimientos y estándares de calidad.</p>
          <!--<p class="mb-0">En Geknology comprendemos la importancia de la tecnología para el desarrollo y evolución de una empresa, por eso ofrecemos múltiples servicios a la medida de cada persona o negocio.</p>-->
        </div>
        <!-- End Footer Content -->

        <!-- Footer Content -->
        <div class="d-none d-lg-block col-lg-6 g-mb-40 g-mb-0--lg">
          <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
            <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Nuestro Portafolio</h2>
          </div>

          <article class="media">
            <a class="d-flex g-mt-4 mr-3" target="_blank" href="http://www.florerialindaprimavera.cl">
              <img class="g-width-60 g-height-60" src="./img/portfolio/florerialindaprimaverathumb.jpg" alt="Image Description">
            </a>

            <div class="media-body">
              <h3 class="h6">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.florerialindaprimavera.cl">Florería Linda Primavera</a>
              </h3>

              <ul class="u-list-inline g-font-size-12">
                <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.florerialindaprimavera.cl">www.florerialindaprimavera.cl</a></li>
              </ul>
            </div>
          </article>

          <hr class="g-brd-white-opacity-0_1 g-mt-15 g-mb-10">

          <article class="media">
            <a class="d-flex g-mt-4 mr-3" target="_blank" href="http://www.remesas.cl">
              <img class="g-width-60 g-height-60" src="./img/portfolio/remesasthumb.jpg" alt="Image Description">
            </a>

            <div class="media-body">
              <h3 class="h6">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.remesas.cl">REMESAS.CL | Chile.net.ve </a>
              </h3>

              <ul class="u-list-inline g-font-size-12">
                <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.remesas.cl">www.remesas.cl</a></li>
              </ul>
            </div>
          </article>
        </div>
        <!-- End Footer Content -->


        <!-- Footer Content -->
        <div class="col-lg-3 col-md-6">
          <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
            <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Contacto</h2>
          </div>

          <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(./img/maps/map2.png);">
            <!-- Location -->
            <div class="d-flex g-mb-20">
              <div class="g-mr-10">
                <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                  <i class="fa fa-map-marker"></i>
                </span>
              </div>
              <p class="mb-0">Huérfanos 1160, Of. 1101
                <br>
                Santiago de Chile - Chile
              </p>
            </div>
            <!-- End Location -->

            <!-- Phone -->
            <div class="d-flex g-mb-20">
              <div class="g-mr-10">
                <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                  <i class="fa fa-phone"></i>
                </span>
              </div>
              <p class="mb-0 g-mt-8">(+56) 9 6775 0215
              </p>
            </div>
            <!-- End Phone -->

            <!-- Email and Website -->
            <div class="d-flex g-mb-20">
              <div class="g-mr-10">
                <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                  <i class="fa fa-globe"></i>
                </span>
              </div>
              <p class="mb-0">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:contacto@geknology.com">contacto@geknology.com</a>
                <br>
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">www.geknology.com</a>
              </p>
            </div>
            <!-- End Email and Website -->
          </address>
        </div>
        <!-- End Footer Content -->
      </div>
    </div>
  </div>
  <!-- End Footer -->

  <!-- Copyright Footer -->
  <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
    <div class="container">
      <div class="row">
        <div class="col-md-8 align-self-center text-center text-md-left g-mb-10 g-mb-0--md">
          <div class="d-lg-flex">
            <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">© 2018 <strong>Geknology Techno Services SpA.</strong> Todos los derechos reservados.</small>
          </div>
        </div>

        <div class="col-md-4 align-self-center">
          <ul class="list-inline text-center text-md-right mb-0">
            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
              <a href="https://www.facebook.com/geknology" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
              <a href="https://www.twitter.com/geknology" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
              <a href="https://www.instagram.com/geknology" target="_blank" class="g-color-white-opacity-0_5 g-color-white--hover">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Copyright Footer -->
</section>
<!-- End Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
