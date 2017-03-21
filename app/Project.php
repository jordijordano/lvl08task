<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'slug'];

    //funció que retornarà les tasques que pertanyen al projecte
	public function tasks() {
			return $this->hasMany('App\Task');
	}

}
