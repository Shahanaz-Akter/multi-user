<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

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



// for kogin and singup
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/post_login', [UserController::class, 'postLogin']);

Route::get('/signup', function () {
    return view('auth.signup');
});
Route::post('/post_signup', [UserController::class, 'postSignUp']);


// for admin

// admin can access only admin routes
// 
Route::group(['middleware' => ['auth', 'role:admin']], function () { //role=admin
    // All Admin routes
    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    });
    Route::get('/add_product', function () {
        return view('admin.add_product');
    });
    Route::post('/post_product', [ProductController::class, 'postProduct'] );
    Route::get('/delete_product/{product_id}', [ProductController::class, 'deleteProduct'] );
    Route::get('/edit_product/{product_id}', [ProductController::class, 'editProduct'] );
    Route::post('/post_edit_product/{product_id}', [ProductController::class, 'postEditProduct'] );
    Route::get('/productlist', function () {
        return view('admin.product_list');
    });
    Route::get('/orderlist', function () {
        $orders = App\Models\Order::all();
        return view('admin.order_list')->with('orders',$orders);
    });
    Route::get('/changeStatus/{required_status}/{order_id}',[OrderController::class, 'changeStatus']);
});





// for customer
// customer can access only customer routes
Route::group(['middleware' => ['auth', 'role:customer']], function () {
    Route::get('/customer_productlist', function () {
        return view('customer.productlist');
    });
    Route::post('/post_order', [OrderController::class, 'postOrder']);
    Route::get('/customer_order_history', [OrderController::class, 'getCustomerOrderHistory']);
});


Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});
