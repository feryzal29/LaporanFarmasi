<?php

namespace App\Http\Controllers;

use App\Models\MenuUtama;
use Illuminate\Http\Request;

class MenuUtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menuUtama');
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
     * @param  \App\Models\MenuUtama  $menuUtama
     * @return \Illuminate\Http\Response
     */
    public function show(MenuUtama $menuUtama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuUtama  $menuUtama
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuUtama $menuUtama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuUtama  $menuUtama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuUtama $menuUtama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuUtama  $menuUtama
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuUtama $menuUtama)
    {
        //
    }
}
