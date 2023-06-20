<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json('employees.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
        $employees = new Employee([
            'name'=>$request('name'),
            'email'=>$request('email'),
            'password'=>$request('password'),
            'phone'=>$request('phone'),
            'address'=>$request('Address'),
            'role'=>$request('role'),
            'status'=>$request('status'),      
        ]);
        $employees->save();
        return response()->json('created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function search(Employee $employee,$id)
    {
        $employee = Employee::where('id',$id)->get();
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee,$id)
    {
        //
        $employee = Employee::find($id);
        $employee->update($request->all());
        return response()->json($employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee, $id)
    {
        //
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json('Employee`s record deleted successfully');
    }
}
