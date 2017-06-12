<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class TimerController extends Controller
{


	/*public function show() {

		$current = Carbon::now();

		$newYear = new Carbon('first day of January 2018');

    	$daysLeft = $current->diffInDays($newYear); 

    	return ($daysLeft);
  
}*/

	public function index(){

		$name = "Jaras";

		return view('welcome', compact($name));
	}



}
