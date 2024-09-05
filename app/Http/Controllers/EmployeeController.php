<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all(); 
        return view('employee.index',compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employee.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'ci' => 'required|max:14|unique:employees',
            'email' => 'required|email|unique:employees',
            'address' => 'required|max:255',
            'department_id' => 'required',
        ]);
        
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->ci = $request->ci;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->department_id = $request->department_id;
        $employee->save();

        session()->flash('message', 'Se registro al empleado');

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        return view('employee.edit',  compact('employee','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->ci = $request->ci;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->department_id = $request->department_id;
        $employee->save();

        session()->flash('message', 'Se actualizo el registro de empleado');

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        session()->flash('message2', 'Se elimino el registro de empleado');

        return redirect()->route('employees.index');
    }
}
