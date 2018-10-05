<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    >

    <script>if ( top !== self ) top.location.replace( self.location.href );// Hey, don't iframe my iframe!</script>


</head>
<body>

<?php $this->beginBody() ?>

<!--<div class="wrap">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>
<!---->
<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= Alert::widget() ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</div>-->




<!-- Header -->
<!--<header class="switcher-bar clearfix">-->
<!---->
<!--    <!-- Logo -->-->
<!--    <div class="logo textual pull-left">-->
<!--        <a href="https://colorlib.com/wp/templates/" title="Switcher">-->
<!--            <img src="assets/img/logo.png" alt="uiCookies">-->
<!--        </a>-->
<!--    </div>-->
<!---->
<!--    <!-- Product Switcher -->-->
<!--    <div class="product-switcher pull-left">-->
<!--        <a href="#" title="Select a Product">-->
<!--            Select a Product <span>+</span>-->
<!--        </a>-->
<!--    </div>-->
<!---->
<!--    <!-- Bar Remove Button -->-->
<!--    <div class="remove-btn header-btn pull-right">-->
<!--        <a href="#" title="Close this bar" class="icon-remove"></a>-->
<!--    </div>-->
<!---->
<!--    <!-- Purchase Button -->-->
<!--    <div class="purchase-btn header-btn pull-right">-->
<!--        <a href="#" title="Download" class="icon-cloud-download"></a>-->
<!--    </div>-->
<!---->
<!--    <!-- Mobile Button -->-->
<!--    <div class="mobile-btn header-btn pull-right hidden-xs">-->
<!--        <a href="#" title="Smartphone View" class="icon-mobile-phone"></a>-->
<!--    </div>-->
<!---->
<!--    <!-- Tablet Button -->-->
<!--    <div class="tablet-btn header-btn pull-right hidden-xs">-->
<!--        <a href="#" title="Tablet View" class="icon-tablet"></a>-->
<!--    </div>-->
<!---->
<!--    <!-- Desktop Button -->-->
<!--    <div class="desktop-btn header-btn pull-right hidden-xs">-->
<!--        <a href="#" title="Desktop View" class="icon-desktop"></a>-->
<!--    </div>-->
<!---->
<!--</header>-->

<!-- Products List -->
<section class="switcher-body">

    <a href="#" title="Prev" class="icon-chevron-left products-prev"></a>

    <div class="products-wrapper">
        <div class="products-list clearfix">

        </div>
    </div>

    <a href="#" title="Next" class="icon-chevron-right products-next"></a>

</section>


<!-- Product iframe -->
<iframe class="product-iframe" border="0" style="height: 592px;" src="https://colorlib.com/preview/theme/foto/" frameborder="0"></iframe>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
