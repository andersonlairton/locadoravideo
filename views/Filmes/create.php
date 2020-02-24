<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Filmes */

$this->title = 'Create Filmes';
$this->params['breadcrumbs'][] = ['label' => 'Filmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filmes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
