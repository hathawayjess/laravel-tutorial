<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home() {

		return view('home');
	}

	public function about() {

		$name = 'Jessica';
		$data = [];
		$data['first'] = 'Jess';
		$data['last'] = 'Hathaway';
		$first = 'Jessica';
		$last = 'Hathaway';

		$people = ['Person1', 'Person2', 'Person3'];

		// return view('pages.about')->with('name', $name);

		// return view('pages.about')->with([ //when passed an array, each key will be translated
		// 	'first' => $name,              //into the name of the variable
		// 	'last' => 'Hathaway'
		// ]);

		// return view('pages.about', $data);

		return view('pages.about', compact('first', 'last', 'people'));

	}

	public function contact() {

		return view('pages.contact');
	}

}
