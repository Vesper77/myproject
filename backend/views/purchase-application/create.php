<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PurchaseApplication */

$this->title = 'Create Purchase Application';
$this->params['breadcrumbs'][] = ['label' => 'Purchase Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-application-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
