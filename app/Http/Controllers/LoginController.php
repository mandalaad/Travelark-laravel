<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(){
        return view ('pages.login');
    }
    public function login(Request $request){
        $data = $request->only([
            'username',
            'password'
        ]);
        $response = Http::post('https://travelark.up.railway.app/api/auth/login', ['username' => $data['username'], 'password'=> $data['password']]);
        // dd(json_decode($response->body()));
        $this->storeJWT($request, json_decode($response->body()));
        return redirect()->route('adminindex');
    }
    public function storeJWT(Request $request, $data){
        try{
            $token_enc = Crypt::encryptString($data->access_token);
            $request->session()->put([
                'token' => $token_enc,
                'username' => $data->data->username,
                'level' => $data->data->level
            ]);
        }catch(Exception $e){
            return $e;
        }
        return true;
    }
}
