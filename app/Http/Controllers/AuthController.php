<?php

namespace App\Http\Controllers;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginProses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $url = 'https://www.apimapor.diaryies.web.id/api/login';
        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->post($url, [
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($response->status() == 200) {
            $role = $response->json()['data']['role'];
            $request->session()->put('role', $role);

            return redirect('/');
            
        } else {
            return redirect('/login')->with('err', 'Email atau password salah!');
        }
    }
    
    public function logout(){
        session()->forget('role');
        return redirect('/');
    }
}
