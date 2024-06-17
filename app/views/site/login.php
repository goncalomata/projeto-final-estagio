<?php

/* @var yii\web\View $this */
/* @var yii\bootstrap5\ActiveForm $form */
/* @var app\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'DESPORTO - Entrar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1>Iniciar sessão</h1>

    <p>Por favor preencha os seguintes dados para iniciar sessão.</p>

    <div class="row">
        <div class="col-lg-5">

            <?php /*$form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); */?>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <div>
            <p>Ainda não tem conta? <a href="<?= \yii\helpers\Url::to(['site/registar']) ?>">Registe-se</a></p>
        </div>
    </div>
</div>
