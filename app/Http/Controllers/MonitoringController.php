<?php

namespace App\Http\Controllers;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.monitoring.index',[
            'title'=>'Monitoring Server'
        ]);
    }

    public function riwayat()
    {
        return view('admin.monitoring.riwayat',[
            'title'=>'Riwayat Monitoring'  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_monitoring = Monitoring::all();
        return view('user.monitoring.index',[
            'title'=>'Riwayat Monitoring'  
        ],compact('data_monitoring'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Monitoring::create([
            'nama_perangkat' => $request->nama_perangkat,
            'lokasi' => $request->lokasi,
            'max'=> $request->max,
            'tgl_monitoring' => $request->tgl_monitoring,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'disk' => $request->disk,
            'tindak_lanjut' => $request->tindak_lanjut,
            'pj' => $request->pj
        ]);

        return redirect('user/monitoring-index');
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

    public function user_monitoring_create()
    {
        return view('user.monitoring.create',[
            'title'=>'Formulir Monitoring'  
        ]);
    }

    public function user_monitoring_index()
    {
        return view('user.monitoring.index',[
            'title'=>'Riwayat Monitoring'  
        ]);
    }
}
