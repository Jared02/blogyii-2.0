<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use marqu3s\summernote\Summernote;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'excerpt')->widget(Summernote::className(),[
    'clientOptions' =>[
        'lang' => 'es-ES',
        'toolbar' => [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough','superscript','subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul','ol','paragraph']],
            ['height', ['height']]
           ]
        ],
    ]) ?>

    <?= $form->field($model, 'body')->widget(Summernote::className(),[
        'clientOptions' =>[
            'lang' => 'es-ES',
            ],
        ]) ?>

    <?= $form->field($model, 'status')
    ->dropDownList(['Por favor elija uno','Activo', 'Pendiente']);?>

    
    //Cerrado(no se puede comentar nada) o Abierto(se puede publicar lo que sea).
    <?= $form->field($model, 'comment_status')
    ->dropDownList(['Por favor elija uno','Abierto', 'Cerrado']);?>

    <?= $form->field($model, 'comment_count')->textInput() ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'publish_up')->textInput() ?>
    //Calendario la funcionalidad que caduque.
    con datacontrol de Krajee

    <?= $form->field($model,'publish_down')->widget(DatePicker::className(),[
                  'dateFormat' => 'yyyy-MM-dd',
                  'clientOptions' => [
                         'yearRange' => '-115:+0', 
                         'changeYear' => true]
    ]) ?>

    <?= $form->field($model, 'blog_categories')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
