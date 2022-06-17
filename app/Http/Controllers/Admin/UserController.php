<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::get();
        return view('admin.user.create',compact('roles'));
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
            'gender' => 'required|string',
            'role' => 'required|string|max:15',
            'password' => 'required|min:8|max:16'
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gender' => $request->gender,
            'role' => $request->role,
            'password' => $request->password
        ]);
        if($request->hasFile('photo') && $request->file('photo')->isValid()){
            $user->addMediaFromRequest('photo')->toMediaCollection("photos");
        }

        //dd($user);
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
        $roles=Role::get();
        $users = User::findorFail($id);
        return view('admin.user.edit', compact('users','roles'));
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
            'gender' => 'required|string',
            'role'=>'required|string',
            'department' => 'required|string|max:15',
            'password' => 'required|min:8|max:16'
        ]);

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
            $user->addMediaFromRequest('photo')->toMediaCollection("photosUpdated");
        }

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
