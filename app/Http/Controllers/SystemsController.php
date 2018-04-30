<?php

namespace App\Http\Controllers;

use App\System;
use Illuminate\Http\Request;

class SystemsController extends Controller
{
    public function edit($id) {

        $system = System::find($id);
        return view('systems.edit')->with('system', $system);
    }

    public function update(Request $request) {
        // dd($request->all());

        $system = System::find($request['id']);
 
        $system->name = $request['name'];
        $system->imageFileName = $request['imageFileName'];
 
        $system->updated_at = Carbon::now()->toDatetimeString();
        $system->save();
 
        return redirect('systems');
     }
}
