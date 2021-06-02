<?php
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataPelangganController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\TransaksiController;

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
Route::get('/login',[TampilanController::class,'login']);
Route::get('/home',[TampilanController::class,'home']);
Route::get('/shop',[TampilanController::class,'shop']);
Route::get('/register',[TampilanController::class,'register']);
Route::get('/admin/index',[TampilanController::class,'admin_dasboard']);
Route::get('chekout/{barang}',[TampilanController::class,'chekout']);
Route::get('contact',[TampilanController::class,'contact']);
Route::post('/register', [AuthController::class,'register_user']); 
Route::post('/login', [AuthController::class,'login']); 
Route::get('detailorder/{barang}',[TampilanController::class,'detailorder']);
//order
Route::get('pesan/{barang}',[OrderController::class,'simpan']);
//category
Route::get('/admin/category',[CategoryController::class,'index']);
Route::get('admin/category/add',[CategoryController::class,'create']);
Route::get('admin/category/{cat}',[CategoryController::class,'edit']);
Route::post('admin/category/{cat}',[CategoryController::class,'update']);
Route::post('/admin/category/',[CategoryController::class,'store']);
Route::get('admin/category/hapus/{cat}',[CategoryController::class,'destroy']);
//Datapelanggan
Route::get('/admin/datapelanggan',[DataPelangganController::class,'index']);
//bank
Route::get('/admin/bank',[BankController::class,'index']);
Route::get('admin/bank/add',[BankController::class,'create']);
Route::get('admin/bank/{bank}',[BankController::class,'edit']);
Route::post('admin/bank/{bank}',[BankController::class,'update']);
Route::post('/admin/bank/',[BankController::class,'store']);
Route::get('admin/bank/hapus/{bank}',[BankController::class,'destroy']);
//barang
Route::get('/admin/barang',[BarangController::class,'index']);
Route::get('admin/barang/add',[BarangController::class,'create']);
Route::get('admin/barang/{barang}',[BarangController::class,'edit']);
Route::post('admin/barang/{barang}',[BarangController::class,'update']);
Route::post('/admin/barang/',[BarangController::class,'store']);
Route::get('admin/barang/hapus/{barang}',[BarangController::class,'destroy']);
//user_admin
Route::get('/admin/user_admin',[UserAdminController::class,'index']);
Route::get('admin/user_admin/add',[UserAdminController::class,'create']);
Route::get('admin/user_admin/{user}',[UserAdminController::class,'edit']);
Route::post('admin/user_admin/{user}',[UserAdminController::class,'update']);
Route::post('/admin/user_admin/',[UserAdminController::class,'store']);
Route::get('admin/user_admin/hapus/{user}',[UserAdminController::class,'destroy']);
//admingetorder
Route::get('/admin/order',[OrderController::class,'index']);
Route::post('admin/order/{order}',[OrderController::class,'update']);
Route::get('admin/order/hapus/{order}',[OrderController::class,'destroy']);
Route::get('admin/order/confrim/{order}',[OrderController::class,'confrim']);
//transaksi 
Route::get('/admin/transaksi',[TransaksiController::class,'index']);

//user
Route::get('user/home',[TampilanController::class,'user_home']);