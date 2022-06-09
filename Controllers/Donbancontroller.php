<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donban;
use \DateTime;
use Illuminate\Support\Facades\DB;

class Donbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Donban::with('Nhanvien')->get();
        // return Donban::all();
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
        $db = DB::table('hoadonxuat')->insert([
            'ngay_xuat' => $request->ngay_xuat,
            'thanh_tien' => $request->thanh_tien,
            'ma_nv' => $request->ma_nv,
            'ngay_them' => new Datetime(),
            'Hoat_dong' => "0"
        ]);
        return $db;
        // $db = new Donban();
        // $db->ngay_xuat =>$request->ngay_xuat;
        // $db->thanh_tien =>$request->thanh_tien;
        // $db->ma_nv =>$request->ma_nv;
        // $db->ngay_them = new Datetime();
        // $db->hoat_dong =>$request->hoat_dong;
        // $db->save();
        // return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Donban::findOrFail($id);
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
        $db = DB::table('hoadonxuat')
            ->where('id', $id)
            ->update([
                'ngay_xuat' => $request->ngay_xuat,
                'thanh_tien' => $request->thanh_tien,
                'ma_nv' => $request->ma_nv,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
            ]);
        return $db;
        // $db = Donban::find($id);
        // $db->ngay_xuat = $request->ngay_xuat;
        // $db->thanh_tien = $request->thanh_tien;
        // $db->ma_nv = $request->ma_nv;
        // $db->ngay_them = new Datetime();
        // $db->hoat_dong = $request->hoat_dong;
        // $db->save();
        // return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donban::findOrFail($id)->delete();
        return "Deleted";
    }
}
