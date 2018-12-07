<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TmcgLab */

$this->title = 'Update Lab Service for: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tmcg Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmcg-lab-update">

    <h3 style="darkcyan"><?= Html::encode($this->title) ?></h3>
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
