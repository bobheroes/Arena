<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property string $info
 * @property string $link
 * @property string $profile_pic
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'position', 'info', 'link'], 'required'],
            [['info'], 'string'],
            [['file'],'file'],
            [['name', 'position', 'link', 'profile_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
            'info' => 'Info',
            'link' => 'Link',
            'file' => 'Profile Pic',
        ];
    }
}
