<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use marqu3s\summernote\Summernote;

/* @var $this yii\web\View */



$this->title = 'JMs Company';

?>
<div class="site-index">

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="panel panel-primary">
    <h3 class="panel-title">


    <?php foreach ($models as $model) { ?>

    <h4><?= Html::encode($model->title) ?></h4>
    <div>
    </h3>
  </div>
  <div class="panel-body">
  <div><label>Contenido: </label><?= ($model->excerpt) ?>
  <div><label>Cuerpo: </label><?= ($model->body) ?>
  <br><span class="label label-default">Creado Por: &nbsp;<?= Html::encode($model->user->perfil->nombre) ?></span>
  <span class="label label-primary">Vistas: &nbsp;<?= Html::encode($model->views) ?></span>
  <span class="label label-info">Fecha: &nbsp;<?= Html::encode($model->publish_up) ?></span>
  <span class="label label-success">Comentarios: &nbsp;<?= Html::encode($model->comment_count) ?></span><br>
  <br>
  <?php if ($model->comment_status == '1'): ?>
  
      <label>Comentario:</label>
      <textarea class="form-control" rows="3"></textarea>
      <br> 
      <?= Html::a('Comentar',
            ['blogdetails', 'id' => $model->comment_count],
            ['class' => 'btn btn-success btn-xs']
            );
        ?>
        &nbsp;
        <?php endif ?>
        <?= Html::a('Leer Más',
            ['blogdetails', 'id' => $model->id],
            ['class' => 'btn btn-primary btn-xs']

            );
        ?>
    </div>
  <?php }  ?>

  </div>
</div>


</body>
</html>

    <div>
        <?= LinkPager::widget([
            'pagination' => $pages
            ]);
        ?>
    </div>

</div>