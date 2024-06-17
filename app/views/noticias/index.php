<?php

use app\models\Noticias;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use mdm\admin\components\Helper;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'DESPORTO - Notícias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias-index">

    <h1>Notícias</h1>

    <p>
        <?= Html::a('Registar notícia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'conteudo:ntext',
            'dataPublicacao',
            [
                'class' => ActionColumn::className(),
                /*'template' => Helper::filterActionColumn('{view}{delete}{posting}'),*/
                'urlCreator' => function ($action, Noticias $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); 
    
    /*if(Helper::checkRoute('delete')){
        echo Html::a(Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->name], [
            'class' => 'btn btn-danger',
            'data-confirm' => Yii::t('rbac-admin', 'Are you sure to delete this item?'),
            'data-method' => 'post',
        ]);
    }*/
    
    ?>
    


</div>
