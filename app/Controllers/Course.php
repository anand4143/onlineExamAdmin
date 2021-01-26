<?php namespace App\Controllers;
use App\Models\CourseModel; 

class Course extends BaseController {

	public function __construct()
  {
    
  }
	public function index()
	{
		echo view('template/header');
		echo view('template/left');
		echo view('course/index');
		echo view('template/footer');
		
    }
    
    public function create(){
        echo view('template/header');
		echo view('template/left');
		echo view('course/addCourse');
		echo view('template/footer');
    }

    public function saveCourse(){
        $data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
            echo "<li>11111";
			$rules = [
				'courseName' => 'required|min_length[3]|max_length[100]',
				'courseDescription' => 'required|min_length[3]'
			];

			if (! $this->validate($rules)) {
                echo "<li>2222";
				$data['validation'] = $this->validator;
			}else{
                echo "<li>333333";
                echo "<pre>";
                print_r($this->request->getPost());
				
				$newData = [
					'courseName' => $this->request->getVar('courseName'),
                    'courseDescription' => $this->request->getVar('courseDescription'),
                    'status' =>'1'

                ];
                $courseModel = new courseModel();
				$courseModel->insertCourse($newData);
				// $session = session();
				// $session->setFlashdata('success', 'Successful Registration');
				//return redirect()->to('/');

			}
		}
        
    }

    public function list(){
        $currentPage = $this->request->getVar('page_courses') ? $this->request->getVar('page_courses') : 1;
        $courseModel = new CourseModel();
        //$data['courses'] = $courseModel->findAll();
        $data = [
            'courses' =>  $courseModel->paginate(5,'courses'),
            'pager' =>  $courseModel->pager,
            'currentPage' => $currentPage
        ];
        // echo "<pre>";
        // print_r($data);
        echo view('template/header');
		echo view('template/left');
		echo view('course/index',$data);
		echo view('template/footer');
        
    }

}
