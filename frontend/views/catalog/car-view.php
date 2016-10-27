<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Application to require';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container padding-left-0">
    <div class="row">
    	<img class="max-70p col-md-5" src=<?php echo $model['photos'];?>>
    	<div class="col-md-5">
    		<h3><?php echo $model['name'];?></h3>
    	</div>
    	<div class="col-md-5">
    		 <?php echo $model['description'];?>
    	</div>
    </div>
</div>


<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
            'id' => 'contact-form',
            'action' => ['message'],
            'method' => 'post',
            ]); ?>

                <?= $form->field($contact, 'name') ?>

                <?= $form->field($contact, 'phone') ?>

                <?= $form->field($contact, 'model_id')->hiddenInput(['value' => $model['id']])->label(false) ?>

                <?= $form->field($contact, 'brand_id')->hiddenInput(['value' => $model['logo_id']])->label(false) ?>


         
              
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

