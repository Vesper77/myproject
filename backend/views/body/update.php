<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Body */

$this->title = 'Update Body: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bodies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="body-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
