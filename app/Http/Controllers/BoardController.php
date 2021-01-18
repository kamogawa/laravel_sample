<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardUser;
use App\Models\BoardContents;

class BoardController extends Controller
{
    public function loginForm() {
        return view('board.contents.login');
    }

    public function loginUser(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = BoardUser::whereRaw('email = ? and password = ?', [$email, $password] ); 
        
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
        $contents = BoardContents::orderBy('id', 'desc')->paginate(5);
        $contents->setPath('/list');
        return view('board.contents.list')->with('contents', $contents);
    }

    public function addForm() {
        return view('board.contents.add');
    }
    
    public function add(Request $request) {
        $title = $request->input('title');
        $contents = $request->input('contents');
        $boardContents = new BoardContents();
        $boardContents->title = $title;
        $boardContents->contents = $contents;
        $boardContents->reg_user_id = $request->session()->get('user_id');
        $boardContents->reg_user_name = $request->session()->get('user_name');
        $boardContents->save();
        return redirect('/list');
    }
}
