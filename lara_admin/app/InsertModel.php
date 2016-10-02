<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Class Room
 * @package App
 */
 //Tsting
class InsertModel extends Model {

    public static function addData($name){

        DB::table('test')->insert(
            [
                'val' => $name
            ]
        );
    }


}