<?php namespace App\Http\Controllers;

use Request;
use Input;
use DB;
use Redirect;
use App\InsertModel;
use App\Http\Requests;
use App\FoodItem;


class menuController extends Controller {


function viewDiningMenu(){


    $menuItems = DB::table('fooditems')->select('name', 'cat', 'price')->get();
    return view('viewMenu')->with('menuItems', $menuItems);

}

    public function diningMenuEdit($id)
    {
        $foodItem = DB::table('fooditems')->select('name')->get();
        return view('editMenuItem')->with('foodItem', $foodItem);
    }

    public function updateDiningItem($id)
    {
        //Get Input Parameters
        $name = Request::get('itemName');
        $cat = Request::get('foodCatagory');
        $price = Request::get('price');

        DB::table('fooditems')
            ->where('name', $id)
            ->update([
                'name' => $name,
                'cat' => $cat,
                'price' => $price,

            ]);


        \Session::flash('flash_message', 'One Item Edited!!');
        $foodItem = DB::table('fooditems')->select('name', 'cat', 'price')->get();
        return view('viewMenu')->with('foodItem', $foodItem);

    }


}
