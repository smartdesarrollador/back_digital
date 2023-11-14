<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
$user = User::where('email',$request['email'])->first();

if($user){
    $response['status'] = 0;
        $response['message'] = 'Email Already Exists';
        $response['code'] = 200;
}else{
$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $response['status'] = 1;
        $response['message'] = 'User Registered Successfully';
        $response['code'] = 200;
}

        
        return response()->json($response);
    }
}
