<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable=["name","email","post_id","message"];
	public function posts(){
		return $this->belongsTo("App/post");
	}
}
