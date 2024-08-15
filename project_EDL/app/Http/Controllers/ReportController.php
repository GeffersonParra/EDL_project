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
        $reports = Report::where('id_employee', $usuario->id)->get();
        return view('employee.reports', compact('usuario', 'reports'));
    }

    public function generate(Request $request)
    {
        $report = new Report();
        $usuario = $request->user();
        $report->id_employee = $usuario->id;
        if ($request->input("action") == "trabajo") {
            $report->type = 1;
            $report_delete = Report::where('id_employee', $usuario->id)->where('type', 1)->first();
            if($report_delete){
                $ruta_report = $report_delete->document;
                if(Storage::disk('docs')->exists($ruta_report)){
                    Storage::disk('docs')->delete($ruta_report);
                }
                $report_delete->delete();
            }
            $fileName = 'Trabajo-'. $usuario->id . '_' . date('Y-m-d') . '.pdf';
            $report->document = ("docs/Trabajo-".$usuario->id.'_'.date('Y-m-d').'.pdf');
            $report->doc_name = $fileName;
            $report->save();
            $pdf = FacadePdf::loadView('employee.pdf.trabajo', compact('usuario', 'report'));
            Storage::disk('docs')->put($fileName, $pdf->output());
            return $pdf->stream();
            return view('employee.reports', compact('usuario', 'reports'));
            
        } else if ($request->input("action") == "salida") {
            $report->type = 2;
            $report->save();
            $pdf = FacadePdf::loadView("employee.pdf.salida", compact('usuario', 'report'));
            return $pdf->stream('Constancia_Salida_EDL.pdf');
        }
        return redirect()->route("reports");
    }

    public function download($name)
{
    $report = Report::where('doc_name', $name)->first();
    return $report->download();
}
}