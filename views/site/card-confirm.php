<?php   
    use yii\helpers\Html;   
    ?>   
    <p>You have entered the following information:</p>   
    <ul>   
        <li><label>Name</label>: <?= Html::encode($model->name) ?></li>   
        <li><label>Contact</label>: <?= Html::encode($model->contact) ?></li>   
        <li><label>Course</label>: <?= Html::encode($model->course) ?></li>   
     <li><label>Email</label>: <?= Html::encode($model->email) ?></li>   
    </ul>  