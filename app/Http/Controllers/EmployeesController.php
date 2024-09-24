<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Employees = Employees::all();
        return view('employees.index')->with('allemployees', $Employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employees;
        $employee->name = $request->name;
        $employee->sallary = $request->sallary;
        $employee->save();
        return redirect('allemployees')->with('insert_done', 'employee is inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employees::find($id);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employees::find($id);
        $employee->name = $request->name;
        $employee->sallary = $request->sallary;
        $employee->save();
        return redirect('allemployees')->with('update_done', 'employee updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return redirect('allemployees')->with('delete_done', 'employee is deleted');
    }
}
