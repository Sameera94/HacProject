<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Input;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Redirect;





class ApiController extends Controller {


    public function index(){
        return view('home');
    }

    public function getAllUsers(){
        $users = DB::table('users')->get();
        return json_encode($users);
    }

    public function checkUser(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $result = DB::table('users')
                    ->where('email','=',$username)
                    ->where('password','=',$password)
                    ->count();

        if($result == 1){
            return json_encode("valid");
        }else{
            return json_encode("failed");
        }

    }

    public function addUser(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $auth = rand(10, 1000);

        $res = DB::table('users')->insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'auth' => $auth
                ]);

        if($res) {
            return json_encode($auth);
        }else{
            return json_encode("false");
        }

    }

    public function refresh(Request $request){

        $auth_key = $request->input('auth_key');

        $c = DB::table('users')->where('auth','=',$auth_key)->count();

        if($c > 0){
            $res = DB::table('sms')->where('status','=',1)->get(); 
            return json_encode($res);   
        }else{
            return json_encode("error_cj");
        }

    }

    public function checkForNewMessages(){
        $count = DB::table('sms')->where('status','=',1)->count();
        return $count;
    }

    public function statesUpdate(Request $request){
        $arr = $request->input('arr');
        $string = substr($arr, 1, -1);

        $id_array = explode(",",$string);

        $ids = array_map('intval',  explode(",",$string));

        for($i=0;$i < count($ids) ; $i++){

            DB::table('sms')
                ->where('id', $ids[$i])
                ->update(['status' => 0]);

        }

        return json_encode("valid");
    }

    public function getSendToManyNumbers(){
        return json_encode(DB::table('many_numbers')->where('status','=',1)->get());
    }

    public function getSendToManyMessages(Request $request){

        $auth_key = $request->input('auth_key');

        $c = DB::table('users')->where('auth','=',$auth_key)->count();

        if($c > 0){
            return json_encode(DB::table('many_message')->get());
        }else{
            return json_encode("error_cj");
        }

    }

    public function SendToManyStatesUpdate(Request $request){
        $arr = $request->input('arr');
        $string = substr($arr, 1, -1);
        $ids = array_map('intval',  explode(",",$string));

        for($i=0;$i < count($ids) ; $i++){
            DB::table('many_numbers')
                ->where('id', $ids[$i])
                ->update(['status' => 0]);
        }

        return json_encode("valid");
    }

    public function sendInbox(Request $request){

        $data = json_decode( $request->input('inbox') );

        foreach ($data as $key ) {

            if ( DB::table('sms_inbox')->where('_id','=',$key->_id)->count() == 0) {
                DB::table('sms_inbox')->insert(
                    ['address' => $key->address, 'date' => $key->date, 'body' => $key->body, '_id' => $key->_id ]
                );
            }

        }    

        return json_encode("success");

    }

    public function checkForNewMessagesMany(Request $request){
        $count = DB::table('many_numbers')->where('status','=',1)->count();
        return $count;
    }


}
