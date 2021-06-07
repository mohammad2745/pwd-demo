<?php

namespace App\Http\Controllers;

use App\Models\Implementor;
use Illuminate\Http\Request;

class ImplementorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $implementors = Implementor::latest()->paginate(5);
  
        return view('implementors.index',compact('implementors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('implementors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ministry'=> 'required',
            'sub_ministry'=> 'required',
            'sector'=> 'required',
            'sub_sector'=> 'required',
            'division'=> 'required',
            'subdivision'=> 'required',
        ]);
  
        Implementor::create($request->all());
   
        return redirect()->route('implementors.index')
                        ->with('success','Implementor organization created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Implementor  $implementor
     * @return \Illuminate\Http\Response
     */
    public function show(Implementor $implementor)
    {
        return view('implementors.show',compact('implementor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Implementor  $implementor
     * @return \Illuminate\Http\Response
     */
    public function edit(Implementor $implementor)
    {
        return view('implementors.edit',compact('implementor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Implementor  $implementor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Implementor $implementor)
    {
        $request->validate([
            'ministry'=> 'required',
            'sub_ministry'=> 'required',
            'sector'=> 'required',
            'sub_sector'=> 'required',
            'division'=> 'required',
            'subdivision'=> 'required',
        ]);
  
        $implementor->update($request->all());
  
        return redirect()->route('implementors.index')
                        ->with('success','Implementor organization information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Implementor  $implementor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Implementor $implementor)
    {
        $implementor->delete();
  
        return redirect()->route('implementors.index')
                        ->with('success','Implementor Organizaion deleted successfully');
    }
}
