<?php

namespace App\Http\Controllers\RolesPermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesPermissionController extends Controller
{
    public function index(){
        return view('roles_permission.index');
    }
}
