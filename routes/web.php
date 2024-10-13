<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MediaController; 
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductReturnController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\SupplierController;
use Inertia\Inertia;




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

// Rute untuk home dan produk, tidak memerlukan autentikasi
Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return Inertia::render('Home'); // Render Home.vue
})->name('home'); // Halaman home, tidak memerlukan autentikasi

Route::get('/products', function () {
    return Inertia::render('Product'); // Render Product.vue
})->name('products'); // Halaman produk, tidak memerlukan autentikasi


Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard'); 

	/* Route::get('/dashboard', function () {
        return Inertia::render('Dashboard'); // Menampilkan halaman Dashboard.vue
    })->name('dashboard'); */

	Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('users.index');

	Route::controller(BarangController::class)->prefix('barang')->group(function () {
		Route::get('', 'index')->name('barang');
		// Route::get('cari', 'search')->name('barang.search');
		Route::get('tambah', 'tambah')->name('barang.tambah');
		Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('barang.edit');
		Route::post('edit/{id}', 'update')->name('barang.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
	});
	
	Route::get('/barang/cari', [BarangController::class, 'search'])->name('barang.search');


	Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
		Route::get('', 'index')->name('kategori');
		Route::get('tambah', 'tambah')->name('kategori.tambah');
		Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori.edit');
		Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
	});

	Route::get('/kategori/cari', [KategoriController::class, 'search'])->name('kategori.search');

	Route::controller(MediaController::class)->prefix('media')->group(function () {
		Route::get('', 'index')->name('media.index'); // Halaman utama media (list dan upload)
		Route::post('', 'store')->name('media.store'); // Route untuk upload media
	});

	// Rute untuk Orders
	Route::resource('orders', OrderController::class);

// Rute pencarian (opsional)
Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');	
Route::get('orders/search', [OrderController::class, 'search'])->name('orders.search');

Route::resource('memberships', MembershipController::class);
Route::get('/memberships/search', [MembershipController::class, 'search'])->name('memberships.search');

Route::resource('payments', PaymentController::class);
Route::get('payments/search', [PaymentController::class, 'search'])->name('payments.search');

Route::resource('returns', ProductReturnController::class);

Route::resource('shippings', ShippingController::class);

Route::resource('suppliers', SupplierController::class);

});

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
