<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Allcontroller extends Controller
{
    // Define the welcome method
    public function welcome()
    {
        // Add your logic here, for example:
        return view('welcome');
    }
}
