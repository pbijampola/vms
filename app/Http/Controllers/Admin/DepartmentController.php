<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use Barryvdh\DomPDF\PDF;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::paginate(6);
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees=Employee::all();
        return view('admin.department.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'department_name' => 'required|string',
            'office_number' => 'required|string',
            'hod' => 'required|string|max:25',
            'assistant' => 'required|string|max:25'

        ]);

        Department::create([
            'department_name' => $request->department_name,
            'office_number' => $request->office_number,
            'hod' => $request->hod,
            'assistant' => $request->assistant
        ]);
        notify()->success('New Department Added Successfully');
        return redirect()->route('department.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::findorFail($id);
        return view('admin.department.edit', compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([

            'department_name' => 'required|string|max:20',
            'office_number' => 'required|string',
            'hod' => 'required|string|max:25',
            'assistant' => 'required|string|max:25'

        ]);
        $department=Department::find($id);
        $department->update($validated);

        notify()->success("Department Update Successfully");
        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != null) {
            $department= Department::where('id', $id);
            $department->delete($id);
            notify()->success("Department Deleted Successfully");
            return redirect()->route('department.index');
        }
    }


    // //download pdf
    // public function downloadPDF(){
    //     $employees=Employee::all();
    //     $pdf=PDF::loadView('pdf',compact('employees'));
    //     return $pdf->download('employees.pdf');
    // }
}
