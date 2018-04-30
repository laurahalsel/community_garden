<?php

namespace App\Http\Controllers;

use App\PlantType;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PlantTypeController extends Controller {

    public function index() {

        $planttypes = PlantType::where('systemID', app('system')->id)->get();  

        return view('planttypes.index', compact('planttypes'));
    }

    public function create() {

        return view('plantTypes.create');
    }

    public function store(Request $request) {

        //dd($request->all());

        $newPlantTypes = PlantType::create([
            "name" => $request['name'],
            "comments" => $request['comments'],
            "systemID" => app('system')->id,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('planttypes');
    }

    public function edit($id) {

        //return($id);

        $planttypes = PlantType::find($id);
        return view('planttypes.edit')->with('planttypes', $planttypes);
    }

    public function update(Request $request) {
       // dd($request->all());

        $planttypes = PlantType::find($request['id']);

            $planttypes->name = $request['name'];
            $planttypes->comments = $request['comments'];

            $planttypes->updated_at = Carbon::now()->toDatetimeString();
            $planttypes->save();

            return redirect('planttypes');
    }

    public function destroy($id) {

        PlantType::destroy($id);

        $planttypes = PlantType::where('systemID', app('system')->id)->get();  

        return view('planttypes.index', compact('planttypes'));

    }

}
