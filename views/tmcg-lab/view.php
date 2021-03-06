<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TmcgLab */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tmcg Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmcg-lab-view">

    <h3 style="color:darkcyan"><?= $model->patient_id ?></h3>
    <h5><?= Html::encode($this->title) ?></h5>
    <h5><?= $model->contact ?></h5>
    <h5><?= $model->location ?></h5>
    <br>
    <hr>

    <div class="row">
        <div class="col-lg-6">
            <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'patient_id',
            'name',
            'contact',
            'gender',
            'age',
            'location',
            'chronic_patient',
            'chronic_disease',
            'presenting_complaint:ntext',
            'contact_type',
            // 'test_request_time',
            // 'sample_collection_time',
            // 'tmcg_delivery_time',
            // 'secondary_lab_pickup',
            // 'result_time_lab',
            // 'result_time_callcenter',
            // 'turn_around_time',
            // 'client_rating',
            // 'client_feedback',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
        ],
    ]) ?>
            
        </div>

         <div class="col-lg-6">
            <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'patient_id',
            // 'name',
            // 'contact',
            // 'gender',
            // 'age',
            // 'location',
            // 'chronic_patient',
            // 'chronic_disease',
            // 'presenting_complaint:ntext',
            // 'contact_type',
            'ready_to_pay',
            'pay_status',
            'pay_mode',
            'no_pay_reason',
            'client_type',
            'pickup_location',
            'test_request_time',
            'sample_collection_time',
            'tmcg_delivery_time',
            'secondary_lab_pickup',
            'result_time_lab',
            'result_time_callcenter',
            'turn_around_time',
        ],
    ]) ?>
            
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-6">
             <h3 style="color:darkcyan">Lab Results</h3>
            <br>
             <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'result_status',
            'result_detail',
            'result_time_callcenter',
            'turn_around_time',
        ],
    ]) ?>
            
        </div>
        <div class="col-lg-6">
            <h3 style="color:darkcyan">Rating and Feedback</h3>
            <br>
             <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'client_rating',
            'client_feedback',
        ],
    ]) ?>
            
        </div>
        
    </div>


   <div class="row">
        <div class="col-lg-6">
             <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'created_by',
            'created_at',
        ],
    ]) ?>
            
        </div>
        <div class="col-lg-6">
             <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'updated_by',
            'updated_at',
        ],
    ]) ?>
            
        </div>
        
    </div>

    <hr>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


</div>
