<?php

namespace App\Models\Recruitment;

use CodeIgniter\Model;

class RequisitionModel extends Model
{
    protected $table = 'job_requisitions';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [

    'requisition_no',
    'job_title',
    'department',
    'employment_type',
    'vacancies',
    'experience',
    'salary_from',
    'salary_to',
    'location',
    'description',
    'skills',
    'status',
    'requested_by',
    'approved_by',
    'submitted_at',
    'hod_status',
    'hr_status',
    'rejection_reason',
    'published_at',
    'updated_at'
];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';

    protected $updatedField = 'updated_at';
}