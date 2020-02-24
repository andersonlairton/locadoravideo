<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilmesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filmes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'duracao') ?>

    <?= $form->field($model, 'Sinopse') ?>

    <?= $form->field($model, 'Disponivel') ?>

    <?php // echo $form->field($model, 'Categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
