<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_account_type}}".
 *
 * @property integer $id
 * @property string $type
 * @property string $description
 */
class BankAccountType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_account_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
