<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\Markcontroller;
use App\Models\TradeModel;
use App\Models\traineeModel;
use App\Models\Marks;


Route::get('/', function () {
    return view('index');
});

Route::get('/User', function () {
    return view('User');
    
});
Route::post('/register',[UserController::class,'register'])->name('register');

Route::get('/login', function () {
    return view('login');
    
});
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/loginshow',[UserController::class,'loginshow'])->name('loginshow');



 Route::get('/Dashboard', function () {
    return view('Dashboard');
});
    


 Route::get('/Trade', function () {
    return view('Trade');
    
});

Route::post('/trade',[TradeController::class,'trade'])->name('trade');

 Route::get('/Viewtrade', function () {
    $select=array();
    $select=TradeModel::all();
    return view('Viewtrade',compact('select'));
    
});

 Route::get('/updatetrade', function () {
    return view('updatetrade');
    
});
 Route::get('/Trainees', function () {
    return view('Trainees');
    
});
 Route::get('/Viewtrainees', function () {
    $view=array();
    $view=traineeModel::all();
    return view('Viewtrainees',compact('view'));
    
});
Route::get('/edit/{id}',[TradeController::class,'edit'])->name('edit');
Route::put('/updatetrade/{id}',[TradeController::class,'updatetrade'])->name('updatetrade');
Route::delete('/delete/{id}',[TradeController::class,'delete'])->name('delete');
Route::post('/Trainee',[TraineeController::class,'Trainee'])->name('Trainee');

Route::get('/update2/{id}',[TraineeController::class,'update2'])->name('update2');
Route::put('/updatetrainee/{id}',[TraineeController::class,'updatetrainee'])->name('updatetrainee');

Route::delete('/delete2/{id}',[TraineeController::class,'delete2'])->name('delete2');

 Route::get('/Marks', function () {
    $view = traineeModel::all(); // Get all trainees
    $select = TradeModel::all(); // Get all trades
    return view('Marks',compact('view', 'select'));
    
});
Route::post('/marks',[Markcontroller::class,'marks'])->name('marks');
 Route::get('/Viewreport', function () {
   $select = Marks::with(['trainee', 'trade'])->get();
    return view('Viewreport',compact('select'));
    
});
Route::get('/Updatereport', function () {
    return view('Updatereport');
    
});

Route::get('/modify/{id}',[Markcontroller::class,'modify'])->name('modify');
Route::PUT('/updatereport/{id}',[Markcontroller::class,'updatereport'])->name('updatereport');
Route::DELETE('/delete3/{id}',[MarkController::class,'delete3'])->name('delete3');

Route::get('/logout' ,[UserController::class, 'logout'])->name('logout');
Route::get('/viewReport' ,[Markcontroller::class, 'viewReport'])->name('viewReport');

Route::get('/Dashboard', function () {
    if (!session()->has('wisedom')) {
        return redirect('Login')->with('fail', 'You must login first.');
    }
    return view('Dashboard');
});
Route::get('/Trade', function () {
    if (!session()->has('wisedom')) {
        return redirect('login')->with('fail', 'You must login first.');
    }
    return view('Trade');
});
