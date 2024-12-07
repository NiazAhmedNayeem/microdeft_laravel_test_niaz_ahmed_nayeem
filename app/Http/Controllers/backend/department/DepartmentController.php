<?php

namespace App\Http\Controllers\backend\department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('backend.department.index');    
    }
}
