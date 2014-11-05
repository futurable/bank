<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_account".
 *
 * @property integer $id
 * @property string $iban
 * @property string $name
 * @property string $status
 * @property string $create_date
 * @property string $modify_date
 * @property integer $bank_user_id
 * @property integer $bank_bic_id
 * @property integer $bank_interest_id
 * @property integer $bank_currency_id
 * @property integer $bank_account_type_id
 */
class BankAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['create_date', 'modify_date'], 'safe'],
            [['bank_user_id'], 'required'],
            [['bank_user_id', 'bank_bic_id', 'bank_interest_id', 'bank_currency_id', 'bank_account_type_id'], 'integer'],
            [['iban'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 64],
            [['iban'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iban' => 'Iban',
            'name' => 'Name',
            'status' => 'Status',
            'create_date' => 'Create Date',
            'modify_date' => 'Modify Date',
            'bank_user_id' => 'Bank User ID',
            'bank_bic_id' => 'Bank Bic ID',
            'bank_interest_id' => 'Bank Interest ID',
            'bank_currency_id' => 'Bank Currency ID',
            'bank_account_type_id' => 'Bank Account Type ID',
        ];
    }
}
