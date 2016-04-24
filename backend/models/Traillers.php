<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "traillers".
 *
 * @property integer $trailler_id
 * @property string $trailler_name
 * @property string $trailler_link
 * @property string $trailler_active
 *
 * @property Movies[] $movies
 * @property Serials[] $serials
 */
class Traillers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'traillers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trailler_name', 'trailler_link', 'trailler_active'], 'required'],
            [['trailler_link', 'trailler_active'], 'string'],
            [['trailler_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trailler_id' => 'Trailler ID',
            'trailler_name' => 'Trailler Name',
            'trailler_link' => 'Trailler Link',
            'trailler_active' => 'Trailler Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movies::className(), ['movie_trailler_id' => 'trailler_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSerials()
    {
        return $this->hasMany(Serials::className(), ['serial_trailler_id' => 'trailler_id']);
    }
}
