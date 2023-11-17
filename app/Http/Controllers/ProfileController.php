<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request,$id){
        $name="Donal Trump";
        $age="75";
        $data=[
            "id"=>$id,
            "name"=>$name,
            "age"=>$age
        ];
        $CookieName = "acess_token";
        $value = "123-xyz";
        $minutes =10;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;
        return response($data,200)->cookie(
            $CookieName,$value,$minutes,$path,$domain,$secure,$httpOnly
        );
    }
}
