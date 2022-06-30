<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return Inertia::render('Departments/index',[
            'departments' => $departments
        ]);
    }
    public function create()
    {
        $departments = Department::all();
        return Inertia::render('Departments/create');
    }
}
