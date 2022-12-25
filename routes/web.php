<?php

use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $coupons = Coupon::all();
    // dd($coupons);
    return view('home')->with(['coupons' => $coupons]);
})->name('home');

Route::get('/dashboard', function () {
    $user = User::find(auth()->user()->id);
    $count = DB::table('coupon_user')->where('user_id', auth()->user()->id)->count();
    return view('dashboard',)->with(['user' => $user, 'count' => $count]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/coupon/{id}', [CouponController::class, 'showCoupon'])->name('coupon');
Route::get('new-coupon', [CouponController::class, 'new'])->name('new-coupon');
Route::post('/new-coupon', [CouponController::class, 'add'])->name('add-coupon');
Route::post('/edit-coupon', [CouponController::class, 'editCoupon'])->name('edit-coupon');
Route::patch('/edit-coupon', [CouponController::class, 'edition'])->name('coupon-edition');
Route::delete('/delete-coupon', [CouponController::class, 'deleteCoupon'])->name('delete-coupon');


Route::get('/user-list', [UserController::class, 'list'])->name('user-list');

Route::post('/edit-user', [UserController::class, 'editUser'])->name('edit-user');
Route::delete('/delete-user', [UserController::class, 'deleteUser'])->name('delete-user');
Route::patch('/edit-user', [UserController::class, 'edition'])->name('edition');

Route::get('/coupons', [CouponController::class, 'allCoupons'])->name('coupons');

Route::post('/user-coupon', [UserController::class, 'couponList'])->name('see-user-coupon');


require __DIR__.'/auth.php';
