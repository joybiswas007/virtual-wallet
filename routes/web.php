<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    return view('pages/home');
})->name("home");

Route::get("/login", function () {
    return view("pages.login");
})->name("login");

Route::get("/register", function () {
    return view("pages.register");
})->name("register");


Route::get("/dashboard", function () {
    $users = ["A", "B", "C", "D", "E", "F", "H", "I", "J"];
    return view("pages.dashboard", ['users' => $users]);
})->name("dashboard");

Route::post('/logout', function ($id) {
    return redirect("/");
})->name("logout");