<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emprestimo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_cliente')->textInput() ?>

    <?= $form->field($model, 'Id_filme')->textInput() ?>

    <?= $form->field($model, 'Data_Locacao')->textInput() ?>

    <?= $form->field($model, 'Data_Devolucao')->textInput() ?>

    <?= $form->field($model, 'Dia_devolvido')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
