<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      'vendor/bootstrap/bootstrap.min.css',
      'vendor/icon-awesome/css/font-awesome.min.css',
      'vendor/icon-line/css/simple-line-icons.css',
      'vendor/icon-hs/style.css',
      'vendor/dzsparallaxer/dzsparallaxer.css',
      'vendor/dzsparallaxer/dzsscroller/scroller.css',
      'vendor/dzsparallaxer/advancedscroller/plugin.css',
      'vendor/slick-carousel/slick/slick.css',
      'vendor/hamburgers/hamburgers.min.css',
      'vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
      'vendor/revolution-slider/revolution/css/settings.css',
      'vendor/revolution-slider/revolution/css/layers.css',
      'vendor/revolution-slider/revolution/css/navigation.css',
      'vendor/hs-megamenu/src/hs.megamenu.css',
      'css/unify-core.css',
      'css/unify-components.css',
      'css/unify-globals.css',
      'css/custom.css',
    ];
    public $js = [
      // 'vendor/jquery/jquery.min.js',
      'vendor/jquery-migrate/jquery-migrate.min.js',
      'vendor/jquery.easing/js/jquery.easing.js',
      'vendor/popper.min.js',
      'vendor/bootstrap/bootstrap.min.js',
      'vendor/dzsparallaxer/dzsparallaxer.js',
      'vendor/dzsparallaxer/dzsscroller/scroller.js',
      'vendor/dzsparallaxer/advancedscroller/plugin.js',
      'vendor/slick-carousel/slick/slick.js',
      'vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js',
      'vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js',
      'vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js',
      'vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js',
      'vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js',
      'vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js',
      'vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js',
      'vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js',
      'vendor/hs-megamenu/src/hs.megamenu.js',
      'js/hs.core.js',
      'js/components/hs.header.js',
      'js/helpers/hs.hamburgers.js',
      'js/components/hs.scroll-nav.js',
      'js/components/hs.go-to.js',
      'js/helpers/hs.height-calc.js',
      'js/components/hs.carousel.js',
      'js/custom.js',
    ];
}
