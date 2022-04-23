<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup m-2">
    <h1>Ro'yxatdan o'tish</h1>

    <p>Roʻyxatdan oʻtish uchun quyidagi maydonlarni toʻldiring:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Foydalanuvchi nomi') ?>

                <?= $form->field($model, 'email')->label('Elektron pochta') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Parol') ?>

                <div class="form-group">
                    <?= Html::submitButton('Ro\'yxatdan o\'tish', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
