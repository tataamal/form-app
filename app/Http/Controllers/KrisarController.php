<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KrisarController extends Controller
{
    public function index()
    {
        return view('admin.krisar.index',[
            'title'=>'Kritik dan Saran'
        ]);
    }
}
