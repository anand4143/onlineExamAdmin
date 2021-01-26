<?php namespace App\Controllers;
use App\Models\UserModel; 
class Login extends BaseController {

	public function __construct()
  {
	  
  }
	public function index()
	{
		
		//echo view('template/header');
		echo view('login/login');
		//echo view('template/footer');
		
	}

	public function login(){	
		$data = [];
		helper(['form']);
		if ($this->request->getMethod() == 'post') {
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[6]|max_length[255]',
			];
			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];
			if ($this->validate($rules)) {
				$model = new UserModel();
				$userSession = session();
				$user = $model->where('email', $this->request->getVar('email'))->first();
				$this->setUserSession($user);
				return redirect()->to(base_url('/dashboard/index'));
			}else{
				$this->validate($rules);
				$data['validation'] = $this->validator;
				echo view('login/login',$data);
			}
		}
	}

	private function setUserSession($user){
		$userSession = session();
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstName'],
			'lastname' => $user['lastName'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		$userSession->set($data);
		return true;
	}

	public function logout(){
		session()->destroy();
		return redirect()->to(base_url('/login/index'));
	}
	//--------------------------------------------------------------------

}
