<?php

namespace App\Http\Controllers\Compliance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function index(){
        return view('compliance.complianceList');
    }
    public function create(){
        return view('compliance.create');
    }
}
