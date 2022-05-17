<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\User;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors=Visitor::all();
        return view('admin.visitor.index',compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.visitor.create',compact('users'));
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
            'name'=>'required|string|max:25',
            'phone_number'=>'required|string',
            'email'=>'required|email|unique:visitors',
            'address'=>'required|string',
            'gender'=>'required',
            'visit_who'=>'required',
            'in_time'=>'required',
            'out_time'=>'required',
            'designation'=>'required|string',
            'description'=>'required|string|max:200'

        ]);
        Visitor::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'visit_who'=>$request->visit_who,
            'in_time'=>$request->in_time,
            'out_time'=>$request->out_time,
            'designation'=>$request->designation,
            'description'=>$request->description,
        ]);
        notify()->success('Visitor Register Sucessful');
        return redirect()->route('visitor.index');
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
        $visitors=Visitor::findOrFail($id);
        $users=User::all();
        return view('admin.visitor.edit',compact('visitors','users'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
