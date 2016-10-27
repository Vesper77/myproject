<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "model".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property resource $photos
 * @property string $description
 * @property integer $logo_id
 * @property integer $body_type_id
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'photos', 'description', 'logo_id', 'body_type_id'], 'required'],
            [['photos'], 'string'],
            [['logo_id', 'body_type_id'], 'integer'],
            [['name', 'slug', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'photos' => 'Photos',
            'description' => 'Description',
            'logo_id' => 'Logo ID',
            'body_type_id' => 'Body Type ID',
        ];
    }
}
