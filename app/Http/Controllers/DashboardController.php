<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard', [
            'title'=>'Dashboard'
        ]);
    }

    public function user(){
        return view('user.dashboard', [
            'title'=>'Dashboard'
        ]);
    }
}
