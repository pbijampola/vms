<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'name' => 'required|string|max:25',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'address' => 'required|string',
            'image' => 'required|file',
            'role' => 'required|string|max:15',
            'password' => 'required|min:8|max:16'
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'image' => $request->photo,
            'role' => $request->role,
            'password' => $request->password
        ]);
        if($request->hasFile('photo') && $request->file('photo')->isValid()){
            $user->addMediaFromRequest('photo')->toMediaCollection("photos");
        }
        notify()->success('New User Added Successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.user.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findorFail($id);
        return view('admin.user.edit', compact('users'));
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
            'name' => 'required|string|max:25',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'address' => 'required|string',
            'photo' => 'required|file',
            'department' => 'required|string|max:15',
            'password' => 'required|min:8|max:16'
        ]);
        $user=User::find($id);
        $user->update($validated);

        notify()->success("Successfully Updated User Details");
        return redirect()->route('user.index');


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
            $users=User::where('id',$id);
            $users->delete($id);

            notify()->success("User Delete Successfully");
            return redirect()->route('user.index');
        }
    }
    public function profile(){

    }
}
