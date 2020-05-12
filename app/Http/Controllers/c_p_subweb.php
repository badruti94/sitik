<?php

namespace App\Http\Controllers;

use App\m_c_subweb;
use Illuminate\Http\Request;

class c_p_subweb extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['p_subweb'] = m_c_subweb::where('status','Diproses')->get();

        return view('admin.p_subweb.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.p_subweb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_file = '';
        if ($request->hasFile('surat_pengantar')) {
            $nama_file = $request->surat_pengantar->getClientOriginalName();
            $request->file('surat_pengantar')->storeAs('surat pengantar', $nama_file);
        }

        m_c_subweb::create([
            'id_user' => session('id_user'),
            'nama_pengaju' => $request->nama_pengaju,
            'admin' => $request->admin,
            'jabatan' => $request->jabatan,
            'unit_jurusan' => $request->unit_jurusan,
            'nama_domain' => $request->nama_domain,
            'surat_pengantar' => $nama_file,
            'status' => 'Diproses',
            'tgl' => date("Y-m-d")
        ]);

        return redirect('user/pengajuan_subweb')->with('status', 'Sub Domain dan Website berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_c_subweb  $m_c_subweb
     * @return \Illuminate\Http\Response
     */
    public function show($m_c_subweb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_c_subweb  $m_c_subweb
     * @return \Illuminate\Http\Response
     */
    public function edit($m_c_subweb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_c_subweb  $m_c_subweb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $m_c_subweb)
    {
        m_c_subweb::where('id_p_subweb', $m_c_subweb)
            ->update([
                'status' => 'Selesai'
            ]);

        return redirect('admin/p_subweb')->with('status', 'Sub Domain dan Website Selesai Diproses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_c_subweb  $m_c_subweb
     * @return \Illuminate\Http\Response
     */
    public function destroy(m_c_subweb $m_c_subweb)
    {
        //
    }

    public function selesai()
    {
        $data['p_subweb'] = m_c_subweb::where('status', 'Selesai')->get();
        return view('admin.p_subweb.selesai', $data);
    }

    public function lihat()
    {
        $data['p_subweb'] = m_c_subweb::where('id_user', session('id_user'))->get();

        return view('user.p_subweb_lihat', $data);
    }
}
