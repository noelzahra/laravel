<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $description = <<<DOC
        The Laravel framework has a few system requirements. 
        Of course, all of these requirements are satisfied 
        by the Laravel Homestead virtual machine, so it's 
        highly recommended that you use Homestead as your 
        local Laravel development environment.
DOC;

        return view('/about', ['description' => $description]);
    }
}
