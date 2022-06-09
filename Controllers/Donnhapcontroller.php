<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donnhap;
use \DateTime;
use Illuminate\Support\Facades\DB;

class Donnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Donnhap::with('Nhacungcap')->get();
        // return Donnhap::all();
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
        $db = DB::table('hoadonnhap')->insert([
            'ngay_nhap' => $request->ngay_nhap,
            'thanh_tien' => $request->thanh_tien,
            'ma_ncc' => $request->ma_ncc,
            'ngay_them' => new Datetime(),
            'Hoat_dong' => "0"
        ]);
        return $db;
        // $db = new Donnhap();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Donnhap::findOrFail($id);
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
        $db = DB::table('hoadonnhap')
            ->where('id', $id)
            ->update([
                'ngay_nhap' => $request->ngay_nhap,
                'thanh_tien' => $request->thanh_tien,
                'ma_ncc' => $request->ma_ncc,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
            ]);
        return $db;
        // $db = Donnhap::find($id);
        // $db->ngay_nhap = $request->ngay_nhap;
        // $db->thanh_tien = $request->thanh_tien;
        // $db->ma_ncc = $request->ma_ncc;
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
        Donnhap::findOrFail($id)->delete();
        return "Deleted";
    }
}
