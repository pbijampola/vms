<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\PDF;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::orderBy('id', 'DESC')->paginate(10);
        return view('admin.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('admin.employee.create',compact('departments'));
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
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required', //regex for validation
            'department' => 'required',
            'employee_role' => 'required|string',
            'employee_name' => 'required|string|max:20',
            //'check_in' => 'required|time',
            //'check_out' => 'required|time',
            //'total_hour' => 'required|numeric',
            //'image' => 'required|image|mimes:png,jpg',
        ]);

        $employee = Employee::create([
            'employee_name' => $request->employee_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'department' => $request->department,
            //'image' => $request->image,
            //'check_in' => $request->check_in,
            //'check_out' => $request->check_out,
            //'total_hour' => $request->total_hour,
            'employee_role' => $request->employee_role,
            //'employee_id' => $request->IdGenerator::generate(['table'=>'employees','length'=>6,'prefix'=>'EMP']),

        ]);


        if($request->hasFile('image') && $request->file('image')->isValid()){
            $employee->addMediaFromRequest('image')->toMediaCollection('images');
        }
           notify()->success('Employee Added Successfully');
        return redirect()->route('employee.index');
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
        $employees=Employee::findorFail($id);
        return view('admin.employee.edit',compact('employees'));
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
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10', //regex for validation
            'department' => 'required',
            'employee_role' => 'required|string',
            'employee_name' => 'required|string|max:20',
            //'check_in' => 'required|time',
            //'check_out' => 'required|time',
            //'total_hour' => 'required|numeric',
            //'image' => 'required|image|mimes:png,jpg',
        ]);

        $employee=Employee::find($id);
        $employee->update($validated);

        notify()->success("Successfully Updated Employee Details");
        return redirect()->route('employee.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id!=""){
            $employee=Employee::where('id',$id);
            $employee->delete($id);
            notify()->success("Employee Deleted Successfully");
            return redirect()->route('employee.index');

        }
    }


}
