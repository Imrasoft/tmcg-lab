<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tmcg_lab".
 *
 * @property int $id
 * @property string $patient_id
 * @property string $name
 * @property int $contact
 * @property string $gender
 * @property int $age
 * @property string $location
 * @property int $chronic_patient
 * @property string $chronic_disease
 * @property string $presenting_complaint
 * @property string $contact_type
 * @property string $ready_to_pay
 * @property string $pay_status
 * @property string $pay_mode
 * @property string $no_pay_reason
 * @property string $client_type
 * @property string $pickup_location
 * @property string $test_request_time
 * @property string $sample_collection_time
 * @property string $tmcg_delivery_time
 * @property string $secondary_lab_pickup
 * @property string $result_time_lab
 * @property string $result_time_callcenter
 * @property string $result_status
 * @property string $result_detail
 * @property string $turn_around_time
 * @property int $client_rating
 * @property string $client_feedback
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 */
class TmcgLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmcg_lab';
    }

    public function getCreatedBy()
    {
        return $this->hasOne(\app\models\User::className(),['id'=>'created_by']);
    }

    public function getUpdatedBy()
    {
        return $this->hasOne(\app\models\User::className(),['id'=>'updated_by']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contact', 'age', 'chronic_patient', 'created_by', 'updated_by'], 'integer'],
            [['presenting_complaint'], 'string'],
            [['test_request_time', 'sample_collection_time', 'tmcg_delivery_time', 'secondary_lab_pickup', 'result_time_lab', 'result_time_callcenter', 'created_at', 'updated_at'], 'safe'],
            [['patient_id'], 'string', 'max' => 12],
            [['name', 'chronic_disease', 'contact_type', 'client_type', 'pay_mode'], 'string', 'max' => 50],
            [['gender', 'turn_around_time'], 'string', 'max' => 10],
            [['location', 'no_pay_reason', 'pickup_location', 'result_detail'], 'string', 'max' => 100],
            [['ready_to_pay'], 'string', 'max' => 5],
            [['pay_status', 'result_status'], 'string', 'max' => 20],
            [['client_feedback'], 'string', 'max' => 200],
            [['client_rating'], 'default'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'name' => 'Name',
            'contact' => 'Contact',
            'gender' => 'Gender',
            'age' => 'Age',
            'location' => 'Location',
            'chronic_patient' => 'Chronic Patient',
            'chronic_disease' => 'Chronic Disease',
            'presenting_complaint' => 'Presenting Complaint',
            'contact_type' => 'Contact Type',
            'ready_to_pay' => 'Ready To Pay',
            'pay_status' => 'Pay Status',
            'pay_mode' => 'Mode of Payment',
            'no_pay_reason' => 'Reason for not Paying',
            'client_type' => 'Client Type',
            'pickup_location' => 'Pickup Location',
            'test_request_time' => 'Test Request Time',
            'sample_collection_time' => 'Sample Collection Time',
            'tmcg_delivery_time' => 'Tmcg Delivery Time',
            'secondary_lab_pickup' => 'Secondary Lab (Carewise) Pickup',
            'result_time_lab' => 'Result Time Lab',
            'result_status' => 'Result Status',
            'result_detail' => 'Result Details',
            'result_time_callcenter' => 'Result Time Callcenter',
            'turn_around_time' => 'Turn Around Time',
            'client_rating' => 'Client Rating',
            'client_feedback' => 'Client Feedback',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
           [ 'class'=>TimestampBehavior::className(),
                    'value'=>new Expression('NOW()')
                ],
            BlameableBehavior::className(),
        ];
    }
}
