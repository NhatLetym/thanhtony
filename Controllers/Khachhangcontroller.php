<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khachhang;
use \DateTime;
use Illuminate\Support\Facades\DB;


class Khachhangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Khachhang::with('loaisp')->get();
        return Khachhang::all();
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
        $db = DB::table('khachhang')->insert([
            'ho_ten' => $request->ho_ten,
            'dia_chi' => $request->dia_chi,
            'dien_thoai' => $request->dien_thoai,
            'email' => $request->email,
            'ngay_them' => new Datetime(),
            'Hoat_dong' => "0"
        ]);
        return $db;
        // $db = new Khachhang();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Khachhang::findOrFail($id);
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
        $db = DB::table('khachhang')
            ->where('id', $id)
            ->update([
                'ho_ten' => $request->ho_ten,
                'dia_chi' => $request->dia_chi,
                'dien_thoai' => $request->dien_thoai,
                'email' => $request->email,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
            ]);
        return $db;
        // $db = Khachhang::find($id);
        // $db->ho_ten = $request->ho_ten;
        // $db->dia_chi = $request->dia_chi;
        // $db->dien_thoai = $request->dien_thoai;
        // $db->email = $request->email;
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
        Khachhang::findOrFail($id)->delete();
        return "Deleted";
    }
}
