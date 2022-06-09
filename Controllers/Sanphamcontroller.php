<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sanpham;
use Illuminate\Support\Facades\DB;
use \DateTime;

class sanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return sanpham::with('loaisp')->get();
        return sanpham::all();
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
        $db = DB::table('sanpham')->insert([
            'ten' => $request->ten,
            'anh' => $request->anh,
            'so_luong' => $request->so_luong,
            'ngay_them' => new Datetime(),
            'Hoat_dong' => "0",
            'Maloai' => $request->Maloai
        ]);
        return $db;
        // $db = new sanpham();
        // $db->ten = $request->ten;
        // $db->anh = $request->anh;
        // $db->so_luong = $request->so_luong;
        // $db->ngay_them = new Datetime();
        // $db->hoat_dong = $request->hoat_dong;
        // $db->Maloai = $request->Maloai;
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
        return sanpham::findOrFail($id);
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
        $db = DB::table('sanpham')
            ->where('id', $id)
            ->update([
                'ten' => $request->ten,
                'anh' => $request->anh,
                'so_luong' => $request->so_luong,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0",
                'Maloai' => $request->Maloai
            ]);
        return $db;
        // $db = sanpham::find($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sanpham::findOrFail($id)->delete();
        return "Deleted";
    }
}
