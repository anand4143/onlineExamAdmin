<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

$db = \Config\Database::connect();
class TestModel extends Model
{
    protected $table = 'tests';
    protected $primaryKey = 'testId';
    protected $allowedFields = ['courseId', 'testName', 'testDescription', 'status', 'createdDate', 'updatedDate'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    public function insertTest($data)
    {
        $db = db_connect();
        $builder = $db->table('tests');
        //print_r($builder);
        $builder->insert($data);
        return $db->insertID();
    }
    public function updateTest($data,$testIdForEdit)
    {
        // echo  $subjectIdForEdit;die('heeeee');
        $db = db_connect();
        $builder = $db->table('tests');
        // $builder->set('courseId', 'subjectName','subjectDescription','updatedDate');
        $builder->set('updatedDate', 'NOW()', FALSE);
        $builder->where('testId', $testIdForEdit);
        $builder->update($data);
        // echo "<pre>";print_r($db->getLastQuery());
        return $db->affectedRows();
    }

    public function insertQuestion($data){
        $db = db_connect();
        $builder = $db->table('testquestions');
        $builder->insert($data);
        return $db->affectedRows();
    }

    public function getTestIdsQestionsTable(){
        $db = db_connect();
        $builder = $db->table('testquestions');
        $query = $db->query("SELECT DISTINCT(t1.testId),t2.testName FROM testquestions t1, tests t2 WHERE t1.testId=t2.testId");
        //$builder->select("SELECT DISTINCT(t1.testId),t2.testName FROM testquestions t1, tests t2 WHERE t1.testId=t2.testId",FALSE);
        return $result = $query->getResultArray();
    //    echo "<pre>"; print_r($result);
    //     die;
    }
}
