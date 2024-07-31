<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show(Request $request){
        $usuario = request()->user();
        return view('employee.reports', compact('usuario'));
    }

    public function store(Request $request){
        $usuario = request()->user();
        $datos = $usuario->id;
        $data = request()->except("_token",'name','lastname','idtype','email','telephone','address','occupation','birth','photo','inday','outday','actualproject','status','password',);
        Report::insert($data);
        return redirect()->route("reports");
    }
}
