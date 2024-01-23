<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Backup;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.backup.index',[
            'title'=>'Backup'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_backup = Backup::all();
        return view('admin.backup.riwayat',[
            'title'=>'Riwayat Backup'  
        ],compact('data_backup'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Backup::create([
           'periode' => $request->periode,
           'tanggal' => $request->tanggal,
           'objek' => $request->objek,
           'pj' => $request->pj,
           'keterangan' => $request->keterangan
        ]);
 
        if (Auth::user()->role == 'admin') {
            return redirect('admin/riwayat_backup');
        } 
        elseif(Auth::user()->role == 'user'){
            return redirect('user/backup-index');
        }
        
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

    public function user_backup_index()
    {
        
        $data_backup = Backup::all();
        return view('user.backup.index',[
            'title'=>'Riwayat Backup'  
        ],compact('data_backup'));
    }

    public function user_backup_create()
    {
        return view('user.backup.create',[
            'title'=>'Formulir Backup'
        ]);

    }


}
