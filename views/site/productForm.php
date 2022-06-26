<?php

use Yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
if (Yii::$app->session->hasFlash("success")) {
    echo Yii::$app->session->getFlash("success");
}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>
<?= $form->field($model, 'price'); ?>
<?= $form->field($model, 'details'); ?>

<?= Html::submitButton('submit', ['class' => 'btn btn-success']); ?>