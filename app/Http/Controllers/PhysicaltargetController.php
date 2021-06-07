<?php

namespace App\Http\Controllers;

use App\Models\Physicaltarget;
use Illuminate\Http\Request;

class PhysicaltargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physicaltargets = Physicaltarget::latest()->paginate(5);

        return view('physicaltargets.index',compact('physicaltargets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Models\Physicaltarget  $physicaltarget
     * @return \Illuminate\Http\Response
     */
    public function show(Physicaltarget $physicaltarget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Physicaltarget  $physicaltarget
     * @return \Illuminate\Http\Response
     */
    public function edit(Physicaltarget $physicaltarget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Physicaltarget  $physicaltarget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Physicaltarget $physicaltarget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physicaltarget  $physicaltarget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physicaltarget $physicaltarget)
    {
        //
    }
}
