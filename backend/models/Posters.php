<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "posters".
 *
 * @property integer $poster_id
 * @property string $poster_name
 * @property string $poster_date
 * @property string $poster_status
 */
class Posters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['poster_name', 'poster_date', 'poster_status'], 'required'],
            [['poster_date'], 'safe'],
            [['poster_status'], 'string'],
            [['poster_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'poster_id' => 'Poster ID',
            'poster_name' => 'Poster Name',
            'poster_date' => 'Poster Date',
            'poster_status' => 'Poster Status',
        ];
    }
}
