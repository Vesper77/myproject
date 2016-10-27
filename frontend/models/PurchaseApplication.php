<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "purchase_application".
 *
 * @property integer $id
 * @property string $phone_number
 * @property integer $brand_id
 * @property integer $model_id
 */
class PurchaseApplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase_application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','phone', 'brand_id', 'model_id'], 'required'],
            [['brand_id', 'model_id'], 'integer'],
            [['phone', 'name'], 'string', 'max' => 255],
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
            'phone' => 'Phone Number',
            'brand_id' => 'Brand ID',
            'model_id' => 'Model ID',
        ];
    }
}
