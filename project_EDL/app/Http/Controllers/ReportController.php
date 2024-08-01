<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show(Request $request)
    {
        $usuario = request()->user();
        return view('employee.reports', compact('usuario'));
    }

    public function generate(Request $request)
    {
        $report = new Report();
        $usuario = $request->user();
        $report->id_employee = $usuario->id;

        if ($request->input("action") == "entrada") {
            $report->type = 1;
            $report->save();
            $pdf = FacadePdf::loadView("employee.pdf.entrada", compact('usuario'));
            return $pdf->stream('Constancia_Entrada_EDL.pdf');
        } else if ($request->input("action") == "salida") {
            $report->type = 2;
            $report->save();
            $pdf = FacadePdf::loadView("employee.pdf.salida", compact('usuario'));
            return $pdf->stream('Constancia_Salida_EDL.pdf');
        }
        return redirect()->route("reports");
    }
}
