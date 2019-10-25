<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Plant extends Model
{
        protected $table = 'plant';

        public function getPlants()
        {
        	return $this->where('userID', '=', Auth::user()->id)->get();
        }

        public function createPlant()
        {
        	
        }
}
