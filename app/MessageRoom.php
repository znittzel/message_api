<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageRoom extends Model
{
    protected $fillable = [
    	"name"
    ];

    public function messages() {
    	return $this->hasMany('App\Message');
    }
}
