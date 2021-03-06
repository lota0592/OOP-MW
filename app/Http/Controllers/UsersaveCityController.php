<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Input;
use App\Services\APICall;
use Auth;
use App\usersavecity;

class UsersaveCityController extends Controller {

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

	public function storeCity() {
		$cityName = Input::get("city");
		$user = Auth::user();
		$entry = usersavecity::create(['userid'=> $user->id,'data' => $cityName]);
		$entry->save();
		//return view('userpage');
	}


}