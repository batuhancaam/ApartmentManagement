<?php

use System\Core\Route;

/*
    $ana = Route::get("{baslik}/{controller}/{method}",function($var,$controller,$method){
        $controller = "App\\Controllers\\".$controller;
        $controller = new $controller();
        call_user_func_array([$controller,$method],[]);
    })->name("ana");
    $ana->where("baslik","[a-zA-Z0-9-]+");
*/

Route::any("", "Home@index");
Route::any("Login", "Home@index");
Route::any("Logout", "Home@LogOut");
Route::any("SingUp", "SingUp@SingUp");
Route::any("AdminLogin", "Home@AdminLogin");
Route::any("Dashboard", "Dashboard@OpenDashboard");
Route::any("Aidatlar", "Dashboard@GetDues");
Route::any("Giderler", "Dashboard@GetEx");
Route::any("PayDues", "Dashboard@PayDues");
Route::any("Gelirler", "Dashboard@GetPayDues");
Route::any("AdminPanel", "AdminPanel@AdminPanel");
Route::any("InsertEx", "AdminPanel@InsertEx");
Route::any("DeleteEx", "AdminPanel@DeleteEx");
Route::any("UpdateEx", "AdminPanel@UpdateEx");
Route::any("Aidat", "AdminDues@DuesPage");
Route::any("InsertDues", "AdminDues@InsertDues");
Route::any("DeleteDues", "AdminDues@DeleteDues");
Route::any("UpdateDues", "AdminDues@UpdateDues");
Route::any("GelirlerAdmin", "AdminDues@GetPayDues");
Route::any("GiderAdmin", "AdminPanel@GiderAdmin");