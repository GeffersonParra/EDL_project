<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        $usuario = $request->user();
        return view('admin.dashboard', compact('usuario'));
    }

    public function profile(Request $request){
        $usuario = $request->user();
        return view('admin.profile', compact('usuario'));
    }
}
