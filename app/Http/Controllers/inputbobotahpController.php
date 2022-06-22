<?php

namespace App\Http\Controllers;

use App\Models\inputbobotahp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inputbobotahpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT a.*, b.kode_kriteria AS kriteria_1, c.kode_kriteria AS kriteria_2 FROM bobotahp a left JOIN kriteria b ON  a.kriteria_id = b.idkriteria LEFT JOIN kriteria c on a.kriteria_id2 = c.idkriteria ORDER BY a.kriteria_id asc';
        $databobotinputahp = DB::select($sql);
        return view('bobot.inputahp', ['datainputbobotahp' => $databobotinputahp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputbobotahp = DB::table('bobotahp')->count() + 1;
        $kodeinputbobotahp = str_pad($inputbobotahp, "0", STR_PAD_LEFT);
        return view('bobot.inputahp', compact('bobotahp', 'kodebobotinputahp'));
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
        DB::table('bobotahp')->insert($in);
        return redirect('/bobotinputahp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inputbobotahp  $inputbobotahp
     * @return \Illuminate\Http\Response
     */
    public function show(inputbobotahp $inputbobotahp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inputbobotahp  $inputbobotahp
     * @return \Illuminate\Http\Response
     */
    public function edit(inputbobotahp $inputbobotahp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inputbobotahp  $inputbobotahp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inputbobotahp $inputbobotahp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inputbobotahp  $inputbobotahp
     * @return \Illuminate\Http\Response
     */
    public function destroy(inputbobotahp $inputbobotahp)
    {
        //
    }
}
