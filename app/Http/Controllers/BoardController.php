<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BoardController extends Controller
{
    public function loginForm() {
        return view('board.contents.login');
    }

    public function loginUser(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::whereRaw('email = ? and password = ?', [$email, $password] ); 
        
        if ( $user->count() > 0 ) {
            // ログイン成功
            $request->session()->put('login', true);
            $request->session()->put('user_id', $user->get()[0]->id);
            $request->session()->put('user_name', $user->get()[0]->name);
            return redirect('/list');
        } else {
            // ログイン失敗
            return redirect('/login-form');
        }
    }

    public function listView() {
        return view('board.contents.list')->with('contents', 'ログイン成功');
    }
}
