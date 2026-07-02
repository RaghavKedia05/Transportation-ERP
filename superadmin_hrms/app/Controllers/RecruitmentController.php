<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Recruitment\RequisitionModel;

class RecruitmentController extends BaseController
{
    protected $requisitionModel;

    public function __construct()
    {
        $this->requisitionModel = new RequisitionModel();
    }

    private function getPublishedJobFilters()
    {
        $role = $this->request->getGet('role');
        $status = $this->request->getGet('status');
        $sortBy = $this->request->getGet('sort_by');
        $search = trim($this->request->getGet('search'));

        $builder = $this->requisitionModel
            ->where('status', 'Published')
            ->where('hr_status', 'Approved');

        if (!empty($role)) {
            $builder->where('department', $role);
        }

        if (!empty($status)) {
            $builder->where('employment_type', $status);
        }

        if (!empty($search)) {
            $builder->groupStart()
                ->like('job_title', $search)
                ->orLike('department', $search)
                ->orLike('description', $search)
                ->groupEnd();
        }

        switch ($sortBy) {
            case 'oldest':
                $builder->orderBy('published_at', 'ASC');
                break;
            case 'title':
                $builder->orderBy('job_title', 'ASC');
                break;
            case 'department':
                $builder->orderBy('department', 'ASC');
                break;
            default:
                $builder->orderBy('published_at', 'DESC');
                break;
        }

        $roles = array_column($this->requisitionModel
            ->select('department')
            ->where('status', 'Published')
            ->where('hr_status', 'Approved')
            ->groupBy('department')
            ->orderBy('department')
            ->findAll(), 'department');

        $statuses = array_column($this->requisitionModel
            ->select('employment_type')
            ->where('status', 'Published')
            ->where('hr_status', 'Approved')
            ->groupBy('employment_type')
            ->orderBy('employment_type')
            ->findAll(), 'employment_type');

        return [
            'jobs' => $builder->findAll(),
            'roles' => $roles,
            'statuses' => $statuses,
            'filterRole' => $role,
            'filterStatus' => $status,
            'filterSort' => $sortBy,
            'searchQuery' => $search,
        ];
    }

    public function jobs()
    {
        return view('/Recruitment/jobs', $this->getPublishedJobFilters());
    }

    public function jobsGrid()
    {
        return view('/Recruitment/jobs-grid', $this->getPublishedJobFilters());
    }

    public function candidates()
    {
        return view('/Recruitment/candidates');
    }

    public function candidatesGrid()
    {
        return view('/Recruitment/candidates-grid');
    }

    public function candidatesKanban()
    {
        return view('/Recruitment/candidates-kanban');
    }
    

}