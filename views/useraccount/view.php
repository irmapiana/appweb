<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bank */

$this->title = $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'UserAccount', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useraccount-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userid], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'accountno',
            'account_name',
            'userid',
            'card_number',
        ],
    ]) ?>

</div>
