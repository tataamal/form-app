<?php

namespace App\Http\Controllers;
use App\Models\Rfc;
use Illuminate\Http\Request;

class RfcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.rfc.index',[
            'title'=>'Request For Change'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_rfc = Rfc::all();
        return view('admin.rfc.riwayat',[
            'title'=>'Riwayat RFC'  
        ], compact('data_rfc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rfc::create([
            'tgl_req' => $request->tgl_req,
            'pengaju' => $request->pengaju,
            'detail' => $request->detail,
        ]);

        return redirect('user/rfc-index');
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

    public function user_rfc_create()
    {
        return view('user.rfc.create',[
            'title'=>'Formulir RFC'  
        ]);
    }

    public function user_rfc_index()
    {
        $data_rfc = Rfc::all();
        return view('user.rfc.index',[
            'title'=>'Riwayat RFC'  
        ],compact('data_rfc'));
    }
}