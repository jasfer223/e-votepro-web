<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAdminsController extends Controller
{
    public function index()
    {
        return view('admin.admin-admins');
    }
}
