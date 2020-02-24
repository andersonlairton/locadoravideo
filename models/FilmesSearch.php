<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Filmes;

/**
 * FilmesSearch represents the model behind the search form of `app\models\Filmes`.
 */
class FilmesSearch extends Filmes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'duracao'], 'integer'],
            [['titulo', 'Sinopse', 'Disponivel', 'Categoria'], 'safe'],
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
        $query = Filmes::find();

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
            'duracao' => $this->duracao,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'Sinopse', $this->Sinopse])
            ->andFilterWhere(['like', 'Disponivel', $this->Disponivel])
            ->andFilterWhere(['like', 'Categoria', $this->Categoria]);

        return $dataProvider;
    }
}
