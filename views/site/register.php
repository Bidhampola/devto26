<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Posts $model */
/** @var ActiveForm $form */
?>
<div class="site-post">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'first_name') ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'last_name') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'username') ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'role')->dropDownList(['admin'=>'Admin', 'system_users'=>'System User']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
        <div class="col-sm-6">
            <?= ''//$form->field($model, 'role') ?>
        </div>
    </div>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-post -->
