<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PurchaseApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Purchase Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-application-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Purchase Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'phone_number',
            'brand_id',
            'model_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
