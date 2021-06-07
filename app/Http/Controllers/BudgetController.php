<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::latest()->paginate(5);

        return view('budgets.index',compact('budgets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budgets.create');
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
            'project'=> 'required',
            'duration'=> 'required',
            'fiscal_year'=> 'required',
            'source_of_fund'=> 'required',
            'donner'=> 'required',
            'amount'=> 'required',
            'date'=> 'required',
        ]);

        Budget::create($request->all());

        return redirect()->route('budgets.index')
            ->with('success','Budget for the project is created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        return view('budgets.show',compact('budget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        return view('budgets.edit',compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        $request->validate([
            'project'=> 'required',
            'duration'=> 'required',
            'fiscal_year'=> 'required',
            'source_of_fund'=> 'required',
            'donner'=> 'required',
            'amount'=> 'required',
            'date'=> 'required',
        ]);

        $budget->update($request->all());

        return redirect()->route('budgets.index')
            ->with('success','Project budgets is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();

        return redirect()->route('budgets.index')
            ->with('success','Project budget deleted successfully');
    }
}
