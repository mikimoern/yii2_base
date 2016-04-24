<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property integer $movie_id
 * @property string $movie_name
 * @property string $movie_img
 * @property string $movie_description
 * @property integer $movie_trailler_id
 * @property string $movie_genre
 * @property string $movie_year
 * @property integer $movie_country_id
 * @property string $movie_manager
 * @property string $movie_producer
 * @property string $movie_scenario
 * @property string $movie_cast
 *
 * @property Country $movieCountry
 * @property Traillers $movieTrailler
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'movies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_name', 'movie_description', 'movie_trailler_id', 'movie_genre', 'movie_year', 'movie_country_id', 'movie_manager', 'movie_producer', 'movie_scenario', 'movie_cast'], 'required'],
            [['movie_description', 'movie_cast'], 'string'],
            [['movie_trailler_id', 'movie_country_id'], 'integer'],
            [['movie_name'], 'string', 'max' => 150],
            [['file'], 'safe'],
            [['file'], 'file'],
            [['movie_img', 'movie_manager', 'movie_producer', 'movie_scenario'], 'string', 'max' => 250],
            [['movie_genre'], 'string', 'max' => 100],
            [['movie_year'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'movie_id' => 'Movie ID',
            'movie_name' => 'Название',
            //'movie_img' => 'Movie Img',
            'file' => 'Изображение',
            'movie_description' => 'Описание',
            'movie_trailler_id' => 'Ид трейлера',
            'movie_genre' => 'Жанр',
            'movie_year' => 'Год',
            'movie_country_id' => 'Страна',
            'movie_manager' => 'Режиссер',
            'movie_producer' => 'Продюсеры',
            'movie_scenario' => 'Сценарий',
            'movie_cast' => 'В ролях',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovieCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'movie_country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovieTrailler()
    {
        return $this->hasOne(Traillers::className(), ['trailler_id' => 'movie_trailler_id']);
    }
}
