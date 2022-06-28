<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT*FROM kriteria ORDER BY idkriteria asc';
        $datakriteria = DB::select($sql);
        return view('kriteria.index', ['datakriteria' => $datakriteria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = DB::table('kriteria')->count() + 1;
        $kodekriteria = "C". str_pad($kriteria, STR_PAD_LEFT);
        return view('kriteria.tambah', compact('kriteria','kodekriteria'));
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
        DB::table('kriteria')->insert($in);
        return redirect('/kriteria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('kriteria')->where('idkriteria',$id)->delete();
       return redirect()->back()->with('alert', 'Kriteria Berhasil Dihapus!');
    }
}
