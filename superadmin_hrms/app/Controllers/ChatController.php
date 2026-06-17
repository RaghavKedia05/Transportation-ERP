<?php

namespace App\Controllers;

class ChatController extends BaseController
{
    public function index()
    {
        return view('chat');
    }

    public function conversation($id)
    {
        return view('chat');
    }

}