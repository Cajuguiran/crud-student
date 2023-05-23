<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class StudentsController extends BaseController
{
    public function index()
    {
        $editStudent = new StudentsModel();
        $data['students'] = $editStudent->findAll();

        return view('students/list', $data);
    }

    public function createStudent()
    {
        
        return view('students/add');
    }

    public function storeStudent()
    {
        $insertStudents = new StudentsModel();

        $data = array(
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'middle' => $this->request->getPost('middle'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        );

        $insertStudents->insert($data);

        return redirect()->to('/students')->with('success', 'Added Successfully!');
    }

    public function editStudent($id)
    {
        $editStudent = new StudentsModel();
        $data['student'] = $editStudent->where('id', $id)->first();

        return view('students/edit', $data);
    }

    public function updateStudent($id)
    {
        $updateStudent = new StudentsModel();
        $db = \Config\Database::connect();
        $data = array(
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'middle' => $this->request->getPost('middle'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        );

        $updateStudent->update($id, $data);

        return redirect()->to('/students')->with('up', 'Updated Successfully!');
    }

    public function deleteStudent($id)
    {
        $deleteStudent = new StudentsModel();
        $deleteStudent->delete($id);

        return redirect()->to('/students')->with('danger', 'Student Deleted!');
    }

}

 