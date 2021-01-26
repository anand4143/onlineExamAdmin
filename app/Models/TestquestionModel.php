<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

$db = \Config\Database::connect();
class TestquestionModel extends Model
{
    protected $table = 'testquestions';
    protected $primaryKey = 'questionId';
    protected $allowedFields = ['questionId', 'testId', 'question', 'option1', 'option2', 'option3', 'option4', 'option5', 'answer', 'createdDate', 'updatedDate'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    // public function getAllquestionsByTestIds($testId){
    //     $db = db_connect();
    //     $builder = $db->table('testquestions');
    //     $query = $db->query("SELECT * FROM testquestions  WHERE testId=".$testId);
    //     //$builder->select("SELECT DISTINCT(t1.testId),t2.testName FROM testquestions t1, tests t2 WHERE t1.testId=t2.testId",FALSE);
    //    return $result = $query->getResultArray();
    // //    echo "<pre>"; print_r($result);
    // //     die;
    // }

    
}
