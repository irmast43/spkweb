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
        $alternatif = DB::table('alternatif')->count() + 1;
        $kodealternatif =str_pad($alternatif,"0", STR_PAD_LEFT);
        $sql = 'SELECT*FROM alternatif ORDER BY idalternatif asc';
        $dataalternatif = DB::select($sql);
        return view('alternatif.index', ['dataalternatif' => $dataalternatif], compact('alternatif','kodealternatif'));
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

        $alternatif = alternatif::find($id);
        $alternatif->nama_alternatif = $request->input('nama_alternatif');
        $alternatif->alamat = $request->input('alamat');
        $alternatif->rt = $request->input('rt');
        $alternatif->nik = $request->input('nik');
        $alternatif->no_kk = $request->input('no_kk');
        $alternatif->no_hp = $request->input('no_hp');
        $alternatif->updated_at = $request->input(date('Y-m-d'));
        $alternatif->created_at = $request->input(date('Y-m-d'));
        $alternatif->update();

        return view('alternatif.index',compact('alternatif'));
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
