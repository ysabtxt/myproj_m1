<?php
 
namespace App\Controllers;
 
class User extends BaseController
{
     public function index()
    {
        $users = [
            [
                'full_name' => 'Hanabi Sanchez',
                'email' => 'hbSanch@fit.edu.ph',
                'username' => 'Boszx_hanabi'
            ],
            [
                'full_name' => 'Rene Butterbon',
                'email' => 'rbutterbon@gmail.com',
                'username' => 'Mamaaa'
            ],
            [
                'full_name' => 'Hev Baby',
                'email' => 'Kyusi.King@gmail.com',
                'username' => 'Kyusi_'
            ],
            [
                'full_name' => 'Layla De Lima',
                'email' => 'spotibai@gmail.com',
                'username' => 'Junel_05'
            ],
            [
                'full_name' => 'Dagusto Cruz',
                'email' => 'dcruz1990@gmail.com',
                'username' => 'UncleDags'
            ]
        ];
 
        return view('user_msg', [
            'users' => $users
        ]);
    
    }
}

