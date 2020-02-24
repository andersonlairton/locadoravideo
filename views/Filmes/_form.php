<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Filmes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filmes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'duracao')->textInput() ?>

    <?= $form->field($model, 'Sinopse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Disponivel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Categoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
