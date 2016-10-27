<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PurchaseApplication */

$this->title = 'Update Purchase Application: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Purchase Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="purchase-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
