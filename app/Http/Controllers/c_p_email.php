<?php

namespace App\Http\Controllers;

use App\m_c_email;
use Illuminate\Http\Request;

class c_p_email extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['p_email'] = m_c_email::where('status','Diproses')->get();

        return view('admin.p_email.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.p_email');
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        m_c_email::create([
            'id_user' => session('id_user'),
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'keperluan' => $request->keperluan,
            'penanggung_jawab' => $request->penanggung_jawab,
            'no_hp' => $request->no_hp,
            'status' => 'Diproses',
            'tgl' => date("Y-m-d")
        ]);

        return redirect('user/pengajuan_email')->with('status', 'Email berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_c_email  $m_c_email
     * @return \Illuminate\Http\Response
     */
    public function show(m_c_email $m_c_email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_c_email  $m_c_email
     * @return \Illuminate\Http\Response
     */
    public function edit($m_c_email)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_c_email  $m_c_email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $m_c_email)
    {
        m_c_email::where('id_p_email', $m_c_email)
            ->update([
                'status' => 'Selesai'
            ]);

        return redirect('admin/p_email')->with('status', 'Email Selesai Diproses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_c_email  $m_c_email
     * @return \Illuminate\Http\Response
     */
    public function destroy(m_c_email $m_c_email)
    {
        //
    }

    public function selesai()
    {
        $data['p_email'] = m_c_email::where('status', 'Selesai')->get();
        return view('admin.p_email.selesai', $data);
    }

    public function lihat()
    {
        $data['p_email'] = m_c_email::where('id_user', session('id_user'))->get();

        return view('user.p_email_lihat', $data);
    }
}
