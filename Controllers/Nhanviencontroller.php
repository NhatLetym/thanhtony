<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhanvien;
use Illuminate\Support\Facades\DB;
use \DateTime;

class Nhanviencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Nhanvien::with('loaisp')->get();
        return Nhanvien::all();
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
        $db = DB::table('nhanvien')->insert([
            'Ten_Nhanvien' => $request->Ten_Nhanvien,
            'Gioitinh' => $request->Gioitinh,
            'Ngaysinh' => $request->Ngaysinh,
            'Quequan' => $request->Quequan,
            'Sdt' => $request->Sdt,
            'Email' => $request->Email,
            'Capbac' => $request->Capbac,
            'Ngay_them' => new Datetime(),
            'Hoat_dong' => "0"
            // 'image' => $request->image
        ]);
        return $db;
        // $db = new Nhanvien();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Nhanvien::findOrFail($id);
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
        $db = DB::table('nhanvien')
            ->where('id', $id)
            ->update([
                'Ten_Nhanvien' => $request->Ten_Nhanvien,
                'Gioitinh' => $request->Gioitinh,
                'Ngaysinh' => $request->Ngaysinh,
                'Quequan' => $request->Quequan,
                'Sdt' => $request->Sdt,
                'Email' => $request->Email,
                'Capbac' => $request->Capbac,
                'Ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
                // 'image' => $request->image
            ]);
        return $db;
        // $db = Nhanvien::find($id);
        // $db->Ten_Nhanvien = $request->Ten_Nhanvien;
        // $db->Gioitinh = $request->Gioitinh;
        // $db->Ngaysinh = $request->Ngaysinh;
        // $db->Quequan = $request->Quequan;
        // $db->Sdt = $request->Sdt;
        // $db->Email = $request->Email;
        // $db->Capbac = $request->Capbac;
        // $db->Ngay_them = new Datetime();
        // $db->Hoat_dong = "0";
        // $db->image = $request->image;
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
        Nhanvien::findOrFail($id)->delete();
        return "Deleted";
    }
}
