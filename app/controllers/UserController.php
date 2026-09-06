<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller
{
    public function index()
    {
        $this->call->database();

        $this->call->model('UserModel');

        $data['users'] = $this->UserModel->all();

        $this->call->view('users/index', $data);
    }
}

