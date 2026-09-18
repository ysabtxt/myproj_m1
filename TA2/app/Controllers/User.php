<?php
 
namespace App\Controllers;
 use App\Models\UserModel;
class User extends BaseController
{
      public function index()
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'User Accounts',
            'users' => $userModel->findAll()
        ];

        return view('user_msg', $data);
    }
}

