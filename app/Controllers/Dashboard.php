<?php namespace App\Controllers;
use App\Models\UserModel; 
class Dashboard extends BaseController {

	public function __construct()
  {
  }
	public function index()
	{
		echo view('template/header');
		echo view('template/left');
		echo view('dashboard/dashboard');
		echo view('template/footer');
		
	}

}
