<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
            $role = Auth::user()->role->name; 
            switch ($role) {
              case 'Admin':
                return view('admin_dashboard');
                break;
             
                case 'Teacher':
                return view('teacher_dashboard');
                break; 
               
                case 'Student':
                    return view('student_dashboard');
                    break; 
              
          }
       
    }
}
