<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace App\Controllers;

class Welcome extends BaseController
{
    public function hello()
    {
        echo 'Hello World!';
    }

    public function user($name)
    {
        echo "Hello " . $name;
    }
}