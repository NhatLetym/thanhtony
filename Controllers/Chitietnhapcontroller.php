<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chitietnhap;
use \DateTime;
use Illuminate\Support\Facades\DB;

class Chitietnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Chitietnhap::with('Hoadonnhap', 'Sanpham')->get();
        // return Chitietnhap::all();
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
        $db = DB::table('cthoadonnhap')->insert([
            'ma_hoadon' => $request->ma_hoadon,
            'ma_sanpham' => $request->ma_sanpham,
            'so_luong' => $request->so_luong,
            'don_gia' => $request->don_gia,
            'Hoat_dong' => "0"
        ]);
        return $db;
        // $db = new Chitietnhap();
        // $db->ma_hoadon = $request->ma_hoadon;
        // $db->ma_sanpham = $request->ma_sanpham;
        // $db->so_luong = $request->so_luong;
        // $db->don_gia = $request->don_gia;
        // $db->hoat_dong = $request->hoat_dong;
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
        return Chitietnhap::findOrFail($id);
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
        $db = DB::table('cthoadonnhap')
            ->where('id', $id)
            ->update([
                'ma_hoadon' => $request->ma_hoadon,
                'ma_sanpham' => $request->ma_sanpham,
                'so_luong' => $request->so_luong,
                'don_gia' => $request->don_gia,
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
        Chitietnhap::findOrFail($id)->delete();
        return "Deleted";
    }
}
