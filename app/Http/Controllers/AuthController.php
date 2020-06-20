<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AuthController extends Controller
{
    // 
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'email'    => 'required|email',
                'password' => 'required',
            ],[
                'email.required'     => 'Email không được bỏ trống',
                'password.required'  => 'Mật khẩu không được bỏ trống',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->to('/tasks');
            }
            
            return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng');
        }

        return view('auth.login');
    }

    // 
    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name'     => 'required',
                'email'    => 'required|email|unique:users,email',
                'password' => 'required|min:2|max:32|confirmed',
            ],[
                'name.required'      => 'Họ tên không được bỏ trống',
                'email.required'     => 'Email không được bỏ trống',
                'email.email'        => 'Email không đúng định dạng',
                'email.unique'       => 'Email này đã tồn tại',
                'password.required'  => 'Mật khẩu không được bỏ trống',
                'password.min'       => 'Mật khẩu tối thiểu 8 ký tự',
                'password.max'       => 'Mật khẩu tối đa 32 ký tự',
                'password.confirmed' => 'Mật khẩu không trùng khớp với mật khẩu xác nhận',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()
                ->to('/login')
                ->with('success', 'Đăng ký thành công! Hãy đăng nhập tại đây.');
        }

        return view('auth.register');
    }

    // 
    public function logout()
    {
        Auth::logout();

        return redirect()->to('/login');
    }
}
