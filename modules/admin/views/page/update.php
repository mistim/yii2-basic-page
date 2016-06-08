<?php

use yii\helpers\Html;
use mistim\theme\adminlte\widgets\Box;

/* @var $this yii\web\View */
/* @var $model mistim\models\Page */

$this->title = Yii::t('admin', 'Update {modelClass}: ', [
    'modelClass' => 'Page',
]) . $model->intPageID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->intPageID, 'url' => ['view', 'id' => $model->intPageID]];
$this->params['breadcrumbs'][] = Yii::t('admin', 'Update');
?>
<div class="page-update">

    <p>
        <?= Html::a(Yii::t('admin', 'Back to list'), ['index'], ['class' => 'btn btn-info']) ?>
    </p>

    <div class="row">
        <div class="col-xs-12">
            <?php Box::begin(
                [
                    'options'     => ['class' => 'box-success'],
                    'bodyOptions' => [
                        'class' => 'table-responsive'
                    ],
                ]
            ); ?>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            <?php Box::end(); ?>
        </div>
    </div>

</div>
