<?php

use Illuminate\Support\Facades\Route;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryContract;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\ExportController;
use Carbon\Carbon;
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

// Route::get('/', function () {

//     // DB::table('users')->insert([
//     //     'name'=>'user1', 
//     //     'email'=>'user1#gmail.com', 
//     //     'email_verified_at'=> Carbon::now(), 
//     //     'password'=>'swdefrgthyujik',
//     //     'remember_token' => 'sdfghyjuk'
//     //     ]);


//     $users = DB::table('users')->where('name', 'Vidal Hirthe DDS')->get();
    
//     $usersEloquent = User::all();

//     dd($users,$usersEloquent );

//    return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
 });


Route::prefix('users')->name('user.')->group(function(){
    Route::get('/create', [UserController::class,'create'])->name('create');
    Route::get('/', [UserController::class, 'list'])->name('list');
    Route::get('/{id}', [UserController::class,'user'])->name('profile');
    //Route::post('/', [UserController::class,'store'])->name('store');
    Route::put('/{id}', [UserController::class,'update'])->name('profile.update');
    Route::delete('/{id}', [UserController::class,'delete'])->name('profile.delete');
    Route::get('/create-user', [UserController::class,'store'])->name('store');
});

Route::get('/create-user', [UserController::class,'store'])->name('store');

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});

Route::resources([
    'products'=> ProductController::class
]);


Route::get('test', function(\Illuminate\Contracts\Hashing\Hasher $hasher) {
    dd($hasher->make('test'));  //contract
});

Route::get('test1', function() {
    dd(\Illuminate\Support\Facades\Hash::make('test')); //facade
});

Route::get('test2', function(UserRepositoryContract $userRepository){
    
dd($userRepository->byId(67));
});














// Route::get('/search', function() {
//     return view( 'search');
// });



// Route::get('/userdetails/{name}', [SearchController::class]);

// Route::get('/getname/{id}', [UserController::class, "fullName"]);


// Route::get('/admins', function () {
//     $admins = [
//         ['username' => 'usser1', 'name'=>'oleg'],
//         ['username' => 'usser2', 'name'=>'dima'],
//         ['username' => 'usser3', 'name'=>'ivan'],
//     ];
//     dd($admins);
//  });

// Route::get('/user/{id}', [UserController::class, 'user']);

// Route::get('export', ExportController::class);

// Route::get('request-test', function(Request $request) {
//     dd($request->input('b', 'default'));
// });



// Route::prefix('users')->name('user.')->group(function(){
//     Route::get('/', [UserController::class, 'list'])->name('list');
//     Route::get('/{id}', [UserController::class,'user'])->name('profile');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


