<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Emprestimo;

/**
 * EmprestimoSearch represents the model behind the search form of `app\models\Emprestimo`.
 */
class EmprestimoSearch extends Emprestimo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Id_cliente', 'Id_filme'], 'integer'],
            [['Data_Locacao', 'Data_Devolucao', 'Dia_devolvido'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Emprestimo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'Id_cliente' => $this->Id_cliente,
            'Id_filme' => $this->Id_filme,
            'Data_Locacao' => $this->Data_Locacao,
            'Data_Devolucao' => $this->Data_Devolucao,
            'Dia_devolvido' => $this->Dia_devolvido,
        ]);

        return $dataProvider;
    }
}
