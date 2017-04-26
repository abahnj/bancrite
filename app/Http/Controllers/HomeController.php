<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\SubscribeRequest;

class HomeController extends Controller
{
	public function index(){
		return view('main.welcome');
		
	}
	
	public function store(SubscribeRequest $form){

		$form->persist();
		
		session()->flash('message','Thanks so much for signing up');
		
			}
}
