<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numbers".
 *
 * @property string $start_date
 * @property string $expire_date
 */
class Numbers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'numbers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'expire_date'], 'required'],
            [['start_date', 'expire_date'], 'date', 'format' => 'yyyy-MM-dd'],
            ['expire_date', 'compare' , 'compareAttribute' => 'start_date', 'operator' => '>='],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'start_date' => 'Start Date',
            'expire_date' => 'Expire Date',
        ];
    }
}
