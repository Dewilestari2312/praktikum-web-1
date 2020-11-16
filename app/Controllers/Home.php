<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function show()
	{
		echo view('header');
		echo view('index');
		echo view('footer');
	}
}