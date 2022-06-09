<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dichvu;
use \DateTime;
use Illuminate\Support\Facades\DB;

class Dichvucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Dichvu::with('Loaidv')->get();
        return Dichvu::all();
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
        $db = DB::table('dichvu')->insert([
            'ten_dichvu' => $request->ten_dichvu,
            'mieu_ta' => $request->mieu_ta,
            'gia' => $request->gia,
            'ngay_them' => new DateTime(),
            'Hoat_dong' => "0",
            // 'image' => $request->image,
            // 'Maloaidichvu' => $request->Maloaidichvu
        ]);
        return $db;
        // $db = new Dichvu();
        // $db->ten_dichvu = $request->ten_dichvu;
        // $db->mieu_ta = $request->mieu_ta;
        // $db->gia = $request->gia;
        // $db->ngay_them = new DateTime();
        // $db->hoat_dong = $request->hoat_dong;
        // $db->image = $request->image;
        // $db->Maloaidichvu = $request->Maloaidichvu;
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
        return Dichvu::findOrFail($id);
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
        $db = DB::table('dichvu')
            ->where('id', $id)
            ->update([
                'ten_dichvu' => $request->ten_dichvu,
                'mieu_ta' => $request->mieu_ta,
                'gia' => $request->gia,
                'ngay_them' => new DateTime(),
                'Hoat_dong' => "0",
                // 'image' => $request->image,
                // 'Maloaidichvu' => $request->Maloaidichvu
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
        Dichvu::findOrFail($id)->delete();
        return "Deleted";
    }
}
