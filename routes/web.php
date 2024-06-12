<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], function () {
    Route::get("/","PageController@login")->name('login');
    Route::post("/login","AuthController@ceklogin");

});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/user","PageController@formedituser");
    Route::post("/updateuser","PageController@updateuser");
    Route::get("/logout","AuthController@ceklogout");


Route::get("/user", "PageController@formedituser");

Route::post("/updateuser","PageController@updateuser");

Route::get('/home', "PageController@home");

Route::get("/kaos","PageController@kaos");

Route::get("/kaos/add-form","PageController@formaddkaos");

Route::post("/save","PageController@savekaos");

Route::get("/kaos/edit-form/{id}", "PageController@formeditkaos");

Route::put("/update/{id}", "PageController@updatekaos");

Route::get("/delete/{id}", "PageController@deletekaos");

});

// Route::get("/about","PageController@about");

// Route::get("/faq","PageController@faq");
