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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>

<?php $this->beginBody() ?>

<div class="panel panel-default">
    <div class="panel-heading main-panel">
        <nav class="main-navigation">
            <div class="navbar-header animated fadeInUp">
                <a class="navbar-brand" href="#" style="margin-top: -50px;margin-left: -20px;">
                    <img src="/img/site-logo-2.png" width=290px;">
                </a>
            </div>
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-list-item">
                    <a href="/about" class="nav-link">About Us</a>
                </li>
                <li class="nav-list-item">
                    <a href="/work" class="nav-link">Works</a>
                </li>
                <li class="nav-list-item">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

    <?= $content ?>
    <div class="panel-footer text-center">
        @Nathali Keerthirathna Photography 2018 - All rights Reserved
    </div>
</div>


<?php $this->endBody() ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>
