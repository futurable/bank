<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_loan}}".
 *
 * @property integer $id
 * @property string $type
 * @property string $amount
 * @property integer $term
 * @property string $term_interval
 * @property string $instalment
 * @property string $repayment
 * @property string $interval
 * @property string $interest
 * @property string $interest_updated
 * @property integer $event_day
 * @property string $create_date
 * @property string $grant_date
 * @property string $accept_date
 * @property string $modify_date
 * @property string $status
 * @property integer $bank_interest_id
 * @property integer $bank_account_id
 * @property integer $bank_currency_id
 * @property integer $bank_user_id
 */
class BankLoan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_loan}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'term_interval', 'interval', 'status'], 'string'],
            [['amount', 'instalment', 'repayment', 'interest'], 'number'],
            [['term', 'event_day', 'bank_interest_id', 'bank_account_id', 'bank_currency_id', 'bank_user_id'], 'integer'],
            [['term_interval', 'interest', 'bank_interest_id', 'bank_account_id', 'bank_user_id'], 'required'],
            [['interest_updated', 'create_date', 'grant_date', 'accept_date', 'modify_date'], 'safe']
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
            'amount' => Yii::t('app', 'Amount'),
            'term' => Yii::t('app', 'Term'),
            'term_interval' => Yii::t('app', 'Term Interval'),
            'instalment' => Yii::t('app', 'Instalment'),
            'repayment' => Yii::t('app', 'Repayment'),
            'interval' => Yii::t('app', 'Interval'),
            'interest' => Yii::t('app', 'Interest'),
            'interest_updated' => Yii::t('app', 'Interest Updated'),
            'event_day' => Yii::t('app', 'Event Day'),
            'create_date' => Yii::t('app', 'Create Date'),
            'grant_date' => Yii::t('app', 'Grant Date'),
            'accept_date' => Yii::t('app', 'Accept Date'),
            'modify_date' => Yii::t('app', 'Modify Date'),
            'status' => Yii::t('app', 'Status'),
            'bank_interest_id' => Yii::t('app', 'Bank Interest ID'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'bank_currency_id' => Yii::t('app', 'Bank Currency ID'),
            'bank_user_id' => Yii::t('app', 'Bank User ID'),
        ];
    }
}
