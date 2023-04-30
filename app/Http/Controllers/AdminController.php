<?php
// Tâm An: 12/4/23
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Đọc database bảng users, sắp xếp theo id, lấy 10 id
       $data = DB::table('users')->orderBy('id','asc')->paginate(2);
    //    return về V(list of users), cái $data
       return view('listofusers',compact('data'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomAuthController $user)
    {
        //Xoa user
	//Thực hiện câu lệnh xóa với giá trị id = $id trả về

    $user->delete();
    return redirect()->route('list.user');
    }
  
}
