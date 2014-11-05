<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_loan_transaction}}".
 *
 * @property integer $id
 * @property integer $sequence_number
 * @property string $instalment_amount
 * @property string $interest_amount
 * @property string $notification_penalty_sent
 * @property string $create_date
 * @property string $due_date
 * @property string $event_date
 * @property integer $bank_loan_id
 * @property integer $bank_account_transaction_id
 */
class BankLoanTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_loan_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sequence_number', 'bank_loan_id', 'bank_account_transaction_id'], 'integer'],
            [['instalment_amount', 'interest_amount'], 'number'],
            [['notification_penalty_sent'], 'string'],
            [['create_date', 'due_date', 'event_date'], 'safe'],
            [['bank_loan_id', 'bank_account_transaction_id'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sequence_number' => Yii::t('app', 'Sequence Number'),
            'instalment_amount' => Yii::t('app', 'Instalment Amount'),
            'interest_amount' => Yii::t('app', 'Interest Amount'),
            'notification_penalty_sent' => Yii::t('app', 'Notification Penalty Sent'),
            'create_date' => Yii::t('app', 'Create Date'),
            'due_date' => Yii::t('app', 'Due Date'),
            'event_date' => Yii::t('app', 'Event Date'),
            'bank_loan_id' => Yii::t('app', 'Bank Loan ID'),
            'bank_account_transaction_id' => Yii::t('app', 'Bank Account Transaction ID'),
        ];
    }
}
