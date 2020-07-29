<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "M_BANK".
 *
 * @property string $BANKCODE
 * @property string $BANKNAME
 * @property string $NOTE
 * @property string $CBY
 * @property string $CDATE
 * @property string $MBY
 * @property string $MDATE
 * @property string $ACTIVE
 */
class Useraccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_user_account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accountno', 'userid', 'card_number'], 'required'],
            [['accountno'], 'string', 'max' => 20],
            [['account_name'], 'string', 'max' => 32],
            [['userid'], 'string', 'max' => 30],
            [['card_number'], 'string', 'max' => 19],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'accountno' => 'No Rek',
            'account_name' => 'Nama Akun',
            'userid' => 'Userid',
            'card_number' => 'No Kartu',
        ];
    }
}
