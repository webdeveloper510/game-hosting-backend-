<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class GamehostController extends Controller
{

    public function get_server(){
        return view('game_server');
    }
    public function get_partners(){
        return view('partners');
    }
    public function get_support(){
        return view('supports');
    }
    public function get_dedicated(){
        return view('dedicated');
    }
    public function get_about_us(){
        return view('about_us');
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }
    public function register_user(Request $request){

        $data = new User;
        $data['first_name']  = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['email']  = $request->email;
        $data['password']  = $request->password;
        $data->save();
        return response()->json([
            'message' => 'User inserted successfully !!'

        ]);
    }

    public function user_login(Request $request)
    {
        $login = User::where(['email' => $request['email'], 'password' => $request['password']])->get()->toArray();

        if (count($login)>0) {
            return response()->json([
                'message' => 'Login Successfully !!',
             ]);
        }
        else{
            return response()->json([
                'message' => 'Invalid Login !!'
            ]);
        }

    }
}
