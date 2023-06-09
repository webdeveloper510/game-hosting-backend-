<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class GamehostController extends Controller
{

    public function webhosting()
    {
        return view('webhosting');
    }

    public function game_info()
    {
        return view('game_info');
    }
    public function voice()
    {
        return view('voice');
    }
    public function get_server()
    {
        return view('game_server');
    }
    public function get_partners()
    {
        return view('partners');
    }
    public function get_support()
    {
        return view('supports');
    }
    public function get_dedicated()
    {
        return view('dedicated');
    }
    public function get_about_us()
    {
        return view('about_us');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }
    public function register_user()
    {
        $request = Request()->toArray();
        $validator = Validator::make($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            $data = new User;
            $data['first_name']  = $request['first_name'];
            $data['last_name']  = $request['last_name'];
            $data['email']  = $request['email'];
            $data['password']  = $request['password'];
            $data['phone']  = $request['phone'];
            $data->save();
            return redirect('login');
        }
    }

    public function user_login(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            $login = User::where(['email' => $request['email'], 'password' => $request['password']])->get()->toArray();
        }
        if (count($login) > 0) {
            return response()->json([
                'message' => 'Login Successfully !!',
            ]);
        } else {
            return response()->json([
                'message' => 'Invalid Login !!'
            ]);
        }
    }
    public function forgot_password(Request $request, $id){
        $password = $request['password'];
        $password = User::where('id', $id)->update(['password' => $password]);

        return response()->json([
            'Message' => 'Password Updated Successfully !!'
        ]);
    }
}
