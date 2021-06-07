<?php

namespace App\Http\Controllers;

use App\Models\Financialprogress;
use Illuminate\Http\Request;

class FinancialprogressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialprogresses = Financialprogress::latest()->paginate(5);

        return view('financialprogresses.index',compact('financialprogresses'))
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
     * @param  \App\Models\Financialprogress  $financialprogress
     * @return \Illuminate\Http\Response
     */
    public function show(Financialprogress $financialprogress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Financialprogress  $financialprogress
     * @return \Illuminate\Http\Response
     */
    public function edit(Financialprogress $financialprogress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Financialprogress  $financialprogress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financialprogress $financialprogress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Financialprogress  $financialprogress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financialprogress $financialprogress)
    {
        //
    }
}
