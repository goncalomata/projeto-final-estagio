<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $conteudo
 * @property string $dataPublicacao
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'conteudo', 'dataPublicacao'], 'required'],
            [['conteudo'], 'string'],
            [['dataPublicacao'], 'safe'],
            [['titulo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Título',
            'conteudo' => 'Conteúdo',
            'dataPublicacao' => 'Data de Publicação',
        ];
    }
}
