<?php

class Db {

    public static $list = [
        '1'=> [
            'id'=>1, 'name'=> 'Iphone XS', 'price'=>4520.00, 'currency'=>'TRY', 'status'=>1,
            'cpu'=>'X', 'ram'=>128, 'screenSize'=>'1920x1080', 'subCategory'=>'Iphone','category'=>'cellphone'
        ],
        '2'=> [
            'id'=>2, 'name'=>'Samsung S9', 'price'=>4750, 'currency'=>'TRY', 'status'=>1,
            'cpu'=>'Y', 'ram'=>256, 'screenSize'=>'1920x1080', 'subCategory'=>'Samsung', 'category'=>'cellphone'

        ],
        '3'=> [
            'id'=>3, 'name'=>'Wiskas Cat Feed', 'price'=>240.5, 'currency'=>'TRY', 'status'=>1,
            'foodType'=>'dry', 'weight'=>2500, 'packageType'=>'A',
            'category'=>'animalFood', 'subCategory'=>'cat'

        ],
        '4'=> [
            'id'=>4, 'name'=>'Wiskas Dog Dry Feed', 'price'=>125.75, 'currency'=>'TRY', 'status'=>1,
            'foodType'=>'dry', 'weight'=>5000, 'packageType'=>'B',
            'category'=>'animalFood', 'subCategory'=>'dog', 'raceType'=>'small'

        ],
        '5'=> [
            'id'=>5, 'name'=>'Wiskas Dog Dry Feed Premium', 'price'=>125.75, 'currency'=>'TRY', 'status'=>1,
            'foodType'=>'dry', 'weight'=>5000, 'packageType'=>'B',
            'category'=>'animalFood', 'subCategory'=>'dog', 'raceType'=>'big'

        ],

    ];

    public static function get($id){
		foreach(Db::$list as $l){
			if($l['id'] == $id){
				return $l;
			}
		}
    }

    public function all(){
		return Db::$list;
    }
}