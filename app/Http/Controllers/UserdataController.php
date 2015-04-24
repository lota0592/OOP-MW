<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Input;
use App\Services\APICall;
use Auth;
use App\userdata;

class UserdataController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function senddata($receiver,$data) {
		$user = Auth::user();
		$entry = Userdata::create(['sender'=> $user->name,'receiver' => $receiver,'data'=>$data]);
		$entry->save();
		//return view('userpage');
	}


}
