<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MuserAccount;

/**
 * BankSearch represents the model behind the search form about `app\models\Bank`.
 */
class MuserAccountSearch extends MuserAccount
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accountno', 'userid', 'primary_account', 'account_name', 'card_number'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MuserAccount::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'lower(accountno)', strtolower($this->accountno)])
            ->andFilterWhere(['like', 'lower(userid)', strtolower($this->userid)])
            ->andFilterWhere(['like', 'lower(primary_account)', strtolower($this->primary_account)])
            ->andFilterWhere(['like', 'lower(account_name)', strtolower($this->account_name)])
            ->andFilterWhere(['like', 'lower(card_number)', strtolower($this->card_number)]);

        return $dataProvider;
    }
}
