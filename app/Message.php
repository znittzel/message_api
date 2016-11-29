<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
    	"name", "message"
    ];

    public function message_room() {
    	return $this->belongsTo('App\MessageRoom');
    }
}
