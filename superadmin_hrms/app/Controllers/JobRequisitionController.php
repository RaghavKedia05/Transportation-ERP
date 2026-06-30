<?php

namespace App\Controllers;

use App\Models\JobRequisitionModel;

class JobRequisitionController extends BaseController
{
    public function index()
    {
        $model = new JobRequisitionModel();

        $data['requisitions'] = $model
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('Recruitment/job_requisition/index', $data);
    }

    public function create()
    {
        return view('Recruitment/job_requisition/create');
    }

    public function save()
    {
        helper(['form']);

        $rules = [
            'job_title' => 'required',
            'department' => 'required',
            'employment_type' => 'required',
            'vacancies' => 'required|integer'
        ];

        if (!$this->validate($rules)) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model = new JobRequisitionModel();

        $model->insert([

            'requisition_no' => 'REQ-' . date('Ymd') . '-' . rand(1000,9999),

            'job_title' => $this->request->getPost('job_title'),

            'department' => $this->request->getPost('department'),

            'employment_type' => $this->request->getPost('employment_type'),

            'vacancies' => $this->request->getPost('vacancies'),

            'experience' => $this->request->getPost('experience'),

            'salary_from' => $this->request->getPost('salary_from'),

            'salary_to' => $this->request->getPost('salary_to'),

            'location' => $this->request->getPost('location'),

            'description' => $this->request->getPost('description'),

            'skills' => $this->request->getPost('skills'),

            'status' => 'Draft',

            'requested_by' => session('user_id')
        ]);

        return redirect()->to('/Recruitment/requisitions')
            ->with('success', 'Job Requisition Created Successfully.');
    }
}