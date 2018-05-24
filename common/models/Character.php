<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "character".
 *
 * @property int $id
 * @property string $name
 * @property string $descript
 * @property string $profile_pic
 */
class Character extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'character';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descript'], 'required'],
            [['descript'], 'string'],
            [['file'], 'file'],
            [['name', 'profile_pic'], 'string', 'max' => 255],
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
            'descript' => 'Descript',
            'file' => 'Profile Pic',
        ];
    }
}
