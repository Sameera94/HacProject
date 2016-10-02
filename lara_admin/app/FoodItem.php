<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model {

    public $timestamps=false;
    public static function dinningMenuDataInsert($itemName,$price,$foodCat)
    {
        DB::table('fooditems')->insert([
            [
                'name' => $itemName,
                'image' => "null",
                'price' => $price,
                'cat' => $foodCat,
            ]
        ]);
    }


    public static function checkUniqueItems($foodCat,$item)
    {
        $count=DB::table('fooditems')->where('cat', '=',$foodCat)
            ->where('name','=',$item)
            ->count();
        return $count;
    }
}
