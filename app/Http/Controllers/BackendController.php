<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function getNama()
    {
        $user = Auth::user(); // returns an instance of the authenticated user...
        return $user->nama;
    }
}
