<?php
    namespace app\models;
    use Yii;
    use yii\base\model;
    class Room extends Model
    {
        public $floor;
        public $room_number;
        public $has_conditioner;
        public $has_tv;
        public $has_phone;
        public $avaible_from;
        public $price_per_day;
        public $description;
        
        public function attributeLabels()
        {
            return [
                'floor' => 'Floor',        
                'room_number' => 'Room number',        
                'has_condition' => 'Condition available',        
                'has_tv' => 'TV available',        
                'has_phone' => 'Phone available',        
                'available_from' => 'Available from',        
                'price_per_day' => 'Price (EUR/day)',        
                'description' => 'Description',
            ];
        }

        public function rules() 
        {    
            return 
            [        
                ['floor', 'integer', 'min' => 0],        
                ['room_number', 'integer', 'min' => 0],        
                [
                    ['has_conditioner', 'has_tv', 'has_phone'], 
                    'integer', 
                    'min' => 0, 
                    'max' => 1
                ],        
                ['available_from', 'date', 'format' => 'php:Y-m-d'],        
                ['price_per_day', 'number', 'min' => 0],        
                ['description', 'string', 'max' => 500]    
            ]; 
        }
    }
?>