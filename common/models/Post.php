<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property string $anons
 * @property string $articles
 * @property string $profile_pic
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'anons', 'articles','file'], 'required'],
            [['file'], 'file'],
            [['anons', 'articles'], 'string'],
            [['title', 'profile_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'anons' => 'Anons',
            'articles' => 'Articles',
            'profile_pic' => 'Pic',
        ];
    }
}
