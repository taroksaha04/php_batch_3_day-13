<?php


namespace App\classes;


class User
{
    protected $User = [];
    public function getAllUser(){
        $this->user = [
            0 => [
                'name' =>'Tarok saha',
                'mobile' =>'123456',
                'location'=>'Dhaka',

            ],
            1 => [
                'name' =>'Tarok saha',
                'mobile' =>'123456',
                 'location'=>'Dhaka',

                ],
        ];
        return $this->user;
    }
}