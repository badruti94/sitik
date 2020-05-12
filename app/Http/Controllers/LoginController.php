<?php

namespace App\Http\Controllers;

use App\m_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $user = DB::table('user')->where([
            ['username', '=', $request->username],
            ['password', '=', $request->password]
        ])->get();

        if (count($user) > 0) {
            $user = $user[0];
            session(['level' => $user->status]);
            session(['id_user' => $user->id_user]);
            session(['password' => $user->password]);
            session(['nama' => $user->nama]);
            session(['login' => 'true']);
            

            if ($user->status == 'admin') {
                return view('admin.index');
            } else {
                return view('user.index');
            }
        } else {
            return redirect()->back()->with('status', 'Username atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        
        $request->session()->forget(['level', 'id_user', 'login']);
        return redirect('/');
    }
}
