<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $news_id
 * @property string $news_title
 * @property string $news_description
 * @property string $news_full_text
 * @property string $news_img
 * @property string $news_date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_title', 'news_description', 'news_full_text', 'news_date'], 'required'],
            [['news_description', 'news_full_text'], 'string'],
            [['news_date'], 'safe'],
            [['file'], 'safe'],
            [['file'], 'file'],
            [['news_title', 'news_img'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_title' => 'News Title',
            'news_description' => 'News Description',
            'news_full_text' => 'News Full Text',
            //'news_img' => 'News Img',
            'file' => 'News Img',
            'news_date' => 'News Date',
        ];
    }
}
