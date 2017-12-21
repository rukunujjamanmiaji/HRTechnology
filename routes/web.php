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
Auth::routes();

Route::get('/login/{social}', 'Auth\LoginController@socialLogin')
    ->where('social','twitter|facebook|google|github|linkedin');

Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback')
    ->where('social','twitter|facebook|google|github|linkedin');

Route::get('/', 'ProductsController@productindex')->name('home');
Route::get('/products', 'ProductsController@products')->name('products');
Route::get('/product/{id}', 'ProductsController@product')->name('product');

Route::get('search/autocomplete', 'DemoController@autocomplete')->name('search');

Route::get('/contacts', 'ContactsController@home')->name('contacts');
Route::get('/aboutme', 'ContactsController@aboutme')->name('aboutme');
Route::get('/research', 'ContactsController@research')->name('research');
Route::get('/academic', 'ContactsController@academic')->name('academic');
Route::get('/web', 'ContactsController@web')->name('web');
Route::get('/contact', 'ContactsController@contact')->name('contact');

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('/profile/{username}', 'UsersController@profile');
Route::post('/profile/image/{username}', 'UsersController@changeimage');
Route::post('/profile/cover/{username}', 'UsersController@changecoverimage');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {

    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

});



Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');


Route::get('test',function(){
    $orders=App\Order::find(2);
    $items=$orders->orderItems;
    dd($items);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
