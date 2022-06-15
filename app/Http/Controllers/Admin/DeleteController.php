<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy($id)
    {
    	DB::table("invitees")->delete($id);
    	return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
    }
}
