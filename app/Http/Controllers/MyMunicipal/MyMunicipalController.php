<?php

namespace App\Http\Controllers\MyMunicipal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyMunicipalController extends Controller
{
    public function index(){
        return view('myMunicipal.approval');
    }
    public function objection(){
        return view('myMunicipal.objection');
    }
 }
