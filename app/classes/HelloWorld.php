<?php

namespace App\classes;

class HelloWorld
{

    public $data = [];
    public $menuData = [];


    public function __construct()
    {
    }

    public function index()
    {
        header("Location: action.php?page=Home");
    }

    public function totalStudent()
    {
        $this->data = [
            0 => [
                "id" => "1",
                "name" => "Rokibol Hasan",
                "email" => "rokibol.hasancse@gmail.com",
                "phone" => "123548445"
            ],
            1 => [
                "id" => "2",
                "name" => "Shakil Ahmed",
                "email" => "shakil.hello@gmail.com",
                "phone" => "2655678"
            ],
            2 => [
                "id" => "3",
                "name" => "Nirob Ashmed",
                "email" => "nirob.hi@gmail.com",
                "phone" => "7584968652"
            ]
        ];
        return $this->data;
    }


    public function menu(){
        $this->menuData = [
            0 => ['Home'],
            1 => ['About'],
            2 => ['Contact'],
            3 => ['Services']
        ];
        return $this->menuData;
    }
}
