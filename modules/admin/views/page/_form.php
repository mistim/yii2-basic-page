<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mistim\models\Page */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin([
        'id' => 'page-form',
        'layout' => 'horizontal',
    ]); ?>

    <?= $form->field($model, 'varTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'varTeaser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'varText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isActive')->textInput() ?>


    <div class="col-sm-6 col-sm-offset-3">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('admin', 'Create') : Yii::t('admin', 'Update'), [
            'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
        ]) ?>
        <?php if ($model->isNewRecord): ?>
            <?= Html::resetButton(Yii::t('admin', 'Reset'), ['class' => 'btn btn-warning']) ?>
        <?php endif; ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
