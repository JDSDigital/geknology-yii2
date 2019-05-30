<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

// Meta tags
$this->registerMetaTag(['name' => 'author', 'content' => 'geknology.com']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Geknology Techno Services ✓ Soporte Técnico ; Desarrollo Web ; Diseño Digital ; Redes | ¡Llámanos ☎ (569) 6775 0215!']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'desarrollo web, diseño web, reparacion notebook, tecnico notebook, tecnico pc']);
$this->registerMetaTag(['rel' => 'canonical', 'href' => 'https://www.geknology.com']);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['/site/index'], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'website'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => 'Geknology Techno Services'
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => 'Geknology Techno Services ✓ Soporte Técnico ; Desarrollo Web ; Diseño Digital ; Redes | ¡Llámanos ☎ (569) 6775 0215!'
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to(['/img/logo/logo.png'], true)
]);

$this->registerMetaTag([
    'property' => 'og:image:alt',
    'content' => 'Geknology Techno Services'
]);

$this->registerMetaTag([
    'property' => 'twitter:card',
    'content' => 'summary'
]);

$this->registerMetaTag([
    'property' => 'twitter:description',
    'content' => 'Geknology Techno Services ✓ Soporte Técnico ; Desarrollo Web ; Diseño Digital ; Redes | ¡Llámanos ☎ (569) 6775 0215!'
]);

$this->registerMetaTag([
    'property' => 'twitter:title',
    'content' => 'Geknology Techno Services'
]);

// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '196x196', 'href' => Yii::getAlias('@web') . '/img/favicon/favicon-196x196.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => Yii::getAlias('@web') . '/img/favicon/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => Yii::getAlias('@web') . '/img/favicon/favicon-32x32.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => Yii::getAlias('@web') . '/img/favicon/favicon-16x16.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '128x128', 'href' => Yii::getAlias('@web') . '/img/favicon/favicon-128.png']);

$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-57x57.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-114x114.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-72x72.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-144x144.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '60x60', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-60x60.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-120x120.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-76x76.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => Yii::getAlias('@web') . '/img/favicon/apple-touch-icon-152x152.png']);

$this->registerMetaTag(['name' => 'application-name', 'content' => 'Geknology Techno Services']);
$this->registerMetaTag(['name' => 'msapplication-TileColor', 'content' => '#FFFFFF']);
$this->registerMetaTag(['name' => 'msapplication-TileImage', 'content' => './img/favicon/mstile-144x144.png']);
$this->registerMetaTag(['name' => 'msapplication-square70x70logo', 'content' => './img/favicon/mstile-70x70.png']);
$this->registerMetaTag(['name' => 'msapplication-square150x150logo', 'content' => './img/favicon/mstile-150x150.png']);
$this->registerMetaTag(['name' => 'msapplication-wide310x150logo', 'content' => './img/favicon/mstile-310x150.png']);
$this->registerMetaTag(['name' => 'msapplication-square310x310logo', 'content' => './img/favicon/mstile-310x310.png']);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113213557-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-113213557-1');
    </script>

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
          <div class="js-mega-menu collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
            <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
              <li class="nav-item g-mx-20--lg active">
                <a href="#home" class="nav-link px-0">Inicio
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#about" class="nav-link px-0">Quienes Somos
                </a>
              </li>
              <li class="nav-item hs-has-sub-menu g-mx-20--lg">
                <a href="#it" class="nav-link g-px-0" id="nav-link-1" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-1">Soporte Técnico
                </a>
                <!-- Submenu -->
                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-bg-black-opacity-0_7 g-color-white g-brd-top-2 g-min-width-200 g-mt-30 g-mt-30--lg--scrolling" id="nav-submenu-1" aria-labelledby="nav-link-1" data-header-fix-moment-exclude="g-bg-black-opacity-0_9 g-color-white" data-header-fix-moment-classes="g-bg-white-opacity-0_9 g-color-main">
                  <li class="dropdown-item">
                    <a class="nav-link g-px-0" href="#it1">Soporte Técnico Empresarial</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link g-px-0" href="#it2">Soporte Técnico a Domicilio</a>
                  </li>
                </ul>
                <!-- End Submenu -->
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#development" class="nav-link px-0">Desarrollo Web
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#portfolio" class="nav-link px-0">Portafolio
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a href="#contact" class="nav-link px-0">Contacto
                </a>
              </li>
              <li class="nav-item g-mx-20--lg">
                <a target="_blank" href="https://goo.gl/YWpQ3V" class="nav-link px-0">Califícanos
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

          <div class="row">
            <div class="col-lg-6">
              <article class="media">
                <a class="d-flex g-mt-4 mr-3" target="_blank" href="http://www.openhousse.cl">
                  <img class="g-width-60 g-height-60" src="./img/portfolio/openhoussethumb.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.openhousse.cl">Open Housse</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12">
                    <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.openhousse.cl">www.openhousse.cl</a></li>
                  </ul>
                </div>
              </article>

              <hr class="g-brd-white-opacity-0_1 g-mt-15 g-mb-10">

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

            </div>
            <div class="col-lg-6">
              <article class="media">
                <a class="d-flex g-mt-4 mr-3" target="_blank" href="https://www.draestetica.com">
                  <img class="g-width-60 g-height-60" src="./img/portfolio/draesteticathumb.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.draestetica.com">Dra. Estética</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12">
                    <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.draestetica.com">www.draestetica.com</a></li>
                  </ul>
                </div>
              </article>

              <hr class="g-brd-white-opacity-0_1 g-mt-15 g-mb-10">

              <article class="media">
                <a class="d-flex g-mt-4 mr-3" target="_blank" href="http://www.triadeconsultores.cl">
                  <img class="g-width-60 g-height-60" src="./img/portfolio/triadethumb.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.triadeconsultores.cl">Triade Consultores</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12">
                    <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" target="_blank" href="http://www.triadeconsultores.cl">www.triadeconsultores.cl</a></li>
                  </ul>
                </div>
              </article>

            </div>
          </div>

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
