<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Registrasi\RegistrasiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LokerController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\java\JavaController;
use App\Http\Controllers\Cpp\CppController;
use App\Http\Controllers\webDev\WebdevController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

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



/*Auth*/
Route::get('/login',[LoginController::class,'login']);


/*Dashboard*/
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/covid-19',[DashboardController::class,'covid'])->name('dashboard.covid');

/*Dashboard | Lowongan Pekerjaan*/
Route::get('/job-vacancy/web-developer',[LokerController::class,'loker'])->name('dashboard.lokerWebdev');
Route::get('/job-vacancy/web-developer/show/{loker}',[LokerController::class,'showLoker'])->name('dashboard.showLoker');
Route::get('/job-vacancy/find',[LokerController::class,'find'])->name('dashboard.lokerFind');




/*Dashboard | Profile*/
Route::get('/profile/{user_id}',[ProfileController::class,'profile'])->name('dashboard.profile');
Route::get('/dashboard/change-password',[ProfileController::class,'changePassword'])->name('dashboard.changePassword');
Route::patch('/dashboard/change-password/{user_id}',[ProfileController::class,'changePasswordUpdate'])->name('dashboard.changePasswordUpdate');
Route::get('/change-profile/{user_id}/edit',[ProfileController::class,'changeProfile'])->name('dashboard.changeProfile');
Route::patch('/change-profile/{user_id}',[ProfileController::class,'changeProfileUpdate'])->name('dashboard.changeProfileUpdate');




/*Web Developer*/
Route::get('/web-developer',[WebdevController::class,'index'])->name('webDev');
Route::get('/web-developer/show/{webdev} ',[WebdevController::class,'show'])->name('webDev.show');
Route::get('/web-developer/jawab/{webdev} ',[WebdevController::class,'jawab'])->name('webDev.jawab');


/*Java OOP*/
Route::get('/java-oop',[JavaController::class,'index'])->name('javaOop');
Route::get('/java-oop/show/{java} ',[JavaController::class,'show'])->name('javaOop.show');



/*C++*/
Route::get('/cpp',[CppController::class,'index'])->name('cplusPlus');
Route::get('/cpp/show/{cpp} ',[CppController::class,'show'])->name('cplusPlus.show');


/*Home*/
Route::get('/tik',[WelcomeController::class,'tik']);
Route::get('/tik/web-developer/detail',[WelcomeController::class,'webDevDetail'])->name('tik.webdev');
Route::get('/tik/cpp/detail',[WelcomeController::class,'cppDetail'])->name('tik.cpp');
Route::get('/tik/java/detail',[WelcomeController::class,'javaDetail'])->name('tik.java');
Route::get('/teknik-elektronika',[WelcomeController::class,'te']);
Route::get('/',[WelcomeController::class,'index']);

/*Auth Routes*/
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




/*Admin*/

Route::group(['middleware' => 'admin'], function(){
    /*Dashboard*/
    Route::get('/dashboard/data-user/show/{user_id}/edit',[DataUserController::class,'edit'])->name('dashboard.edit');
    Route::patch('/dashboard/data-user/{user_id}',[DataUserController::class, 'update'])->name('dashboard.update');
    Route::get('/data-user',[DataUserController::class,'dataUser'])->name('dashboard.dataUser');
    Route::get('/data-user/find',[DataUserController::class, 'find'])->name('dashboard.search');
    Route::delete('/dashboard/data-user/{user_id}',[DataUserController::class,'destroy'])->name('dashboard.destroy');
    Route::get('/data-user/printpdf',[DataUserController::class,'printpdfDataUser'])->name('dashboard.printpdfDataUser');
    Route::get('/data-user/excel',[DataUserController::class,'excel'])->name('dashboard.excel');

    /*Dashboard | Loker*/
    Route::get('/job-vacancy/web-developer/{loker}/edit',[LokerController::class,'lokerEdit'])->name('dashboard.lokerWebdevEdit');
    Route::patch('/job-vacancy/web-developer/{loker}',[LokerController::class,'lokerUpdate'])->name('dashboard.lokerWebdevUpdate');
    Route::delete('/job-vacancy/web-developer/{loker}',[LokerController::class,'lokerDelete'])->name('dashboard.lokerWebdevDelete');
    Route::post('/job-vacancy/web-developer/store',[LokerController::class,'store'])->name('dashboard.lokerStore');

    /*web*/
    Route::post('/web-developer',[WebdevController::class,'store'])->name('webDev.store');
    Route::get('/web-developer/create',[WebdevController::class,'create'])->name('webDev.create');
    Route::get('/web-developer/show/{webdevs_id}/edit',[WebdevController::class,'edit'])->name('webDev.edit');
    Route::patch('/web-developer/{webdevs_id}',[WebdevController::class, 'update'])->name('webDev.update');
    Route::delete('web-developer/show/{webdev}',[WebdevController::class, 'destroy'])->name('webDev.delete');
    

    /*Java*/
    Route::post('/java-oop/store',[JavaController::class,'store'])->name('javaOop.store');
    Route::get('/java-oop/create',[JavaController::class,'create'])->name('javaOop.create');
    Route::get('/java-oop/show/{java_id}/edit',[JavaController::class,'edit'])->name('javaOop.edit');
    Route::patch('/java-oop/{java_id}',[JavaController::class, 'update'])->name('javaOop.update');
    Route::delete('java-oop/show/{java}',[JavaController::class, 'destroy'])->name('javaOop.delete');

    /*C++*/
    Route::get('/cpp/create',[CppController::class,'create'])->name('cplusPlus.create');
    Route::post('/cpp/store',[CppController::class,'store'])->name('cplusPlus.store');
    Route::get('/cpp/show/{cpp_id}/edit',[CppController::class,'edit'])->name('cplusPlus.edit');
    Route::patch('/cpp/{cpp_id}',[CppController::class, 'update'])->name('cplusPlus.update');
    Route::delete('cpp/show/{cpp_id}',[CppController::class, 'destroy'])->name('cpp.delete');

    

});
Route::group(['middleware' => 'user'], function(){
    Route::get('/certificate',[SertifikatController::class,'certificate'])->name('certificate');
    Route::get('/certificate/print',[SertifikatController::class,'print'])->name('print');
    Route::get('/certificate/printpdf',[SertifikatController::class,'printpdf'])->name('printpdf');

});
