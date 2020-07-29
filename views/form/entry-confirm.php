<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>No Rek</label>: <?= Html::encode($model->accountno) ?></li>
    <li><label>User ID</label>: <?= Html::encode($model->userid) ?></li>
    <li><label>No Kartu Lama</label>: <?= Html::encode($model->card_number) ?></li>
    <li><label>No Kartu Baru</label>: <?= Html::encode($model->new_card_number) ?></li>
</ul>