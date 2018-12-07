<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TmcgLabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmcg-lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'contact') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'chronic_patient') ?>

    <?php // echo $form->field($model, 'chronic_disease') ?>

    <?php // echo $form->field($model, 'presenting_complaint') ?>

    <?php // echo $form->field($model, 'contact_type') ?>

    <?php // echo $form->field($model, 'ready_to_pay') ?>

    <?php // echo $form->field($model, 'pay_status') ?>

    <?php // echo $form->field($model, 'no_pay_reason') ?>

    <?php // echo $form->field($model, 'client_type') ?>

    <?php // echo $form->field($model, 'pickup_location') ?>

    <?php // echo $form->field($model, 'test_request_time') ?>

    <?php // echo $form->field($model, 'sample_collection_time') ?>

    <?php // echo $form->field($model, 'tmcg_delivery_time') ?>

    <?php // echo $form->field($model, 'secondary_lab_pickup') ?>

    <?php // echo $form->field($model, 'result_time_lab') ?>

    <?php // echo $form->field($model, 'result_time_callcenter') ?>

    <?php // echo $form->field($model, 'turn_around_time') ?>

    <?php // echo $form->field($model, 'client_rating') ?>

    <?php // echo $form->field($model, 'client_feedback') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
