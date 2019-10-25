<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Plant extends Model
{
        protected $table = 'plant';

        public static function getPlants()
        {
        	return Plant::where('userID', '=', Auth::user()->id)->get();
        }

}
