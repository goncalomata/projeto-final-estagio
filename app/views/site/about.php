<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'DESPORTO - Sobre';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCss("
.site-about {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .title {
        font-size: 36px;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Roboto', sans-serif;
    }
    .about-section {
        margin-bottom: 40px;
    }
    .about-section h2 {
        font-size: 24px;
        color: #007bff;
        margin-bottom: 10px;
    }
    .intro-text, .content-text {
        font-size: 18px;
        color: #666;
        margin-bottom: 20px;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
    }
    .image-container {
        text-align: center;
        margin-top: 30px;
    }
    .about-image {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .team-member {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .team-photo {
        border-radius: 50%;
        margin-right: 15px;
        width: 60px;
        height: 60px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .team-text {
        font-size: 16px;
        color: #444;
    }
    .testimonial {
        font-style: italic;
        color: #555;
        border-left: 3px solid #007bff;
        padding-left: 15px;
        margin-bottom: 20px;
    }
    .social-media {
        text-align: center;
        margin-top: 20px;
    }
    .social-media a {
        color: #555;
        margin: 0 10px;
        font-size: 24px;
        text-decoration: none;
    }
    .social-media a:hover {
        color: #007bff;
    }
")

?>
<div class="site-about">
    
    <div class="site-about">
    <h1 class="title">Sobre</h1>

    <section class="about-section">
        <h2>Nossa História</h2>
        <p class="intro-text">
            Bem-vindo ao nosso noticiário de futebol, a sua fonte definitiva para todas as notícias mais importantes do futebol português e mundial. Fundado em 2024 por Gonçalo Mata após um estágio do mesmo em que teve de criar um site, site que escolheu ser de notícias, Gonçalo gostou e sentiu prazer a fazer o trabalho então prosseguiu com a ideia de criar um site de notícias focado no futebol português, e qual melhor nome que "Futebol Português" para um noticiário? E assim nasceu o site Futebol Português, sediado em Santa Maria da Feira, terra natal do fundador. O nosso objetivo é proporcionar aos nossos leitores uma experiência informativa, simples e eficiente.
        </p>
    </section>
    <hr>
    <section class="about-section">
        <h2>Missão, Visão, Valores e Diferencial</h2>
        <p class="content-text">
            Nossa missão é ser a sua primeira escolha para notícias de futebol, mantendo-o informado e conectado com o que realmente importa no mundo do futebol. Esforçamo-nos para oferecer uma experiência de leitura que permita absorver o máximo de informações num curto período de tempo.
        </p>
        <p class="content-text">
            Visamos criar uma comunidade de apaixonados por futebol e principalmente pelo futebol português, oferecendo notícias precisas, análises profundas, palpites feitos por analistas de dados profissionais e cobertura abrangente dos eventos mais importantes.
        </p>
        <p class="content-text">
            Os nossos valores incluem simplicidade, precisão, paixão pelo futebol e compromisso com nossos leitores.
        </p>
        <p class="content-text">
            Para nos destacarmos no quesito de sites de notícias de futebol, teriamos de pisar fora da linha e criar o nosso diferencial, então decidimos usar a simplicidade e informações curtas mas muito informativas a nosso favor para que num curto período de tempo o leitor possa absorver o máximo de informações com um facilidade em acessar ao que deseja sem muito esforço
        </p>
    </section>
    <hr>
    <section class="about-section">
        <h2>A nossa equipa</h2>
        <div class="team-member">
            <img src="<?php echo Yii::getAlias('@web/imagens/goncalo_mata.jpg');?>" alt="Gonçalo Mata" class="team-photo">
            <p class="team-text"><strong>Gonçalo Mata</strong> - Fundador e Editor Chefe</p>
        </div>
        <div class="team-member">
            <img src="<?php echo Yii::getAlias('@web/imagens/paulo_pinto.jpg');?>" alt="Paulo Pinto" class="team-photo">
            <p class="team-text"><strong>Paulo Pinto</strong> - Diretor Financeiro</p>
        </div>
        <div class="team-member">
            <img src="<?php echo Yii::getAlias('@web/imagens/alexandre_bras.jpg');?>" alt="Alexandre Bras" class="team-photo">
            <p class="team-text"><strong>Alexandre Brás</strong> - Diretor de Operações e Diretor de Segurança</p>
        </div>
    </section>
    <hr>
    <section class="about-section">
        <h2>Fotos Nossa Equipa</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/trabalho1.jpg');?>" alt="Equipa 1" class="gallery-photo" style="max-width:720px;">
                <p class="gallery-caption">Gonçalo Mata e Paulo Pinto no jogo Porto-Arsenal no Estádio do Dragão</p>
            </div>
            <div class="gallery-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/trabalho2.jpg');?>" alt="Equipa 2" class="gallery-photo" style="max-width:720px;">
                <p class="gallery-caption">Gonçalo Mata numa viagem a Paris para entrevistar Danilo Pereira</p>
            </div>
            <div class="gallery-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/trabalho3.jpg');?>" alt="Equipa 3" class="gallery-photo" style="max-width:720px;">
                <p class="gallery-caption">Alexandre Brás a trabalhar as operações da empresa</p>
            </div>
            <div class="gallery-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/trabalho4.jpg');?>" alt="Equipa 4" class="gallery-photo" style="max-width:720px;">
                <p class="gallery-caption">Foto de conjunto de Gonçalo Mata com os restantes membros equipa</p>
            </div>
        </div>
    </section>
    <hr>
    <section class="about-section">
        <h2>Depoimentos</h2>
        <blockquote class="testimonial">
            "O melhor site para acompanhar notícias do futebol português!" - Paulo Futre
        </blockquote>
        <blockquote class="testimonial">
            "Mesmo na Arábia acompanho as notícias do futebol de Portugal em www.futebolportugues.pt" - Jorge Jesus
        </blockquote>
        <blockquote class="testimonial">
            "A melhor coisa que fiz foi ter me inscrito na Newsletter do Futebol Português!" - Ricardo Quaresma
        </blockquote>
        <blockquote class="testimonial">
            "A primeira vez que ouvi falar no nome Jota Silva foi no site Futebol Português sem este site não teria falado no nome dele a Roberto Martinez" - Ricardo Carvalho
        </blockquote>
    </section>
    <hr>
    <section class="about-section">
        <h2>Parceiros</h2>
        <div class="partners">
            <div class="partner-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/parceiro1.jpg');?>" alt="Parceiro 1" class="partner-photo" style="max-width:720px;">
                <br><br>
            </div>
            <div class="partner-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/parceiro2.jpg');?>" alt="Parceiro 2" class="partner-photo" style="max-width:720px;">
                <br><br>
            </div>
            <div class="partner-item">
                <img src="<?php echo Yii::getAlias('@web/imagens/parceiro3.jpg');?>" alt="Parceiro 3" class="partner-photo" style="max-width:720px;">
                <br><br>
            </div>
        </div>
    </section>

    <!--<section class="about-section">
        <h2>Redes Sociais</h2>
        <p class="content-text">
            Siga-nos nas redes sociais:
        </p>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </section>-->

</div>
</div>
