<?php

namespace App\Http\Controllers;

use App\Models\ProgressLog;
//use App\Models\System;
use Illuminate\Http\Request;

class ProgressLogController extends Controller
{
    function create() {
        // $system = System::all();
        return view('dev_3.create');
    }

    function store(Request $request) {
        ProgressLog::create([
            'system_id'=>$request->system_id,
            'update_note'=>$request->update_note,
            'status'=>$request->status
        ]);
        return redirect()->back()->with('Succesful', 'Progress Updated');
    }
}
