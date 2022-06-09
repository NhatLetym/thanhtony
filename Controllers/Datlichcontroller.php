<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datlich;
use \DateTime;
use Illuminate\Support\Facades\DB;

class Datlichcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Datlich::with('Dichvu')->get();
        // return Datlich::all();
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
        $db = DB::table('datlich')->insert([
            'ma_dichvu' => $request->ma_dichvu,
            'ho_ten' => $request->ho_ten,
            'dien_thoai' => $request->dien_thoai,
            'thoi_gian_dat' => $request->thoi_gian_dat,
            'trang_thai' => $request->trang_thai,
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
        return Datlich::findOrFail($id);
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
        $db = DB::table('datich')
            ->where('id', $id)
            ->update([
                'ma_dichvu' => $request->ma_dichvu,
                'ho_ten' => $request->ho_ten,
                'dien_thoai' => $request->dien_thoai,
                'thoi_gian_dat' => $request->thoi_gian_dat,
                'trang_thai' => $request->trang_thai,
                'ngay_them' => new Datetime(),
                'Hoat_dong' => "0"
            ]);
        return $db;
        // $db = Datlich::find($id);
        // $db->ma_dichvu = $request->ma_dichvu;
        // $db->ho_ten = $request->ho_ten;
        // $db->dien_thoai = $request->dien_thoai;
        // $db->thoi_gian_dat = new Datetime();
        // $db->trang_thai = $request->trang_thai;
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
        Datlich::findOrFail($id)->delete();
        return "Deleted";
    }
}
