<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\datetime\DateTimePicker;
use app\models\LabServiceOptions;
use kartik\rating\StarRating;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TmcgLab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmcg-lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <div>

    <?= $form->field($model, 'patient_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presenting_complaint')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

    <?= $form->field($model, 'gender')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'gender'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chronic_patient')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'yesno'")->all(), 'id', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

    <?= $form->field($model, 'chronic_disease')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'chronic disease'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>


    <?= $form->field($model, 'contact_type')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'contact type'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

    <?= $form->field($model, 'ready_to_pay')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'yesno'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>


    <?= $form->field($model, 'pay_status')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'pay status'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>


    <?= $form->field($model, 'pay_mode')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'mode of payment'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

    <?= $form->field($model, 'no_pay_reason')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'client_type')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'client type'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

    <?= $form->field($model, 'pickup_location')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'sample pickup place'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

   <?= $form->field($model, 'test_request_time')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Enter event time ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
     ?>


    <?= $form->field($model, 'sample_collection_time')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Enter event time ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
     ?>


    <?= $form->field($model, 'tmcg_delivery_time')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Enter event time ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
     ?>


    <?= $form->field($model, 'secondary_lab_pickup')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Enter event time ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
     ?>

    <?= $form->field($model, 'result_time_lab')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Enter event time ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
     ?>

    <?= $form->field($model, 'result_time_callcenter')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Enter event time ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
     ?>

    <?= $form->field($model, 'turn_around_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result_status')->widget(Select2::classname(), [       
                  'data' => ArrayHelper::map(LabServiceOptions::find()->where("category = 'result status'")->all(), 'name', 'name'),
                  'options' => ['placeholder' => 'Select ...'],
                  'pluginOptions' => [
                      'allowClear' => true
                  ],
                ]);

            ?>

    <?= $form->field($model, 'result_detail')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'client_rating')->widget(StarRating::classname(), [
            'pluginOptions' => ['step' => 0.1]
            ]);
        ?>

    <?= $form->field($model, 'client_feedback')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
