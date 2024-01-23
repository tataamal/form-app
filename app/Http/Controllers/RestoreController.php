<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.restore.index',[
            'title'=>'Restore'
        ]);
    }

    public function riwayat()
    {
        return view('admin.restore.riwayat',[
            'title'=>'Riwayat Restore'  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function user_restore_create()
    {
        return view('user.restore.create',[
            'title'=>'Formulir Restore'
        ]);
    }

    public function user_restore_index()
    {
        return view('user.restore.index',[
            'title'=>'Riwayat Restore'
        ]);
    }
}
