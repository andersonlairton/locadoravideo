<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmprestimoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emprestimo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Id_cliente') ?>

    <?= $form->field($model, 'Id_filme') ?>

    <?= $form->field($model, 'Data_Locacao') ?>

    <?= $form->field($model, 'Data_Devolucao') ?>

    <?php // echo $form->field($model, 'Dia_devolvido') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
