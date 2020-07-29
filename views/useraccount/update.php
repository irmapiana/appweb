<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bank */

$this->title = 'Update User Account: ' . $model->accountno;
$this->params['breadcrumbs'][] = ['label' => 'Useraccounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->accountno, 'url' => ['view', 'id' => $model->accountno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="useraccount-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
