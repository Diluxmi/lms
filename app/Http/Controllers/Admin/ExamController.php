<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
class ExamController extends Controller
{
    public function index(){
        return view('exam.index');
    }
}
