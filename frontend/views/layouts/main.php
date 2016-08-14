<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use kartik\icons\Icon;

Icon::map($this);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="padding-top: 50px">
    <?php
    NavBar::begin([
        'brandLabel' => 'Paskutinė pora',
        'brandUrl' => ['/site/index'],
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Vyrams', 'url' => ['/site/index']],
        ['label' => 'Moterims', 'url' => ['/site/about']],
        ['label' => 'Kontaktai', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registruotis', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="header-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 left">
                    <ul class="list-unstyled list-inline" style="margin-bottom: 0px;">
                        <li><a target="_blank" href="https://www.facebook.com/Paskutin%C4%97-pora-324261617964312/?__mref=message_bubble"><?= Icon::show('facebook'); ?></a></li>
                        <li><a target="_blank" href="#"><?= Icon::show('instagram'); ?></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-hidden-xs"></div>
                <div class="col-md-4 col-xs-6 right" style="text-align: right;">
                    <ul class="list-unstyled list-inline" style="margin-bottom: 0px;">
                        <li><a target="_blank" href="#"><?= Icon::show('shopping-basket'); ?>Krepšelis</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?= $content ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

    </div>


</div>

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
