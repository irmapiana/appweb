<?php 
    namespace app\models;
    
    use Yii;
    use yii\base\Model;
    use app\models\Museraccount;
    
    class JsonForm extends Model{
        public $accountno;
        public $userid;
        public $oldcard_number;
        public $newcard_number;
        
        public function rules(){
            return [
                [['accountno','userid','oldcard_number'],'required'],
                ['oldcard_number','findcard_numbers'],
                ['newcard_number','compare','compareAttribute'=>'newcard_number'],
            ];
        }
        
        public function finds($attribute, $params){
            $user = Museraccount::find()->where([
                'userid'=>Yii::$app->user->identity->userid
            ])->one();
            $card_number = $user->card_number;
        }
        
        public function attributeLabels(){
            return [
                'accountno'=>'No REK',
                'userid'=>'Userid',
                'oldcard_number'=>'No Kartu Lama',
                'newcard_number'=>'No Kartu Baru',
            ];
        }
    }