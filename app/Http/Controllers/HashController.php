<?php

namespace App\Http\Controllers;
use App\Hash;
use\Crypt;
use Illuminate\Http\Request;

class HashController extends Controller
{
    public function hash(Request $request)
    {
        $hash =  Crypt::encrypt($request->input('hash'));
        return view('welcome', compact('hash'));
    }
    public function decrypt(Request $request)
    {
        $hash =  Crypt::decrypt($request->input('dekrip'));
        return view('welcome', compact('hash'));
    }
}
