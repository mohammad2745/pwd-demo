<?php

namespace App\Http\Controllers;

use App\Models\Financialtarget;
use Illuminate\Http\Request;

class FinancialtargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialtargets = Financialtarget::latest()->paginate(5);

        return view('financialtargets.index',compact('financialtargets'))
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
     * @param  \App\Models\Financialtarget  $financialtarget
     * @return \Illuminate\Http\Response
     */
    public function show(Financialtarget $financialtarget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Financialtarget  $financialtarget
     * @return \Illuminate\Http\Response
     */
    public function edit(Financialtarget $financialtarget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Financialtarget  $financialtarget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financialtarget $financialtarget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Financialtarget  $financialtarget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financialtarget $financialtarget)
    {
        //
    }
}
