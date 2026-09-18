<?php
 
namespace App\Controllers;
 
class Customers extends BaseController
{
   
       public function index()
    {
        $customers = [
            [
                'full_name' => 'Athena Palomo',
                'email' => 'abpalomo@fit.edu.ph',
                'phone' => '09568704843'
            ],
            [
                'full_name' => 'Mary Grace Piattos',
                'email' => 'mgpiattos@gmail.com',
                'phone' => '09561394841'
            ],
            [
                'full_name' => 'Andy Lim',
                'email' => 'alim@gmail.com',
                'phone' => '09466703934'
            ],
            [
                'full_name' => 'Kuromi Tiu',
                'email' => 'ktiu@gmail.com',
                'phone' => '09118784812'
            ],
            [
                'full_name' => 'Barbie Roberts',
                'email' => 'broberts@gmail.com',
                'phone' => '09206704899'
            ]
        ];
 
        return view('customer_msg', [
            'customers' => $customers
        ]);
    
    }
}

