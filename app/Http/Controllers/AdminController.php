<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Guard;

class AdminController extends Controller
{
    public function loginPost(Request $request)
    {
        // var_dump($request->email);exit;
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return view('admin.dashboard');
        } else {
            // echo "dang nhap k thanh cong";exit;
            return redirect('admin/login');
        }
    }
    public  function dashboard()
    {
        

        if (Auth::guard('admin')->check()) {
            $adminUser = Auth::guard('admin')->user();
            return view('admin.dashboard', [
                'user' => $adminUser
                
            ]);
        } else {
            return redirect('admin/login');
        }
    }
    public function statistics()
    {
        echo "day la he thong thong ke";
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
