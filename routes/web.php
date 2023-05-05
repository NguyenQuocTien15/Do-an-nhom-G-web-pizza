<?php

use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tracking', [BillController::class, 'index']);
Route::get('/tracking/{slug}/{id_status}', [BillController::class, 'show'])->name('tracking_custom');

// trang của user
Route::prefix('/user')->group(function () {
    // voucher hiển thị giao diện, không truy vấn
    Route::get('/voucher', function () {
        return view('user.voucher');
    });

    // Trang xử lý: truy vấn code voucher user
    Route::post('/voucher', [VoucherController::class, 'findVoucherUser'])->name('find-voucher-user');
});


// admin 
Route::prefix('admin')->group(function () {
    // trang hiển thị mặc định tất cả voucher
    Route::get('/voucher', [VoucherController::class, 'index'])->name('voucher-index');
    // trang trả ra kết quả tìm kiếm
    Route::post('/voucher', [VoucherController::class, 'findVoucherAdmin'])->name('admin-voucher-timkiem');

    // Thêm voucher
    Route::post('/addvoucher', [VoucherController::class, 'store'])->name('them-voucher');
    // Xoá voucher
    Route::post('/deletevoucher/{id_voucher}', [VoucherController::class, 'destroy'])->name('xoa-voucher');
    // Sửa voucher
    Route::post('/editvoucher/{id_voucher}', [VoucherController::class, 'update'])->name('sua-voucher');
});
