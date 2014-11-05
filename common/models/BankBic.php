<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bank_bic}}".
 *
 * @property integer $id
 * @property integer $branch_code
 * @property string $bic
 * @property string $bank_name
 * @property string $create_date
 */
class BankBic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bank_bic}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_code', 'bic', 'bank_name'], 'required'],
            [['branch_code'], 'integer'],
            [['create_date'], 'safe'],
            [['bic'], 'string', 'max' => 11],
            [['bank_name'], 'string', 'max' => 256],
            [['branch_code'], 'unique'],
            [['bic'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'bic' => Yii::t('app', 'Bic'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'create_date' => Yii::t('app', 'Create Date'),
        ];
    }
}
