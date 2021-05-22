<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	public function home(){
		return view('home0236');
	}
 
	public function artikel(){
		return view('artikel0236');
	}
 
	public function kontak(){
		return view('kontak0236');
	}
}
