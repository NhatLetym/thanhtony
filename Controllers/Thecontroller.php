<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\The;
use Illuminate\Support\Facades\DB;
use \DateTime;

class Thecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return The::with('Khachhang')->get();
        // return The::all();
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
        $db = DB::table('the')->insert([
            'ho_ten' => $request->ho_ten,
            // 'anh' => $request->anh,
            'so_du' => $request->so_du,
            'dien_thoai' => $request->dien_thoai,
            'ngay_them' => new Datetime(),
            'hoat_dong' => "0",
            'ma_khachhang' => $request->ma_khachhang
        ]);
        return $db;
        // $db = new The();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return The::findOrFail($id);
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
        $db = DB::table('the')
            ->where('id', $id)
            ->update([
                'ho_ten' => $request->ho_ten,
                // 'anh' => $request->anh,
                'so_du' => $request->so_du,
                'dien_thoai' => $request->dien_thoai,
                'ngay_them' => new Datetime(),
                'hoat_dong' => "0",
                'ma_khachhang' => $request->ma_khachhang
            ]);
        return $db;
        // $db = The::find($id);
        // $db->ten = $request->ten;
        // $db->anh = $request->anh;
        // $db->so_luong = $request->so_luong;
        // $db->ngay_them = new Datetime();
        // $db->hoat_dong = "0";
        // $db->Maloai = $request->Maloai;
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
        The::findOrFail($id)->delete();
        return "Deleted";
    }
}
