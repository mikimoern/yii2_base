<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Posters;

/**
 * PostersSearch represents the model behind the search form about `backend\models\Posters`.
 */
class PostersSearch extends Posters
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['poster_id'], 'integer'],
            [['poster_name', 'poster_date', 'poster_status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Posters::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'poster_id' => $this->poster_id,
            'poster_date' => $this->poster_date,
        ]);

        $query->andFilterWhere(['like', 'poster_name', $this->poster_name])
            ->andFilterWhere(['like', 'poster_status', $this->poster_status]);

        return $dataProvider;
    }
}
