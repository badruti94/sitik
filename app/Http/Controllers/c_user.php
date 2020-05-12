<?php

namespace App\Http\Controllers;

use App\m_user;
use Illuminate\Http\Request;

class c_user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = m_user::all();

        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        m_user::create([
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
            'status' => $request->status,
            'unit_jurusan' => $request->unit_jurusan
        ]);

        return redirect()->back()->with('status', 'Pengguna berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function show($m_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function edit($m_user)
    {
        $data['user'] = m_user::find($m_user);
        return view('admin/user/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $m_user)
    {
        m_user::where('id_user', $m_user)
            ->update([
                'username' => $request->username,
                'password' => $request->password,
                'nama' => $request->nama,
                'status' => $request->status,
                'unit_jurusan' => $request->unit_jurusan
            ]);

        return redirect('admin/user')->with('status', 'Pengguna berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function destroy($m_user)
    {
        m_user::destroy('id_user', $m_user);

        return redirect()->back()->with('status', 'Pengguna berhasil dihapus');
    }

    public function formUbahPassword()
    {
        return view('user.ubah_password');
    }

    public function ubahPassword(Request $request){
        $id_user = session('id_user');
        m_user::where('id_user', $id_user)
            ->update([
                'password' => $request->password
            ]);
        
        return redirect('/')->with('status','Password berhasil Diubah');
    }
}
