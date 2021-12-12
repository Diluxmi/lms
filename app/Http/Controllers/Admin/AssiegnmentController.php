<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assiegnment;
class AssiegnmentController extends Controller
{
public function index(){
    return view('assiegnment.index');
}
}
