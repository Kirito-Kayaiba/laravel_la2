<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('txn',function(){
    $query = DB::table('tin')
    ->select('id','tieude','xem')
    ->orderBy('xem','desc')
    ->limit(10);
    $data = $query->get();
    foreach ($data as $tin) {
        echo $tin->tieude.'<br>';
    }
});
Route::get('/tinmoi',function(){
    $query = DB::table('tin')
    ->select('id','tieude','ngay')
    ->orderBy('ngay','desc')
    ->limit(10);
    $data = $query->get();
    return view('tinmoi',['data'=>$data]);
});
Route::get('/tintrongloai/{id}',function($id){
    $query = DB::table('tin')
    ->select('id','tieude','tomtat')
    ->where('idLT','=',$id)
    ->orderBy('ngay','desc');
    $data = $query->get();
    return view('tintrongloai',['data'=>$data]);
});
// bài 3 hiện chi tiết tin theo id
Route::get('/tin/{id}',function($id){
    $tin=DB::table('tin')->where('id','=',$id)->first();
    return view('chitiettin',['tin'=>$tin]);
});
