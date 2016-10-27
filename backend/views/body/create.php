<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Body */

$this->title = 'Create Body';
$this->params['breadcrumbs'][] = ['label' => 'Bodies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="body-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
