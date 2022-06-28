<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class alternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataalternatif = DB::table('alternatif')->get();
        return view('alternatif.index', compact('dataalternatif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alternatif = DB::table('alternatif')->count() + 1;
        $kodealternatif =str_pad($alternatif,"0", STR_PAD_LEFT);
        return view('alternatif.tambah', compact('alternatif','kodealternatif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $in = $request->all();
        unset($in['_token']);
        DB::table('alternatif')->insert($in);
        return redirect('/alternatif');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('alternatif as a')
        ->select('a.*')
        ->where('a.idalternatif', $id)
        ->first();
        return view('alternatif.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->validate([
            'nama_alternatif' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'nik' => 'required',
            'no_kk' => 'required',
            'no_hp' => 'required',
        ]);
        $company = alternatif::find($id);
        $company->nama_alternatif = $request->nama_alternatif;
        $company->alamat = $request->alamat;
        $company->rt = $request->rt;
        $company->nik = $request->nik;
        $company->no_kk = $request->no_kk;
        $company->no_hp = $request->no_hp;
        $company->save();
        return redirect()->route('alternatif',compact('company'))
        ->with('sukses','Company Has Been updated successfully');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = alternatif::find($id)->update($request->all());

         return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alternatif::where('idalternatif',$id)->delete();
        return redirect()->back()->with('alert', 'Alternatif Berhasil Dihapus!');
    }
}
