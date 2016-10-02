<?php namespace App\Http\Controllers;

use Request;
use Input;
use DB;
use Redirect;
use App\InsertModel;
use App\Http\Requests;



class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	
	public function Insert() {
		return view('insert');
	}	

	public function InsertData() {
		$val =  Request::get('test');
		InsertModel::addData($val);
		return view('insert');
	}


	public function  diningAddMenu()
	{

		//Get Input Parameters
		$name = Request::get('itemName');
		$cat = Request::get('foodCatagory');
		$price = Request::get('price');


		//	Check if the item already exists
	   //$itemCount = FoodItem::checkUniqueItems($name, $cat);



		$itemCount=DB::table('fooditems')->where('cat', '=',$cat)
			->where('name','=',$name)
			->count();


		if ($itemCount == 1) {

			\Session::flash('flash_messageError', 'Food Item already existing in the menu!!');

			return redirect('insert');
		} else {


			DB::table('fooditems')->insert([
				[
					'name' => $name,
					'image' => "null",
					'price' => $price,
					'cat' => $cat,
				]
			]);

			\Session::flash('flash_message', 'Food Item Added Sucessfully!!');

			return redirect('insert');
		}



	}


	public function  addMenuForm()
	{
		return view('insert');

	}


}
