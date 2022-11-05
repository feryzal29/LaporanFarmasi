<?php

namespace App\Http\Controllers;

use App\Models\LaporanBulanan;
use Illuminate\Http\Request;

class LaporanBulananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Laporan/Bulanan');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanBulanan  $laporanBulanan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanBulanan $laporanBulanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanBulanan  $laporanBulanan
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanBulanan $laporanBulanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanBulanan  $laporanBulanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanBulanan $laporanBulanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanBulanan  $laporanBulanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanBulanan $laporanBulanan)
    {
        //
    }
}
