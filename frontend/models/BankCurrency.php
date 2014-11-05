<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_currency".
 *
 * @property integer $id
 * @property string $code
 * @property string $exchange_rate
 */
class BankCurrency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_currency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exchange_rate'], 'number'],
            [['code'], 'string', 'max' => 3],
            [['code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'exchange_rate' => 'Exchange Rate',
        ];
    }
}
