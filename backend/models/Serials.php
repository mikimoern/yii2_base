<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "serials".
 *
 * @property integer $serial_id
 * @property string $serial_name
 * @property string $serial_img
 * @property string $serial_description
 * @property integer $serial_trailler_id
 * @property string $serial_genre
 * @property string $serial_period
 * @property integer $serial_country_id
 * @property string $serial_producer
 * @property string $serial_cast
 *
 * @property Country $serialCountry
 * @property Traillers $serialTrailler
 */
class Serials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'serials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['serial_name', 'serial_img', 'serial_description', 'serial_trailler_id', 'serial_genre', 'serial_period', 'serial_country_id', 'serial_producer', 'serial_cast'], 'required'],
            [['serial_description', 'serial_cast'], 'string'],
            [['serial_trailler_id', 'serial_country_id'], 'integer'],
            [['serial_name'], 'string', 'max' => 150],
            [['file'], 'safe'],
            [['file'], 'file'],
            [['serial_img', 'serial_genre', 'serial_producer'], 'string', 'max' => 250],
            [['serial_period'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serial_id' => 'Serial ID',
            'serial_name' => 'Название',
            //'serial_img' => 'Serial Img',
            'file' => 'Изображение',
            'serial_description' => 'Описание',
            'serial_trailler_id' => 'Ид трейлера',
            'serial_genre' => 'Жанр',
            'serial_period' => 'Год',
            'serial_country_id' => 'Страна',
            'serial_producer' => 'Режиссер',
            'serial_cast' => 'В ролях',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSerialCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'serial_country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSerialTrailler()
    {
        return $this->hasOne(Traillers::className(), ['trailler_id' => 'serial_trailler_id']);
    }
}
