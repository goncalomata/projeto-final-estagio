<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Noticias $model */

$this->title = $model->titulo;
$id = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$this->registerCssFile("@web/css/w3.css");
?>
<div class="w3-container w3-content w3-padding">
    <hr>
    <div class="w3-container">
        <h3 style="text-shadow:1px 1px 0 #444"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="w3-row w3-padding">
        <div class="w3-half">
            <img src="<?= Url::to('@web/imagens/noticia'.$id.'_1.jpg') ?>" alt="Imagem 1" >
        </div>
        <div class="w3-half">
            <img src="<?= Url::to('@web/imagens/noticia'. $id .'_2.jpg') ?>" alt="Imagem 2" >
        </div>
    </div>
    <div class="w3-container">
        <p><?= Html::encode($model->conteudo) ?></p>
        <hr>
        <p><?= \yii\helpers\Html::a('&laquo; Voltar', ['site/index'], ['class' => 'w3-button w3-light-grey']) ?></p>
    </div>
</div>
