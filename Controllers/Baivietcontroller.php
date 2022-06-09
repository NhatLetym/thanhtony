<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;
use \DateTime;
use Illuminate\Support\Facades\DB;

class Baivietcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Baiviet::with('Nhanvien')->get();
        // return Baiviet::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = DB::table('baiviet')->insert([
            'ma_nv' => $request->ma_nv,
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'hinh_anh' => $request->hinh_anh,
            'ngay_them' => new Datetime(),
            'Hoat_dong' => "0"
        ]);
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Baiviet::findOrFail($id);
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
        $db = DB::table('baiviet')
            ->where('id', $id)
            ->update([
                'ma_nv' => $request->ma_nv,
                'tieu_de' => $request->tieu_de,
                'noi_dung' => $request->noi_dung,
                'hinh_anh' => $request->hinh_anh,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
            ]);
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Baiviet::findOrFail($id)->delete();
        return "Deleted";
    }
}
