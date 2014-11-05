<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_account_transaction}}".
 *
 * @property integer $id
 * @property string $recipient_iban
 * @property string $recipient_bic
 * @property string $recipient_name
 * @property string $payer_iban
 * @property string $payer_bic
 * @property string $payer_name
 * @property string $event_date
 * @property string $create_date
 * @property string $modify_date
 * @property string $amount
 * @property string $reference_number
 * @property string $message
 * @property string $exchange_rate
 * @property string $currency
 * @property string $status
 */
class BankAccountTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_account_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['recipient_bic', 'payer_iban', 'payer_bic', 'payer_name'], 'required'],
            [['event_date', 'create_date', 'modify_date'], 'safe'],
            [['amount', 'exchange_rate'], 'number'],
            [['status'], 'string'],
            [['recipient_iban', 'payer_iban'], 'string', 'max' => 32],
            [['recipient_bic', 'payer_bic'], 'string', 'max' => 11],
            [['recipient_name', 'payer_name'], 'string', 'max' => 35],
            [['reference_number'], 'string', 'max' => 20],
            [['message'], 'string', 'max' => 420],
            [['currency'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'recipient_iban' => Yii::t('app', 'Recipient Iban'),
            'recipient_bic' => Yii::t('app', 'Recipient Bic'),
            'recipient_name' => Yii::t('app', 'Recipient Name'),
            'payer_iban' => Yii::t('app', 'Payer Iban'),
            'payer_bic' => Yii::t('app', 'Payer Bic'),
            'payer_name' => Yii::t('app', 'Payer Name'),
            'event_date' => Yii::t('app', 'Event Date'),
            'create_date' => Yii::t('app', 'Create Date'),
            'modify_date' => Yii::t('app', 'Modify Date'),
            'amount' => Yii::t('app', 'Amount'),
            'reference_number' => Yii::t('app', 'Reference Number'),
            'message' => Yii::t('app', 'Message'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'currency' => Yii::t('app', 'Currency'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
