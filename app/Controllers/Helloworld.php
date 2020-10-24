<?php namespace App\Controllers;

class Helloworld extends BaseController {
    public function index($name, $npm)
    {
        echo $this->name;
        // echo $name ."<br>";
        // echo $npm ."<br>";
        // echo " Hello Dewi ";
    }

    public function show()
    {
        echo "Dewi Lestari";
        echo "1817051041";
    }
}