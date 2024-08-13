<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show(Request $request)
    {
        $usuario = request()->user();
        return view('employee.reports', compact('usuario'));
    }

    public function prueba(Request $request)
    {
        $usuario = request()->user();
        return view('employee.basedashboard', compact('usuario'));
    }

    public function generate(Request $request)
    {
        $report = new Report();
        $usuario = $request->user();
        $report->id_employee = $usuario->id;
        if ($request->input("action") == "trabajo") {
            $report->type = 1;
            $report->document = ("docs/Trabajo-".$usuario->id.'_'.date('Y-m-d').'.pdf');
            $report->save();
            $fileName = 'Trabajo-'. $usuario->id . '_' . date('Y-m-d') . '.pdf';
            $pdf = FacadePdf::loadView('employee.pdf.trabajo', compact('usuario', 'report'));
            Storage::disk('docs')->put($fileName, $pdf->output());
            return $pdf->stream();
            
        } else if ($request->input("action") == "salida") {
            $report->type = 2;
            $report->save();
            $pdf = FacadePdf::loadView("employee.pdf.salida", compact('usuario', 'report'));
            return $pdf->stream('Constancia_Salida_EDL.pdf');
        }
        return redirect()->route("reports");
    }
}