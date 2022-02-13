<?php


namespace App\classes;


class User
{
    public function getALlUser()
    {
        return[
            0=>[
                'id'=>'1',
                'name' =>'Sumon Khan',
                'email'=>'sumon@gmail.com',
                'password'=>'123456'
            ],
            1=>[
                'id'=>'2',
                'name' =>'Rumon Khan',
                'email'=>'rumon@gmail.com',
                'password'=>'111222'
            ],
        ];
    }
}