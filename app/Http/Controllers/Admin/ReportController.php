<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExamStoreRequest;
use App\Http\Requests\Admin\ExamUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Role;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
class ReportController extends Controller
{
    
    public function term1(){
      
       
        return view('admin.report.term1');
     }

     public function term2(){
      
       
        return view('admin.report.term2');
     }

     public function term3(){
      
       
        return view('admin.report.term3');
     }

}
