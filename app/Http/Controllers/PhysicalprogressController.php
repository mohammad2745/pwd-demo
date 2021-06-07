<?php

namespace App\Http\Controllers;

use App\Models\Physicalprogress;
use Illuminate\Http\Request;

class PhysicalprogressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physicalprogresses = Physicalprogress::latest()->paginate(5);

        return view('physicalprogresses.index',compact('physicalprogresses'))
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
     * @param  \App\Models\Physicalprogress  $physicalprogress
     * @return \Illuminate\Http\Response
     */
    public function show(Physicalprogress $physicalprogress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Physicalprogress  $physicalprogress
     * @return \Illuminate\Http\Response
     */
    public function edit(Physicalprogress $physicalprogress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Physicalprogress  $physicalprogress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Physicalprogress $physicalprogress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physicalprogress  $physicalprogress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physicalprogress $physicalprogress)
    {
        //
    }
}
