<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = ['address', 'city', 'country', 'code', 'lat', 'long'];
}
