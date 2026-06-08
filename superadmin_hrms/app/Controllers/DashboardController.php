<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    
    public function companies()
    {
        return view('companies');
    }

    public function subscriptions()
    {
        return view('subscriptions');
    }

    public function purchased()
    {
        return view('purchased');
    }
}
