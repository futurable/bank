<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_interest".
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
        return 'bank_interest';
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
            'id' => 'ID',
            'rate' => 'Rate',
            'name' => 'Name',
            'create_date' => 'Create Date',
            'modify_date' => 'Modify Date',
            'bank_account_type_id' => 'Bank Account Type ID',
        ];
    }
}
