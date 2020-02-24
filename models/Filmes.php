<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "filmes".
 *
 * @property int $Id
 * @property string $titulo
 * @property int $duracao
 * @property string $Sinopse
 * @property string $Disponivel
 * @property string $Categoria
 */
class Filmes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filmes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'duracao', 'Sinopse', 'Disponivel', 'Categoria'], 'required'],
            [['titulo', 'Sinopse'], 'string'],
            [['duracao'], 'integer'],
            [['Disponivel', 'Categoria'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'titulo' => 'Titulo',
            'duracao' => 'Duracao',
            'Sinopse' => 'Sinopse',
            'Disponivel' => 'Disponivel',
            'Categoria' => 'Categoria',
        ];
    }
}
