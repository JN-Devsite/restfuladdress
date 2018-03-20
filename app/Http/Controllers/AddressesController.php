<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressesController extends Controller
{
	public function home()
	{
		return Address::all();
	}		// public function home()

	public function show(Address $addr)
	{
		return $addr;
	}		//public function show(Address $addr)

	public function store(Request $request)
	{
		$this->validate($request, [
			'address' => 'required'
		]);
    
		$addr = Address::create($request->all());
		return response()->json($addr, 201);
	}		// public function store(Request $request)

	
}
