<?php

namespace App\Http\Controllers;

use App\Models\User;

class ReportController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.reports.index', compact('users'));
    }
}


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
}
