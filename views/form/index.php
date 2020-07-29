<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'accountno') ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'card_number') ?>

    <?= $form->field($model, 'new_card_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>