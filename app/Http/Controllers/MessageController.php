<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\MessageRoom;

class MessageController extends Controller
{
    public function get() {
    	return Message::all();
    }

    public function store(Request $request) {
    	$this->validate($request, [
    			"name" => "required|min:2|max:50",
    			"message" => "required|min:2|max:255"
    		]);

    	$message = Message::create($request->all());

    	return $message;
    }
}
