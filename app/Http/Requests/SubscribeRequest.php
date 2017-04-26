<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\User;

use App\Mail\NewSubscriber;

class SubscribeRequest extends FormRequest
{
	
	
	
	
	
	
	
	/**
	* Determine if the user is authorized to make this request.
							     *
							     * @return bool
							     */
							    public function authorize()
							    {
		return true;
	}
	
	
	
	
	
	
	
	
	/**
	* Get the validation rules that apply to the request.
							     *
							     * @return array
							     */
							    public function rules()
							    {
		return [
														           'name'=> 'required',
																   'email'=>'required|unique:users|email',
		
		];
	}
	
	public function persist()
							    {
		$user = User::create([ 
														'name' => request('name'),
														'email' => request('email'),
														'skype' => request('skype')
														]);
		
		$nna = User::first();		
		
		
		\Mail::to($nna)->send(new NewSubscriber ($user));
	}
}
