<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Maccount */

$this->title = 'Tambah Account';
$this->params['breadcrumbs'][] = ['label' => 'Maccounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maccount-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
