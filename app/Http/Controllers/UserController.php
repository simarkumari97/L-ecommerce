<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req)
    {

        $user=User::where(['name'=>$req->name])->first();
        //$pass=Hash::check($req->password, $user->password);
        if(!$user || !Hash::check($req->password, $user->password)){
            return redirect('errorlogin');
        }
        else{
            $req->session()->put('user',$user);
            return redirect("/");
            // continue code in UserAuth.php file
        }

    }

    function register(Request $req){
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
