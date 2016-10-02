<?php namespace App\Http\Controllers;

use Request;
use Input;
use DB;
use Redirect;
use App\InsertModel;
use Session;


class CustomerOrders extends Controller {

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
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        //Auth::user()->id;
        $id=1;
        $order = DB::table('order')
                     ->select(DB::raw('*'))
                     ->where('userid', '=', $id)
                     ->get();
		return view('customerOrederPlacement')->with('order',$order);
       
	}
    
    public function update($id)
	{
        
    
        //Auth::user()->id;
        $userId=1;
        
        DB::table('order')
            ->where('id', $id)
            ->where('userid', $userId)
            ->update(array('statuspicked' => 'delivered'));
        

        
       Session::flash('message', 'Successfully Picked');
       return Redirect::back();
       
	}
    
    
     public function search()
	{
        
       $val =  Request::get('key');
//         $users = User::SearchByKeyword($keyword)->get();
	
		return $val;
       
	}
	
//	public function Insert() {
//		return view('customer');
//	}	

	public function InsertData() {
		$val =  Request::get('test');
		InsertModel::addData($val);
		return view('insert');
	}	
	//juiyiyiyiyiiyiyiyiyiyi
}
