<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use common\models\PermisosHelpers;
use backend\assets\FontAwesomeAsset;

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

<div class="wrap">
    <?php
    if (!Yii::$app->user->isGuest){
    $es_admin = PermisosHelpers::requerirMinimoRol('Admin');
    NavBar::begin([
        'brandLabel' => 'JMs Panel <i class="fa fa-plug"></i> Admin',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [

        'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
    } else {
    NavBar::begin([
        'brandLabel' => 'JMs Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    }
        if (!Yii::$app->user->isGuest && $es_admin) {
            $menuItems[] = ['label' => 'Publicaciones', 'url' => ['posts/index']];
            $menuItems[] = ['label' => 'Usuarios', 'url' => ['user/index']];
            $menuItems[] = ['label' => 'Perfiles', 'url' => ['perfil/index']];
            $menuItems[] = ['label' => 'Roles', 'url' => ['rol/index']];
            $menuItems[] = ['label' => 'Tipos de Usuario', 'url' => ['tipo-usuario/index']];
            $menuItems[] = ['label' => 'Estados', 'url' => ['estado/index']];
            }
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Iniciar Sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Salir (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
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

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; JMs Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
