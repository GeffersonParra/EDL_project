<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class EmployeeController extends Controller
{
    public function show(Request $request)
    {
        $usuario = $request->user();

        return view('employee.dashboard', compact('usuario'));
    }


    public function profile(Request $request)
    {
        $usuario = $request->user();

        return view('employee.profile', compact('usuario'));
    }

    public function edit(Request $request)
    {
        $usuario = $request->user();

        return view('employee.editprofile', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $datos = request()->except(["_token", "_method"]);
        if($request->hasFile("photo")){
            $datos["photo"]=$request->file("photo")->store("uploads", "public");
        }
        User::where('id', '=', $id)->update($datos);
        return redirect()->route("my_profile")->with('success', 'Datos modificados exitosamente.');
    }
}
