<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Movies;

/**
 * MoviesSearch represents the model behind the search form about `backend\models\Movies`.
 */
class MoviesSearch extends Movies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_id', 'movie_trailler_id'], 'integer'],
            [['movie_name', 'movie_country_id', 'movie_img', 'movie_description', 'movie_genre', 'movie_year', 'movie_manager', 'movie_producer', 'movie_scenario', 'movie_cast'], 'safe'],
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
        $query = Movies::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('movieCountry');

        $query->andFilterWhere([
            'movie_id' => $this->movie_id,
            'movie_trailler_id' => $this->movie_trailler_id,
        ]);

        $query->andFilterWhere(['like', 'movie_name', $this->movie_name])
            ->andFilterWhere(['like', 'movie_img', $this->movie_img])
            ->andFilterWhere(['like', 'movie_description', $this->movie_description])
            ->andFilterWhere(['like', 'movie_genre', $this->movie_genre])
            ->andFilterWhere(['like', 'movie_year', $this->movie_year])
            ->andFilterWhere(['like', 'movie_manager', $this->movie_manager])
            ->andFilterWhere(['like', 'movie_producer', $this->movie_producer])
            ->andFilterWhere(['like', 'movie_scenario', $this->movie_scenario])
            ->andFilterWhere(['like', 'movie_cast', $this->movie_cast])
            ->andFilterWhere(['like', 'country.country_name', $this->movie_country_id]);

        return $dataProvider;
    }
}
