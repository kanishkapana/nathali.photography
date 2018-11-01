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
        'js/application.min.js',
        'js/jquery-min.js',
        'js/product.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/jquery.themepunch.tools.min.js',
        'js/revolution.extension.actions.min.js',
        'js/revolution.extension.carousel.min.js',
        'js/revolution.extension.kenburn.min.js',
        'js/revolution.extension.layeranimation.min.js',
        'js/revolution.extension.migration.min.js',
        'js/revolution.extension.navigation.min.js',
        'js/revolution.extension.parallax.min.js',
        'js/revolution.extension.slideanims.min.js',
        'js/revolution.extension.video.min.js',
        'js/tether.min.js',
        'js/custom.js',
        'js/image-gallery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
