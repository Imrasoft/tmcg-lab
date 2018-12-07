<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TmcgLabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'TMCG Lab Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmcg-lab-index">

    <h3 style="color:darkcyan"><?= Html::encode($this->title) ?></h3>
    <br>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('New Lab Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'patient_id',
            'name',
            'contact',
            'gender',
            //'age',
            //'location',
            //'chronic_patient',
            //'chronic_disease',
            'presenting_complaint:ntext',
            //'contact_type',
            //'ready_to_pay',
            //'pay_status',
            //'no_pay_reason',
            //'client_type',
            //'pickup_location',
            //'test_request_time',
            //'sample_collection_time',
            //'tmcg_delivery_time',
            //'secondary_lab_pickup',
            //'result_time_lab',
            //'result_time_callcenter',
            //'turn_around_time',
            //'client_rating',
            //'client_feedback',
            //'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
