<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_interest}}".
 *
 * @property integer $id
 * @property string $rate
 * @property string $name
 * @property string $create_date
 * @property string $modify_date
 * @property integer $bank_account_type_id
 */
class BankInterest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_interest}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rate'], 'number'],
            [['create_date', 'modify_date'], 'safe'],
            [['bank_account_type_id'], 'required'],
            [['bank_account_type_id'], 'integer'],
            [['name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'rate' => Yii::t('app', 'Rate'),
            'name' => Yii::t('app', 'Name'),
            'create_date' => Yii::t('app', 'Create Date'),
            'modify_date' => Yii::t('app', 'Modify Date'),
            'bank_account_type_id' => Yii::t('app', 'Bank Account Type ID'),
        ];
    }
}
