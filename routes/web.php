<?php

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

// Route::get('about',function(){
//     return "This is about";
// });

// Route::get('contact',function(){
//     return "This is contact";
// });

Route::get("post/{id}",function($id){
    return "This is post $id";
});

Route::get("comment/{id?}",function($id="default"){
    return "This is comment $id";
});

Route::get("add/{num1}/{num2}/{num3}",function($num1, $num2,$num3){
    return "This is result = ".($num1 +$num2+$num3);
});

Route::view("services","services");

Route::view("about","about");

Route::view("contact","contact");

// using route name system
Route::view("sale","sale")->name("sale");

//route->controller
Route::get("page/{id}","PageController@detail")->name("page.detail");

Route::view("test","test");

Route::get("dashboard/index","Dashboardcontroller@index")->name("dashboard.index");
Route::get("dashboard/edit","Dashboardcontroller@edit")->name("dashboard.edit");
Route::get("dashboard/create","Dashboardcontroller@create")->name("dashboard.create");
Route::get("form","formController@create")->name('form.create');
Route::post("form","formController@store")->name('form.store');
Route::get("form-delete/{id}","FormController@destroy")->name("form.destroy");
Route::get("form-edit/{id}","FormController@edit")->name('form.edit');
Route::post("form-update/{id}","FormController@update")->name('form.update');

Route::resource("san-kyi","SankyiController");