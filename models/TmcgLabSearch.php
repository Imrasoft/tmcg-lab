<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TmcgLab;

/**
 * TmcgLabSearch represents the model behind the search form of `app\models\TmcgLab`.
 */
class TmcgLabSearch extends TmcgLab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'contact', 'age', 'chronic_patient', 'client_rating', 'created_by', 'updated_by'], 'integer'],
            [['patient_id', 'name', 'gender', 'location', 'chronic_disease', 'presenting_complaint', 'contact_type', 'ready_to_pay', 'pay_status', 'no_pay_reason', 'pay_mode', 'client_type', 'pickup_location', 'test_request_time', 'sample_collection_time', 'tmcg_delivery_time', 'secondary_lab_pickup', 'result_time_lab', 'result_time_callcenter', 'turn_around_time', 'client_feedback', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TmcgLab::find();

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
        $query->andFilterWhere([
            'id' => $this->id,
            'contact' => $this->contact,
            'age' => $this->age,
            'chronic_patient' => $this->chronic_patient,
            'test_request_time' => $this->test_request_time,
            'sample_collection_time' => $this->sample_collection_time,
            'tmcg_delivery_time' => $this->tmcg_delivery_time,
            'secondary_lab_pickup' => $this->secondary_lab_pickup,
            'result_time_lab' => $this->result_time_lab,
            'result_time_callcenter' => $this->result_time_callcenter,
            'client_rating' => $this->client_rating,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'patient_id', $this->patient_id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'chronic_disease', $this->chronic_disease])
            ->andFilterWhere(['like', 'presenting_complaint', $this->presenting_complaint])
            ->andFilterWhere(['like', 'contact_type', $this->contact_type])
            ->andFilterWhere(['like', 'ready_to_pay', $this->ready_to_pay])
            ->andFilterWhere(['like', 'pay_status', $this->pay_status])
            ->andFilterWhere(['like', 'pay_mode', $this->pay_mode])
            ->andFilterWhere(['like', 'no_pay_reason', $this->no_pay_reason])
            ->andFilterWhere(['like', 'client_type', $this->client_type])
            ->andFilterWhere(['like', 'pickup_location', $this->pickup_location])
            ->andFilterWhere(['like', 'turn_around_time', $this->turn_around_time])
            ->andFilterWhere(['like', 'client_feedback', $this->client_feedback]);

        return $dataProvider;
    }
}
