<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $Id
 * @property int|null $Id_cliente
 * @property int|null $Id_filme
 * @property string|null $Data_Locacao
 * @property string|null $Data_Devolucao
 * @property string|null $Dia_devolvido
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_cliente', 'Id_filme'], 'integer'],
            [['Data_Locacao', 'Data_Devolucao', 'Dia_devolvido'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_cliente' => 'Id Cliente',
            'Id_filme' => 'Id Filme',
            'Data_Locacao' => 'Data Locacao',
            'Data_Devolucao' => 'Data Devolucao',
            'Dia_devolvido' => 'Dia Devolvido',
        ];
    }
}
