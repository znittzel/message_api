<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MessageRoom;

class MessageRoomController extends Controller
{
    public function get() {
    	return MessageRoom::all();
    }

    public function getById($id) {
    	return MessageRoom::whereId($id)->first();
    }

    public function store(Request $request) {
    	$this->validate($request, [
    			"name" => "required|min:2|max:50"
    		]);

    	return MessageRoom::create($request->all());
    }
}
