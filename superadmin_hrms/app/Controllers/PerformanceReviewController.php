<?php

namespace App\Controllers;

class PerformanceReviewController extends BaseController
{
    public function performance_review()
    {
        return view('performance_review');
    }

    public function save()
    {
        try {

            $db = \Config\Database::connect();

            /*
            |--------------------------------------------------------------------------
            | Save Employee Basic Information
            |--------------------------------------------------------------------------
            */

            $reviewData = [
                'emp_id' => $this->request->getPost('emp_id'),
                'name' => $this->request->getPost('name'),
                'department' => $this->request->getPost('department'),
                'designation' => $this->request->getPost('designation'),
                'qualification' => $this->request->getPost('qualification'),
                'date_of_join' => $this->request->getPost('date_of_join'),
                'date_of_confirmation' => $this->request->getPost('date_of_confirmation'),
                'previous_experience' => $this->request->getPost('previous_experience'),
                'ro_name' => $this->request->getPost('ro_name'),
                'ro_designation' => $this->request->getPost('ro_designation'),
            ];

            $db->table('performance_reviews')->insert($reviewData);

            $reviewId = $db->insertID();

            /*
            |--------------------------------------------------------------------------
            | Get Professional Excellence Arrays
            |--------------------------------------------------------------------------
            */

            $weightages = $this->request->getPost('weightage') ?? [];
            $selfPercentages = $this->request->getPost('self_percentage') ?? [];
            $selfPoints = $this->request->getPost('self_points') ?? [];
            $roPercentages = $this->request->getPost('ro_percentage') ?? [];
            $roPoints = $this->request->getPost('ro_points') ?? [];

            /*
            |--------------------------------------------------------------------------
            | Fixed KRA and KPI Values
            |--------------------------------------------------------------------------
            */

            $kras = [
                'Production',
                'Production',
                'Process Improvement',
                'Team Management',
                'Knowledge Sharing',
                'Reporting and Communication'
            ];

            $kpis = [
                'Quality',
                'TAT (turn around time)',
                'PMS, New Ideas',
                'Team Productivity,dynamics,attendance,attrition',
                'Sharing the knowledge for team productivity',
                'Emails/Calls/Reports and Other Communication'
            ];

            /*
            |--------------------------------------------------------------------------
            | Save Professional Excellence
            |--------------------------------------------------------------------------
            */

            for ($i = 0; $i < count($kras); $i++) {

                $professionalData = [
                    'review_id' => $reviewId,
                    'kra' => $kras[$i],
                    'kpi' => $kpis[$i],
                    'weightage' => $weightages[$i] ?? 0,
                    'self_percentage' => $selfPercentages[$i] ?? 0,
                    'self_points' => $selfPoints[$i] ?? 0,
                    'ro_percentage' => $roPercentages[$i] ?? 0,
                    'ro_points' => $roPoints[$i] ?? 0,
                ];

                $db->table('professional_excellence')
                    ->insert($professionalData);
            }

            /*
            |--------------------------------------------------------------------------
            | Personal Excellence
            |--------------------------------------------------------------------------
            */

            $peWeightages = $this->request->getPost('pe_weightage') ?? [];
            $peSelfPercentages = $this->request->getPost('pe_self_percentage') ?? [];
            $peSelfPoints = $this->request->getPost('pe_self_points') ?? [];
            $peRoPercentages = $this->request->getPost('pe_ro_percentage') ?? [];
            $peRoPoints = $this->request->getPost('pe_ro_points') ?? [];

            $attributes = [
                'Attendance',
                'Attendance',
                'Attitude & Behavior',
                'Attitude & Behavior',
                'Policy & Procedures',
                'Initiatives',
                'Continuous Skill Improvement'
            ];

            $indicators = [
                'Planned or Unplanned Leaves',
                'Time Consciousness',
                'Team Collaboration',
                'Professionalism & Responsiveness',
                'Adherence to policies and procedures',
                'Special Efforts, Suggestions,Ideas,etc.',
                'Preparedness to move to next level & Training utilization'
            ];

            for ($i = 0; $i < count($attributes); $i++) {

                $db->table('personal_excellence')->insert([

                    'review_id' => $reviewId,

                    'attribute_name' => $attributes[$i],
                    'indicator' => $indicators[$i],

                    'weightage' => $peWeightages[$i] ?? 0,

                    'self_percentage' => $peSelfPercentages[$i] ?? 0,
                    'self_points' => $peSelfPoints[$i] ?? 0,

                    'ro_percentage' => $peRoPercentages[$i] ?? 0,
                    'ro_points' => $peRoPoints[$i] ?? 0,
                ]);
            }

            return redirect()
                ->to('/performance_review')
                ->with('success', 'Performance Review Saved Successfully');
        } catch (\Exception $e) {

            return redirect()
                ->to('/performance_review')
                ->with('error', $e->getMessage());
        }
    }
}