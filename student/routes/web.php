<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
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
    return view('welcome');
});
Route::get('/insert',function (){
    DB::insert('insert into student(name,age,address,telephone)values(?,?,?,?)',['Nguyen Trong Son',22,'Dong Hung,Thai Binh','0373926191']);
    DB::insert('insert into student(name,age,address,telephone)values(?,?,?,?)',['Dang Hoang Son',25,'My Dinh,Ha Noi','0399999999']);
    DB::insert('insert into student(name,age,address,telephone)values(?,?,?,?)',['Tran Cong Phong',21,'My Dinh,Ha Noi','0342666666']);
    return 'done';
});
//Route::get('/readAll',function (){
//    $student = Student::all();
//    foreach ($student as $s){
//        return $s->title;
//    }
//});
Route::get('display',function (){
   $student = DB::select('select * from student');
   foreach ($student as $s){
       echo $s->name. " ". $s->age. " " . $s->address. " " . $s->telephone;
       echo "<br>";
   }
});
