<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class userController extends Controller
{
    public function postRegister(Request $req) {
        $validatedData = $req->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required' => 'Xin hãy nhập tên đăng nhập.',
            'name.unique' => 'Tên đăng nhập đã được sử dụng.',
            'email.required' => 'Xin hãy chưa nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email đã được sử dụng.',
            'password.required' => 'Bạn chưa nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => hash::make($validatedData['password'])
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function postLogin(Request $req) {
        $credentials = $req->validate([
            'name' => 'required',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Xin hãy nhập tên đăng nhập.',
            'password.required' => 'Xin hãy nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        // nếu nhập sai tài khoản hoạc mật khẩu
        return back()->with(['login_error' => 'Tài khoản hoặc mật khẩu không chính xác.']);
    }

    public function register() {

        return view('register');
    }

    public function login() {

        return view('login');
    }

}
