<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     * Hàm trả về tất cả danh sách voucher trong database cho trang voucher của admin
     */
    public function index()
    {
        $list_vouchers = Voucher::orderBy('id', 'desc')->paginate(5);
        return view('admin.voucher', compact('list_vouchers'));
    }

/**
 * Hàm trả về kết quả mà user tìm kiếm code voucher 
 */
    public function findVoucherUser(Request $request)
    {
        // bắt lỗi trường voucher
        $request->validate(
            [
                'voucher' => 'required',
            ]
        );

        $code = $request->voucher;

        $result = Voucher::where('code', $code)->get();
        // echo $result;


        return view('user.voucher', compact('result'));
    }
    /**
     * Lấy voucher theo code admin nhập
     */
    public function findVoucherAdmin(Request $request)
    {
        // bắt lỗi trường voucher
        $request->validate(
            [
                'voucher' => 'required',
            ]
        );

        $code = $request->voucher;

        $result = Voucher::where('code', $code)->get();
        // echo $result;


        return view('admin.voucher', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(array $voucher)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     * Thêm voucher mới admin
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'code' => 'required',
                'discount' => 'required',
                'expiry' => 'required',
            ]
        );

        $voucher = new Voucher();
        $voucher->code = $request->code;
        $voucher->discount = $request->discount;
        $voucher->expiry = $request->expiry;
        $voucher->save();
        //    Chuyển hướng
        return redirect()->route('voucher-index')->with("thongbaothem", 'Thêm voucher thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Sửa voucher admin
     */
    public function update(Request $request, string $id)
    {
        // Tìm id voucher
        $voucher = Voucher::find($id);
        $voucher->code = $request->input('code');
        $voucher->discount = $request->input('discount');
        $voucher->used = request()->has('used') ? 1 : 0;
        $voucher->expiry = $request->input('expiry');

        $voucher->save();
        return redirect()->route('voucher-index')->with("thongbaosua", 'Sửa voucher thành công');
    }

    /**
     * Remove the specified resource from storage.
     * Xoá voucher admin
     */
    public function destroy(string $id)
    {
        // Tìm voucher có id trùng với id truyền vào trong cơ sở dữ liệu
        $voucher = Voucher::find($id);

        // Nếu user được tìm thấy, thực hiện xoá user đó khỏi cơ sở dữ liệu
        if ($voucher) {
            $voucher->delete();
            // return response()->json(['thongbaoxoa' => 'User deleted successfully.']);
            //    Chuyển hướng
            return redirect()->route('voucher-index')->with("thongbaoxoa", 'Xoá voucher thành công');
        } else {
            //    Chuyển hướng
            return redirect()->route('voucher-index')->with("thongbaoxoa", 'Xoá voucher thất bại');
        }
    }
}
