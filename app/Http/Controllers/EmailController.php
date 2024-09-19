<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EmailController extends Controller
{
    public function getFormCheckEmail(){
        return view('modules.ValidateEmail.email');
    }

    public function index(Request $request){
        $email = $request ->email;
        if($email){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                $message = "Valid user Email!";
            }else{
                $message = "Error valid user Email!";
            }
        }else{
            $message = "Please enter to check email!";
        }
        return view('modules.ValidateEmail.email',compact('message'));
    }
}
