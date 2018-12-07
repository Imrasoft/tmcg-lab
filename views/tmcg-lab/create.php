<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TmcgLab */

$this->title = 'New Lab Service';
$this->params['breadcrumbs'][] = ['label' => 'Tmcg Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmcg-lab-create">

    <h3 style="color:darkcyan"><?= Html::encode($this->title) ?></h3>
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
