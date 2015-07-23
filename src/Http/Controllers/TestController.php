<?php

namespace AndyJessop\Starter\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class StarterController extends Controller
{
	public function index()
	{
		return view('starter::test')->with('message', config('starter.message'));
	}
}
