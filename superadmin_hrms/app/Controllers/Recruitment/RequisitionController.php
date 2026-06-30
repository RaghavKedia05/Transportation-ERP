<?php

namespace App\Controllers\Recruitment;

use App\Controllers\BaseController;
use App\Models\Recruitment\RequisitionModel;
use App\Models\DepartmentModel;

class RequisitionController extends BaseController
{
    protected $requisitionModel;

    public function __construct()
    {
        $this->requisitionModel = new RequisitionModel();
    }

    public function index()
    {
        $data['requisitions'] = $this->requisitionModel
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('Recruitment/requisitions', $data);
    }

    public function create()
    {
        $departmentModel = new DepartmentModel();

        $data['departments'] = $departmentModel
            ->where('status', 1)
            ->orderBy('department_name')
            ->findAll();

        return view('Recruitment/create_requisition', $data);
    }

    public function saveDraft()
    {
        $data = [

            'requisition_no' => 'REQ-' . date('YmdHis'),

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

            'requested_by' => session()->get('user_id'),

            'hod_status' => 'Pending',

            'hr_status' => 'Pending',

            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->requisitionModel->insert($data);

        return redirect()->to('/Recruitment/requisitions')
            ->with('success', 'Draft Saved Successfully');
    }

    public function submit()
    {
        $data = [

            'requisition_no' => 'REQ-' . date('YmdHis'),

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

            'status' => 'Pending Approval',

            'requested_by' => session()->get('user_id'),

            'submitted_at' => date('Y-m-d H:i:s'),

            'hod_status' => 'Pending',

            'hr_status' => 'Pending',

            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->requisitionModel->insert($data);

        return redirect()->to('/Recruitment/requisitions')
            ->with('success', 'Requisition Submitted Successfully');
    }

    public function getRequisition($id)
    {
        $requisition = $this->requisitionModel->find($id);

        if (!$requisition) {
            return $this->response->setStatusCode(404)
                ->setBody('<div class="text-center text-red-600 p-8">Requisition not found.</div>');
        }

        return view('Recruitment/view_requisition_modal', [
            'requisition' => $requisition
        ]);

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}