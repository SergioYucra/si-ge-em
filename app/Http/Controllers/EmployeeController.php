<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /*Acceso a lista de empleados*/
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }
    /*Acceso a vista formulario para registro de empleados*/
    public function create()
    {
        $departments = Department::all();
        return view('employee.create', compact('departments'));
    }

    /*Registro en base de datos de empleados*/
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

    /*Acceso a a vista formulario de actualizacion de registro de empleados*/
    public function edit(Employee $employee)
    {
        $departments = Department::all();
        return view('employee.edit',  compact('employee', 'departments'));
    }

    /*Actualizacion de registro de empleados*/
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

    /*Eliminacion de registro de empleados*/
    public function destroy(Employee $employee)
    {
        $employee->delete();

        session()->flash('message2', 'Se elimino el registro de empleado');

        return redirect()->route('employees.index');
    }
}
