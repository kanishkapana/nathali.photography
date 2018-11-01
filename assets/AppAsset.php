<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awsome.css',
        'css/template.css',
        'css/custom.css',
    ];
    public $js = [
        'assets/js/application.min.js',
        'assets/js/jquery-min.js',
        'assets/js/product.js',
        'assets/js/jquery.themepunch.revolution.min.js',
        'assets/js/jquery.themepunch.tools.min.js',
        'assets/js/revolution.extension.actions.min.js',
        'assets/js/revolution.extension.carousel.min.js',
        'assets/js/revolution.extension.kenburn.min.js',
        'assets/js/revolution.extension.layeranimation.min.js',
        'assets/js/revolution.extension.migration.min.js',
        'assets/js/revolution.extension.navigation.min.js',
        'assets/js/revolution.extension.parallax.min.js',
        'assets/js/revolution.extension.slideanims.min.js',
        'assets/js/revolution.extension.video.min.js',
        'assets/js/tether.min.js',
        'assets/js/custom.js',
        'assets/js/image-gallery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
