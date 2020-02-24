<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $Id
 * @property string $Nome
 * @property int $Telefone
 * @property string $Email
 * @property int $Idade
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Telefone', 'Email', 'Idade'], 'required'],
            [['Nome', 'Email'], 'string'],
            [['Telefone', 'Idade'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nome' => 'Nome',
            'Telefone' => 'Telefone',
            'Email' => 'Email',
            'Idade' => 'Idade',
        ];
    }
}
