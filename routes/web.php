<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get('/create',function(){
	return view('mycreate');
});

Route::get('/userlist',function(){
	return view('userlist');
});

Route::post('/loginsubmit',function(Request $req){
	return User::select('*')->where(
		[
			['name','=',$req->name],
			['pass','=',$req->pass],
		]
	)->get();
   
});

Route::post('/createsubmit',function(Request $req){
	
	$user = new User;

	$user->name=$req->name;
	$user->pass=$req->pass;
	$user->email=$req->email;
	$result=$user->save();
	if($result){
		return redirect('/');
	}
    
});