<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all(); 
        return view('department.index',compact('departments'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('department.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        
        $department = new Department();
        $department->name = $request->name;
        $department->save();

        session()->flash('message', 'Se registro el departamento');

        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    public function edit(Department $department)
    {
        $departments = Department::all();
        return view('department.edit',  compact('department','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $department->name = $request->name;
        $department->save();

        session()->flash('message', 'Se actualizo el registro de departamento');

        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        session()->flash('message2', 'Se elimino el departamento');

        return redirect()->route('departments.index');
    }
}
