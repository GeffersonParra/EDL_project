<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IdType;
use App\Models\Occupation;
use App\Models\Status;
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
        $idtypes = IdType::all();
        $occupations = Occupation::all();
        $usuario = $request->user();
        $statuses = Status::all();
        return view('admin.editprofile', compact('usuario', 'idtypes', 'occupations', 'statuses'));
    }

    public function update(Request $request, $id)
    {
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

    public function employeesList(Request $request)
    {
        $empleados = User::all();
        $usuario = $request->user();
        return view("admin.employees", compact("empleados", "usuario"));
    }

    public function employeeShow(Request $request, $id)
    {
        $empleado = User::find($id);
        $usuario = $request->user();
        return view("admin.viewEmployee", compact("usuario", "empleado"));
    }

    public function employeeEdit(Request $request, $id)
    {
        $idtypes = IdType::all();
        $occupations = Occupation::all();
        $statuses = Status::all();
        $empleado = User::find($id);
        $usuario = $request->user();
        return view("admin.editEmployee", compact("usuario", "empleado", 'idtypes', 'occupations', 'statuses'));
    }

    public function employeeUpdate(Request $request, $id)
    {
        $usuario = User::find($id);
        if ($usuario->role_id != 1) {
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
            return redirect()->route("admin.employees.show", $id)->with('success', 'Datos del empleado modificados exitosamente.');
        }
        else {
            return redirect()->route("admin.employees.show", $id);
        }
    }
}
