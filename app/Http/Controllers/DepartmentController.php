<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /*Acceso a lista departamentos*/
    public function index()
    {
        $departments = Department::all(); 
        return view('department.index',compact('departments'));
    }

    /*Acceso a vista formulario para registro depatamentos*/
    public function create()
    {
        $departments = Department::all();
        return view('department.create',compact('departments'));
    }

    /*Registro en base de datos de departamentos*/
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

    /*Acceso a a vista formulario de actualizacion de registro depatamentos*/
    public function edit(Department $department)
    {
        $departments = Department::all();
        return view('department.edit',  compact('department','departments'));
    }

    /*Actualizacion de registro de departamentos*/
    public function update(Request $request, Department $department)
    {
        $department->name = $request->name;
        $department->save();

        session()->flash('message', 'Se actualizo el registro de departamento');

        return redirect()->route('departments.index');
    }

    /*Eliminacion de registro de depatamentos*/
    public function destroy(Department $department)
    {
        $department->delete();

        session()->flash('message2', 'Se elimino el departamento');

        return redirect()->route('departments.index');
    }
}
