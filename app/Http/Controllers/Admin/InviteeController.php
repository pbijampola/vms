<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitee;
use Illuminate\Http\Request;

class InviteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitees=Invitee::all();
        return view('admin.invite.index',compact('invitees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invite.create');
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
            'mobile_number'=>'required', //regex for validating
            'email'=>'required|email|unique:invitees,email',
            'host'=>'required|string|max:25',
            'purpose'=>'required|string|max:200',
            'invite_date'=>'required|date',
            'invite_time'=>'required|date_format:H:i'
        ]);
        Invitee::create([
            'name'=>$request->name,
            'mobile_number'=>$request->mobile_number,
            'email'=>$request->email,
            'host'=>$request->host,
            'purpose'=>$request->host,
            'invite_date'=>$request->invite_date,
            'invite_time'=>$request->invite_time

        ]);
        notify()->success('Initation has been sent');
        return redirect()->route('invitee.index');
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
        $invitee=Invitee::findorFail($id);
        return view('admin.invite.edit',compact('invitee'));
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
            'name'=>'required|string|max:25',
            'mobile_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10', //regex for validating
            'email'=>'required|email|unique:invitees,email',
            'host'=>'required|string|max:25',
            'purpose'=>'required|string|max:200',
            'invite_date'=>'required|date',
            'invite_time'=>'required|date_format:H:i'
        ]);

        $invitee=Invitee::find($id);
        $invitee->update($validated);

        notify()->success("Succesfully Updated Invitee Details");
        return redirect()->route('invitee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != null){
            $invitee=Invitee::where('id',$id);
            $invitee->delete($id);
            notify()->success("Invite Deleted Successfully");
            return redirect()->route('invitee.index');
        }
    }
}
