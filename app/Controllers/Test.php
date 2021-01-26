<?php

namespace App\Controllers;

require('vendor/autoload.php');
use App\Models\CourseModel;
use App\Models\SubjectModel;
use App\Models\TestModel;
use App\Models\TestquestionModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class Test extends BaseController
{

    public function __construct()
    {
    }
    public function index()
    {
        echo view('template/header');
        echo view('template/left');
        echo view('test/index');
        echo view('template/footer');
    }

    public function create()
    {
        if ($this->request->uri->getSegment(3)) {
            $testModel = new TestModel();
            $testId = $this->request->uri->getSegment(3);
            $data['testtData'] = $testModel->find($testId);
            //    echo "<pre>";print_r($data);echo "<hr>";
        }else{
            $data['testData'] = array(
            "testId" => '',
            "courseId" => '',
            "testName" => '',
            "testDescription" => '',
            "status" => 1,
            "createdDate" => '',
            "updatedDate" => ''
            );
        }

        $courseModel = new CourseModel();
        $data['courseList'] = $courseModel->getCoursesList();
        // echo "<pre>";
        // print_r($data);exit;
        echo view('template/header');
        echo view('template/left');
        echo view('test/addTest', $data);
        echo view('template/footer');
    }

    public function saveTest()
    {
        $data = [];
        helper(['form', 'url']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'courseId' => 'required',
                'testName' => 'required|min_length[3]|max_length[100]',
                'testDescription' => 'required|min_length[3]'
            ];
            if ($this->validate($rules)) {
                $testModel = new TestModel();
                // echo "<pre>";
                // print_r($this->request->getPost());
                if ($this->request->getVar('testIdForEdit')) {
                    $testIdForEdit = $this->request->getVar('testIdForEdit');
                    $checkAvailability = $testModel->find($testIdForEdit);
                    if ($checkAvailability['subjectId']) {
                        $newData = [
                            "courseId"              => $this->request->getVar('courseId'),
                            'testName'           => $this->request->getVar('subjectName'),
                            'testDescription'    => $this->request->getVar('subjectDescription'),
                            'status'                => '1'
                        ];
                        $result = $testModel->updateTest($newData, $testIdForEdit);
                        if ($result) {
                            return redirect()->to(base_url('/test/list'));
                        }
                    }
                } else {
                    $newData = [
                        "courseId"              => $this->request->getVar('courseId'),
                        'testName'           => $this->request->getVar('subjectName'),
                        'testDescription'    => $this->request->getVar('testDescription'),
                        'status'                => '1'
                    ];
                    $result = $testModel->insertTest($newData);
                    if ($result > 0) {
                        return redirect()->to(base_url('/test/list'));
                    }
                }
            } else {
                $data['testData'] = array(
                    "testId" => '',
                    "courseId" => '',
                    "testName" => '',
                    "testDescription" => '',
                    "status" => 1,
                    "createdDate" => '',
                    "updatedDate" => ''
                    );
                $courseModel = new CourseModel();
                $data['courseList'] = $courseModel->getCoursesList();
                //$this->validate($rules);
                $this->validate($rules);
                $data['validation'] = $this->validator;
                echo view('template/header');
                echo view('template/left');
                echo view('test/addTest', $data);
                echo view('template/footer');
            }
        }
    }

    public function list()
    {
        $currentPage = $this->request->getVar('page_courses') ? $this->request->getVar('page_courses') : 1;
        $testModel = new TestModel();
        $testwithQuestions = $testModel->getTestIdsQestionsTable();
        $allTest = $testModel->join('courses','courses.courseId=tests.courseId')->paginate(5, 'courses');
        for($i=0; $i< count($testwithQuestions); $i++){
            for($j=0; $j<count($allTest); $j++){
                if($allTest[$j]['testId']== $testwithQuestions[$i]['testId']){
                    $allTest[$j]['hasQuestions'] = 'yes';
                }
            }
        }
        // $courseModel = new CourseModel();
        // $data['courses'] = $courseModel->findAll();
        $data = [
            'tests' =>  $allTest,
            'pager' =>  $testModel->pager,
            'currentPage' => $currentPage
        ];
        echo view('template/header');
        echo view('template/left');
        echo view('test/index', $data);
        echo view('template/footer');
    }

    public function uploadQuestions()
    {
        $testModel = new TestModel();
        $courseId = $this->request->uri->getSegment(3);
        $testId = $this->request->uri->getSegment(4);
        $data['testtData'] = $testModel->find($testId);
        //echo "<pre>";print_r($data);die;
        echo view('template/header');
        echo view('template/left');
        echo view('test/uploadQuestions',$data);
        echo view('template/footer');
    }

    public function saveQuestions(){
        $fail = 0;
        $testId     = $this->request->getVar('testId');
        $courseId   = $this->request->getVar('courseId');
        // echo "<li>3==> ".$testId     = $this->request->uri->getSegment(3);
        $validation = \config\Services::validation();
        $valid = $this->validate(
            [
                'fileimport' => [
                    'label' => 'Input file',
                    'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
                    'errors' => [
                        'uploaded'=> '{field} valid file',
                        'ext_in' => '{field} upload only xls & xlsx'
                    ]
                ]
            ]
        );
        //echo "<li>".$valid;die;
        if(!$valid){
           
            $this->session->setFlashdata( 'extError',$validation->getError('fileimport'));
            return redirect()->to(base_url('/test/uploadQuestions/'.$testId));
        }
        // if ($testId) {
        //     $testModel = new TestModel();
        //     // $testId = $this->request->uri->getSegment(3);
        //     $data['testtData'] = $testModel->find($testId);
        //        echo "<pre>";print_r($data);echo "<hr>";die;
        // }else{
            
            $file_excel = $this->request->getFile('fileimport');
            // echo "<pre>";var_dump($_FILES['fileimport']['name']);echo "<hr>";
            $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            // echo "<li>=====> ".$_FILES['fileimport']['name'];
            if(isset($_FILES['fileimport']['name'])) {
                $arr_file = explode('.', $_FILES['fileimport']['name']);
                $extension = end($arr_file);
                if('csv' == $extension){
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                }
                $spreadsheet = $reader->load($_FILES['fileimport']['name']);
                $sheetData = $spreadsheet->getActiveSheet()->toArray();
                // echo "<pre>";
                // print_r($sheetData);
                $noOfQuestion = count($sheetData);
                $testModel = new TestModel();
                foreach($sheetData as  $value){
                        $result = [
                            "testId"        => $testId,
                            "question"      => $value[0],
                            "option1"       => $value[1],
                            "option2"       => $value[2],
                            "option3"       => $value[3],
                            "option4"       => $value[4],
                            "answer"        => $value[5]
                        ];
                        $saveDataIndicator = $testModel->insertQuestion($result);
                        if($saveDataIndicator){
                            $fail = 1;
                        }
                }
                if($fail != 1){
                    // if any data fail then write here code for all inserted questions
                }else{
                    $this->session->setFlashdata( 'Uploaded',"Test questions uploaded successfully.");
                    return redirect()->to(base_url('/test/uploadQuestions/'.$courseId.'/'.$testId));
                }
               

            }else{
                echo "anand";
            }
        // }
    }

    public function allQuestions(){
        $courseId   =  $this->request->uri->getSegment(3);
        $testId     =  $this->request->uri->getSegment(4);
        $currentPage = $this->request->getVar('page_courses') ? $this->request->getVar('page_courses') : 1;
        $testquestionsModel = new TestquestionModel();
        $allTestQuestions = $testquestionsModel->where('testId',$testId)->paginate(5,'courses');
        $j = 0;
        $temp = [];
        for($i=0; $i< count($allTestQuestions); $i++){
                if($allTestQuestions[$i]['testId'] == $testId){                   
                    $$allTestQuestions[$j] =  $allTestQuestions[$i];
                    $j++;
            }  
        }
        $data = [
            'allQuestions' =>  $allTestQuestions,
            'pager' =>  $testquestionsModel->pager,
            'currentPage' => $currentPage
        ];
        echo view('template/header');
        echo view('template/left');
        echo view('test/allQuestions',$data);
        echo view('template/footer');
    }

    public function anand($data){
        echo "<pre>";
        print_r($data);
    }
}
