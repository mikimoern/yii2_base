<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Serials;

/**
 * SerialsSearch represents the model behind the search form about `backend\models\Serials`.
 */
class SerialsSearch extends Serials
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['serial_id', 'serial_trailler_id'], 'integer'],
            [['serial_name', 'serial_country_id', 'serial_img', 'serial_description', 'serial_genre', 'serial_period', 'serial_producer', 'serial_cast'], 'safe'],
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
        $query = Serials::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('serialCountry');

        $query->andFilterWhere([
            'serial_id' => $this->serial_id,
            'serial_trailler_id' => $this->serial_trailler_id,
        ]);

        $query->andFilterWhere(['like', 'serial_name', $this->serial_name])
            ->andFilterWhere(['like', 'serial_img', $this->serial_img])
            ->andFilterWhere(['like', 'serial_description', $this->serial_description])
            ->andFilterWhere(['like', 'serial_genre', $this->serial_genre])
            ->andFilterWhere(['like', 'serial_period', $this->serial_period])
            ->andFilterWhere(['like', 'serial_producer', $this->serial_producer])
            ->andFilterWhere(['like', 'serial_cast', $this->serial_cast])
            ->andFilterWhere(['like', 'country.country_name', $this->serial_country_id]);

        return $dataProvider;
    }
}
