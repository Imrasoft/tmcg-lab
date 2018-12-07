<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab_service_options".
 *
 * @property int $id
 * @property string $name
 * @property string $category
 */
class LabServiceOptions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lab_service_options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category'], 'string', 'max' => 50],
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
            'category' => 'Category',
        ];
    }
}
