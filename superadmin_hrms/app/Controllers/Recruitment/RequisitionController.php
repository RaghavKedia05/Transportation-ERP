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
        $role = session('role');
        $userId = session('user_id');

        switch ($role) {

            // Admin sees everything
            case 'admin':

                $data['requisitions'] = $this->requisitionModel
                    ->orderBy('id', 'DESC')
                    ->findAll();

                break;

            // Hiring Manager sees only his requisitions
            case 'hiring_manager':

                $data['requisitions'] = $this->requisitionModel
                    ->where('requested_by', $userId)
                    ->orderBy('id', 'DESC')
                    ->findAll();

                break;

            // Department Head sees only requests waiting for HOD approval
            case 'department_head':

                $data['requisitions'] = $this->requisitionModel
                    ->where('status', 'Pending Approval')
                    ->where('hod_status', 'Pending')
                    ->orderBy('id', 'DESC')
                    ->findAll();

                break;

            // HR sees only requests approved by HOD and waiting for HR
            case 'hr':

                $data['requisitions'] = $this->requisitionModel
                    ->where('hod_status', 'Approved')
                    ->where('hr_status', 'Pending')
                    ->orderBy('id', 'DESC')
                    ->findAll();

                break;

            default:

                $data['requisitions'] = [];

                break;
        }

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

            'hod_status' => 'Pending HOD Approval',

            'hr_status' => 'Pending HR Approval',

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

            'hod_status' => 'Pending HOD Approval',

            'hr_status' => 'Pending HR Approval',

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

    public function edit($id)
    {
        $departmentModel = new DepartmentModel();

        $data['departments'] = $departmentModel
            ->where('status', 1)
            ->findAll();

        $data['requisition'] =
            $this->requisitionModel->find($id);

        return view('Recruitment/edit_requisition', $data);
    }

    public function delete($id)
    {
        $this->requisitionModel->delete($id);

        return redirect()
            ->to('/Recruitment/requisitions')
            ->with('success', 'Requisition deleted successfully.');

    }

    public function hodApprove($id)
    {
        $this->requisitionModel->update($id, [

            'hod_status' => 'Approved',

            'status' => 'Pending HR Approval',

            'approved_by' => session('user_id')

        ]);

        return redirect()->back()->with(
            'success',
            'Approved successfully.'
        );
    }
    public function hodReject($id)
    {
        $this->requisitionModel->update($id, [

            'hod_status' => 'Rejected',

            'status' => 'Rejected',

            'updated_at' => date('Y-m-d H:i:s')

        ]);

        return redirect()->back()
            ->with('success', 'Requisition rejected.');
    }

    public function hrApprove($id)
    {
        $this->requisitionModel->update($id, [

            'hr_status' => 'Approved',

            'status' => 'Published',

            'published_at' => date('Y-m-d H:i:s')

        ]);

        return redirect()
            ->back()
            ->with('success', 'Job published successfully.');
    }

    public function hrReject($id)
    {
        $this->requisitionModel->update($id, [

            'hr_status' => 'Rejected',

            'status' => 'Rejected'

        ]);

        return redirect()
            ->back()
            ->with('success', 'Requisition rejected by HR.');
    }
}