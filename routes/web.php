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
Route::get('/', [
	'uses' 	=> '\App\Http\Controllers\Web\HomeController@index',
	'as'	=> 'home.index'
]);

Route::get('/dashbord/platform', [
	'uses' 	=> '\App\Http\Controllers\Dashboard\DashboardController@index',
	'as'	=> 'dashbord.index'
]);

Route::resource('kategori', '\App\Http\Controllers\Dashboard\KategoriController');
Route::resource('merk', '\App\Http\Controllers\Dashboard\MerkController');
Route::resource('tahun-produksi', '\App\Http\Controllers\Dashboard\TahunProduksiController');
Route::resource('jarak-tempuh', '\App\Http\Controllers\Dashboard\JarakTempuhController');
Route::resource('subkategori', '\App\Http\Controllers\Dashboard\SubKategoriController');
Route::resource('product', '\App\Http\Controllers\Dashboard\ProductController');
Route::resource('promo-benner', '\App\Http\Controllers\Dashboard\BennerController');
Route::resource('warna', '\App\Http\Controllers\Dashboard\WarnaController');
Route::resource('bahan-bakar', '\App\Http\Controllers\Dashboard\BahanBakarController');
Route::resource('transmisi', '\App\Http\Controllers\Dashboard\TransmisiController');
Route::resource('product-promo', '\App\Http\Controllers\Dashboard\ProductPromoController');


Route::get('/product/detail/{id}', [
	'uses' 	=> '\App\Http\Controllers\Web\HomeController@details',
	'as'	=> 'product.detail'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/kategori/{id}', [
	'uses' 	=> '\App\Http\Controllers\Web\ProductListController@getProducts',
	'as'	=> 'product.kategori'
]);

Route::get('/product/kategori/detail/{id}', [
	'uses' 	=> '\App\Http\Controllers\Web\ProductListController@getProductDetail',
	'as'	=> 'product.kategori.detail'
]);

Route::get('/product/search/lists',[
	'uses' 	=> '\App\Http\Controllers\Web\FilterSearchController@getSearch',
	'as' 	=> 'product.search.lists'
]);
//titip jual
Route::get('/titip-jual/mobil', [
	'uses' 	=> '\App\Http\Controllers\Web\TitipJualController@getFormTitipJual',
	'as' 	=> 'titip-jual.create'
]);

Route::post('/titip-jual/mobil/store', [
	'uses' 	=> '\App\Http\Controllers\Web\TitipJualController@store',
	'as' 	=> 'titip-jual.store'
]);

Route::get('/apoitment/member/{id}', [
	'uses' 	=> '\App\Http\Controllers\Web\TitipJualController@appoitment',
	'as' 	=> 'apoitment.member'
]);

Route::post('/apoitment/member/store', [
	'uses' 	=> '\App\Http\Controllers\Web\TitipJualController@apoitmentStore',
	'as' 	=> 'apoitment-member.store'
]);
//user
Route::get('user/lists',[
	'uses' 	=> '\App\Http\Controllers\Dashboard\UserListController@getUser',
	'as' 	=> 'user.lists'
]);

Route::patch('dashboard/user/akses/{id}', [
	'uses' 		=> '\App\Http\Controllers\Dashboard\UserListController@updateStatusAkses',
	'as' 		=> 'user.akses'
]);

//product status
Route::patch('dashboard/product/status/{id}',[
	'uses' 		=> '\App\Http\Controllers\Dashboard\ProductStatusController@getProductStatus',
	'as' 		=> 'product.status'
]);

Route::get('product/promo/detail/{id}',[
	'uses' 		=> '\App\Http\Controllers\Web\ProductPromoController@getPromoDetail',
	'as' 		=> 'product-promo.detail'
]);

//filter
Route::get('filter/subcat/{id}',[
	'uses' 		=> '\App\Http\Controllers\Web\FilterController@filterSubkategoris',
	'as' 		=> 'filter.subcat'
]);

Route::get('filter/merk/{id}',[
	'uses' 		=> '\App\Http\Controllers\Web\FilterController@filterMerk',
	'as' 		=> 'filter.merk'
]);

Route::get('filter/warna/{id}',[
	'uses' 		=> '\App\Http\Controllers\Web\FilterController@filterWarna',
	'as' 		=> 'filter.warna'
]);

Route::get('filter/transmisi/{id}',[
	'uses' 		=> '\App\Http\Controllers\Web\FilterController@filterTransmisi',
	'as' 		=> 'filter.transmisi'
]);
//static
Route::get('/static/tentang-kami',[
	'uses' 		=> '\App\Http\Controllers\Web\StaticController@aboutUs',
	'as' 		=> 'static.tentang-kami'
]);

Route::get('/static/cara-beli',[
	'uses' 		=> '\App\Http\Controllers\Web\StaticController@ruleBuyer',
	'as' 		=> 'static.cara-beli'
]);

Route::get('/static/term-condition',[
	'uses' 		=> '\App\Http\Controllers\Web\StaticController@term_condition',
	'as' 		=> 'static.term-condition'
]);

Route::get('/static/kontak-kami',[
	'uses' 		=> '\App\Http\Controllers\Web\StaticController@contactUs',
	'as' 		=> 'static.kontak-kami'
]);

//titip jual admin
Route::get('dashboard/admin/titip-jual',[
	'uses' 		=> '\App\Http\Controllers\Dashboard\AdminTitipJualController@getTitipJual',
	'as' 		=> 'admin.titip-jual'
]);
//product image
Route::get('product/image/create/{id}',[
	'uses' 		=> '\App\Http\Controllers\Dashboard\ProductImageController@create',
	'as' 		=> 'product-image.create'
]);

Route::post('product/image/store',[
	'uses' 		=> '\App\Http\Controllers\Dashboard\ProductImageController@store',
	'as' 		=> 'product-image.store'
]);

//member
Route::get('member/promo/lists', [
	'uses' 		=> '\App\Http\Controllers\Member\PromoController@index',
	'as' 		=> 'promo-list.index'
]);

Route::get('member/profile',[
	'uses' 		=> '\App\Http\Controllers\Member\ProfileController@index',
	'as' 		=> 'profile.index'
]);

Route::get('member/profile/edit',[
	'uses' 		=> '\App\Http\Controllers\Member\ProfileController@edit',
	'as' 		=> 'profile.edit'
]);

Route::patch('member/profile/update',[
	'uses' 		=> '\App\Http\Controllers\Member\ProfileController@update',
	'as' 		=> 'profile.update'
]);

