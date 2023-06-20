<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployController extends Controller
{
    public function ViewData()
    {
        return Employee::all();
    }
    public function AddData(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email= $request->email;
        $employee->password= $request->password;
        $employee->phone= $request->phone;
        $employee->address = $request->address;
        $employee->role = $request->role;
        $employee->status = $request->status;
        $result=$employee->save();
        if($result)
        {
            return["output"=>"data has been saved succesfully"];
        }
        else
        {
            return["output"=>"data input fail!!!!!!"];
        }
    }
    public function Update(Request $request)
    {
        // $employee = Employee::find($id);
        // $result = $employee->update($request->all());
        $employee = Employee::find($request->id);
        $employee->name = $request->name;
        $employee->email= $request->email;
        $employee->password= $request->password;
        $employee->phone= $request->phone;
        $employee->address = $request->address;
        $employee->role = $request->role;
        $employee->status = $request->status;
        $result=$employee->save();
        if($result)
        {
            return ["output"=>"Data has been update successfully"];

        }
        else
        {
            return ["output"=>"Data update failled!!!!!!!!"];

        }
    }
    public function DeleteData($id)
    {
        $employee = Employee::find($id);
        $result= $employee->delete();
        if($result)
        {
             return ["output"=>"The Employee with Employement_ID $id has been deleted successfully"];

        }
        else
        {
            return ["output"=>"Delete operation failled!!!!!!!!"];

        }
    }
    public function SearchRecord($name)
    {
        $employee = Employee::where('name',$name)->get();
        return $employee;

    }
    public function SearchRecordWithCharacter($name)
    {
        $employee = Employee::where('name',"like","%".$name."%")->get();
        return $employee;

    }
}
