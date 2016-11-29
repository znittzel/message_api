<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\MessageRoom;

class MessageController extends Controller
{
    public function getByRoomId($room_id) {
    	$room = MessageRoom::whereId($room_id)->first();

    	return $room->messages;
    }

    public function store(Request $request, $room_id) {
    	if (!$room = MessageRoom::whereId($room_id)->first())
    		return "Not found";

    	$this->validate($request, [
    			"room_id" => 'required',
    			"name" => "required|min:2|max:50",
    			"message" => "required|min:2|max:255"
    		]);

    	$message = Message::create($request->all());

    	return $message;
    }
}
