<?php
class Calculator extends CI_Controller
{
    public function plus ($a,$b)
    {
        echo "ค่า 1 :".$a."<br>";
        echo "ค่า 2 :".$b."<br>";
        echo "total :".($a+$b);
    }
}