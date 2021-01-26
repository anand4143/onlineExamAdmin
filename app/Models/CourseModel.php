<?php

namespace App\Models;

use CodeIgniter\Model;

$db = \Config\Database::connect();
class CourseModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'courseId';
    protected $allowedFields = ['courseName', 'courseDescription', 'createdDate', 'updatedDate', 'status'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    public function insertCourse($data)
    {
        $db = db_connect();
        $builder = $db->table('courses');
        print_r($builder);
        $builder->insert($data);
        // echo $db->insertID();
    }

    public function getCoursesList()
    {
        $db = db_connect();
        $builder = $db->table('courses');
        $query = $builder->get();
        return $query->getResult();
    }
}
