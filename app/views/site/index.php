<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'DESPORTO - Início';
$this->registerCssFile("@web/css/w3.css");
$this->registerCss("
.video-responsivo {
	overflow: hidden;
	padding-bottom: 56.25%;
	position: relative;
	height: 0;
	margin: 30px 0px
}
.video-responsivo iframe {
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	position: absolute;
}
.titulo-pag {
text-align: center;
font-family: 'Bebas Neue', sans-serif; 
font-size: 2 rem; 
font-weight: 100; 
color: rgb(33, 37, 41); 
text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
}
.titulo2 {
background-color: rgb(33, 37, 41);
color: #fff;
min-height: 60px;
padding-top: 5px;
}
.data {
    color: #aaa;
    font-size: 0.08 rem;
}
.texto {
    font-size: 0.8 rem;
    text-align: justify;
")
?>
<div class="w3-container w3-content w3-padding">

    <div class="w3-container">
            <h2 class="titulo-pag">Euro 2024</h2>
    </div>

        <div class="video-responsivo">
            <iframe src="https://www.youtube.com/embed/auZy-4wX3Qw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container mt-5">
    <h2 class="text-center">Próximos Jogos</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="<?php echo Yii::getAlias('@web/imagens/portugal.png');?>" alt="Portugal" class="img-fluid rounded-circle" width="100" height="100">
                        <img src="<?php echo Yii::getAlias('@web/imagens/chequia.png');?>" alt="Chéquia" class="img-fluid rounded-circle" width="100" height="100">
                        <h5 class="card-title mt-3"><strong>18/06</strong></h5>
                        <p class="card-text">20:00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="<?php echo Yii::getAlias('@web/imagens/turquia.png');?>" alt="Turquia" class="img-fluid rounded-circle" width="100" height="100">
                        <img src="<?php echo Yii::getAlias('@web/imagens/portugal.png');?>" alt="Portugal" class="img-fluid rounded-circle" width="100" height="100">
                        <h5 class="card-title mt-3"><strong>22/06</strong></h5>
                        <p class="card-text">17:00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="<?php echo Yii::getAlias('@web/imagens/georgia.png');?>" alt="Geórgia" class="img-fluid rounded-circle" width="100" height="100">
                        <img src="<?php echo Yii::getAlias('@web/imagens/portugal.png');?>" alt="Portugal" class="img-fluid rounded-circle" width="100" height="100">
                        <h5 class="card-title mt-3"><strong>26/06</strong></h5>
                        <p class="card-text">20:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-center">
        <hr>
        <h1 class="titulo2">Notícias</h1>
        <hr>
    </div>

        <div class="w3-row">
            <?php $i = 1; ?>
            <?php foreach ($noticias as $noticia): ?>
                <?php if ($i <= 3): ?>
                    <div class="w3-third w3-padding">
                        <img class="w3-hover-opacity" style="width:85%;" src="<?= Url::to('@web/imagens/noticia' . $i . '_1.jpg') ?>" alt="Notícia <?= $i ?>">
                        <p class="data"><?= Html::encode($noticia->dataPublicacao) ?></p>
                        <h5 class="titulo-not"><?= Html::encode($noticia->titulo) ?></h5>
                        <?php $ret = \yii\helpers\StringHelper::truncateWords($noticia->conteudo, 40, '...', false);?>
                        <p class="texto"><?= Html::encode($ret) ?></p>
                        <?php if ($i == 1): ?>
                        <p><a class="w3-button w3-light-grey" href="<?= Url::to(['site/detalhe', 'id' => $noticia->id]) ?>">Ler mais &raquo;</a></p>
                        <?php elseif ($i == 2): ?>
                            <p><a class="w3-button w3-light-grey" href="<?= Url::to(['site/detalhe', 'id' => $noticia->id]) ?>">Ler mais &raquo;</a></p>
                        <?php else: ?>
                            <p><a class="w3-button w3-light-grey" href="<?= Url::to(['site/detalhe', 'id' => $noticia->id]) ?>">Ler mais &raquo;</a></p>
                        <?php endif; ?>
                        <!--</div>-->
                    </div>
                    <?php $i++; ?>
                <?php else: ?>
                    <?php break; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
</div>
