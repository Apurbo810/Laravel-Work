<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
function index(Request $request): JsonResponse {
    $id = $request->id;
    $name = "Donal Trump" ;
    $age = "75" ;

    $data = [
        'id' => $id,
        'name' => $name,
        'age' => $age
    ];
   $name="access_token";
   $value="123-XYZ";
   $minutes=1;
   $path="/";
   $domain=$_SERVER['SERVER_NAME'];
   $secure=False;
   $httpOnly=True;

$code=200;
    return response()->json($data, $code)
        ->withCookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

}

}

