<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhacungcap;
use Illuminate\Support\Facades\DB;
use \DateTime;

class Nhacungcapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Nhacungcap::with('loaisp')->get();
        return Nhacungcap::all();
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
        $db = DB::table('nhacungcap')->insert([
            'ten_ncc' => $request->ten_ncc,
            'dia_chi' => $request->dia_chi,
            'dien_thoai' => $request->dien_thoai,
            'email' => $request->email,
            'ngay_them' => new Datetime(),
            'Hoat_dong' => "0"
        ]);
        return $db;
        // $db = new Nhacungcap();
        // $db->ten_ncc = $request->ten_ncc;
        // $db->dia_chi = $request->dia_chi;
        // $db->dien_thoai = $request->dien_thoai;
        // $db->email = $request->email;
        // $db->ngay_them = new Datetime();
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
        return Nhacungcap::findOrFail($id);
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
        $db = DB::table('nhacungcap')
            ->where('id', $id)
            ->update([
                'ten_ncc' => $request->ten_ncc,
                'dia_chi' => $request->dia_chi,
                'dien_thoai' => $request->dien_thoai,
                'email' => $request->email,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
            ]);
        return $db;
        // $db = Nhacungcap::find($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nhacungcap::findOrFail($id)->delete();
        return "Deleted";
    }
}
