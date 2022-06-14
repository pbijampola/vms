<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Invitee;
use App\Models\Visitor;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $invitees=Invitee::count();
        $visitors=Visitor::count();
        $departments=Department::count();
        $employees=Employee::count();
        $users=User::count();

        return view('admin.index',compact('invitees','visitors','departments','employees','users'));
    }
}
