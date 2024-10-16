<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $usuario = $request->user();
        return view('admin.dashboard', compact('usuario'));
    }

    public function profile(Request $request)
    {
        $usuario = $request->user();
        return view('admin.profile', compact('usuario'));
    }

    public function edit(Request $request)
    {
        $usuario = $request->user();
        return view('admin.editprofile', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        if ($request->input("action") == "salida") {
            return redirect()->route("admin.my_profile");
        } else {
            $usuario = request()->user();
            $datos = request()->except(["_token", "_method", "action"]);
            $foto = $request->file("photo");
            if ($foto) {
                $archivo = file_get_contents($foto);
                $borrar_foto = $usuario->photo != "photos/default.jpg";
                if ($borrar_foto) {
                    $ruta_borrar = $usuario->photo;
                    if (Storage::disk('photo')->exists($ruta_borrar)) {
                        Storage::disk('photo')->delete($ruta_borrar);
                    }
                }
                $photoname = $usuario->id . '.' . $foto->getClientOriginalExtension();
                Storage::disk('photo')->put($photoname, $archivo);
                $datos["photo"] = "photos/" . $photoname;
            }
            User::where('id', '=', $id)->update($datos);
            return redirect()->route("admin.my_profile")->with('success', 'Datos modificados exitosamente.');
        }
    }

    public function employees(Request $request){
        $usuarios = User::all();
        $usuario = $request->user();
        return view("admin.employees", compact("usuarios", "usuario"));
    }
}
