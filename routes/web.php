<?php
use App\http\Controllers\ClientController;
use App\http\Controllers\PdfController;
use App\Http\Controllers\DropdownController2;
use App\Http\Controllers\ExcelController;
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

Auth::routes();


Route::get('/admin', 'ClientController@index')->name('admin')->middleware('admin');


 //Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
/*Route::group(['middleware' => ['auth', 'cekRole:Admin,Operator,Mahasiswa']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');*/



 Route::resources([
    'client' => ClientController::class,
    
]);
//Route::resource("client", ClientController::class);
 
 Route::get('/pdf',[PdfController::class, 'createPDF'])->name('pdf');
 Route::post('dpts', [DropdownController2::class, 'getDpts']);
 Route::get('inscrire', [DropdownController2::class, 'inscrire'])->name('inscrire');
  Route::get('modifier', [DropdownController2::class, 'modifier'])->name('modifier');
Route::get('filtrer/{langue}',[ClientController::class,'filtrer'])->name('filtrer');

Route::get('/export-clients',[ExcelController::class,'exportClients'])->name('export-clients');

Route::get('reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha'])->name('reload-captcha');