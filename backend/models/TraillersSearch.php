<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Traillers;

/**
 * TraillersSearch represents the model behind the search form about `backend\models\Traillers`.
 */
class TraillersSearch extends Traillers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trailler_id'], 'integer'],
            [['trailler_name', 'trailler_link', 'trailler_active'], 'safe'],
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
        $query = Traillers::find();

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
            'trailler_id' => $this->trailler_id,
        ]);

        $query->andFilterWhere(['like', 'trailler_name', $this->trailler_name])
            ->andFilterWhere(['like', 'trailler_link', $this->trailler_link])
            ->andFilterWhere(['like', 'trailler_active', $this->trailler_active]);

        return $dataProvider;
    }
}
