<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //download pdf
    public function downloadPDF(){
        $employees=Employee::paginate(2);
        $pdf=PDF::loadView('admin.employee.index',compact('employees'));
        return $pdf->download('employees.pdf');
    }
}
