<?php


use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Controllers\Web\UserController;
use App\Models\Ad;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/dologin', [AuthController::class, 'dologin'])->name('dologin')->middleware('guest');



Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/logout', function () {
        auth()->logout();
        return redirect(route('login'));
    })->name('logout');
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/index', [UserController::class, 'index'])->name('users');
    });

    Route::get('/ads/index',function(){
        return view('ads.index');
    })->name('ads');
    Route::get('/ads/create',function(){
        return view('ads.create');
    })->name('ads.create');

    Route::post('/ads/store', function (Request $request) {
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('media/ads/images'), $filename);
        } else {
            $filename = 'https://media.istockphoto.com/id/1072055834/photo/red-stamp-on-a-white-background-temporary.jpg?s=612x612&w=is&k=20&c=pO5CCAaRt-NoKgNsYU-5hHuVi2sxQBZRpIfumWjw0Jk=';
        }
        Ad::create([
            'ad_link' => $request->ad_link,
            'image' => $filename,
        ]);
    })->name('ads.store');
    Route::post('/ads/activate/{ad_id}', function (Request $request) {
        $ad = Ad::find($request->ad_id);
        $ad->update([
            'active' => '1'
        ]);
        return redirect(route('ads'))->with(['success'=>'Activated Successfully']);
    })->name('ad.activate');
    Route::post('/ads/deactivate/{ad_id}', function (Request $request) {
        $ad = Ad::find($request->ad_id);
        $ad->update([
            'active' => '0'
        ]);
        return redirect(route('ads'))->with(['success' => 'De-Activated Successfully']);
    })->name('ad.deactivate');
});

