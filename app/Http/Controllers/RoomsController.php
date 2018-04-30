<?php

namespace App\Http\Controllers;

use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index() {

        $rooms = Room::where('systemID', app('system')->id)->get();  

        return view('rooms.index', compact('rooms'));
    }

    public function create() {

        return view('rooms.create');
    }

    public function store(Request $request) {

        //dd($request->all());

        $newRooms = Room::create([
            "name" => $request['name'],
            "comments" => $request['comments'],
            "systemID" => app('system')->id,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('rooms');
    }

    public function edit($id) {

        //return($id);

        $rooms = Room::find($id);
        return view('rooms.edit')->with('rooms', $rooms);
    }

    public function update(Request $request) {
       // dd($request->all());

        $rooms = Room::find($request['id']);

            $rooms->name = $request['name'];
            $rooms->comments = $request['comments'];

            $rooms->updated_at = Carbon::now()->toDatetimeString();
            $rooms->save();

            return redirect('rooms');
    }

    public function destroy($id) {

        Room::destroy($id);

        $rooms = Room::where('systemID', app('system')->id)->get();  

        return view('rooms.index', compact('rooms'));

    }
}
