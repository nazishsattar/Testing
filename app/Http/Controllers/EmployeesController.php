<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        // return Employee::all();
        $data['emp']=Employee::all();
        return view('Employee.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Employee.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $emp=new Employee();
        $emp->Firstname=$request->input('Firstname');
        $emp->Lastname=$request->input('Lastname');
        $emp->address=$request->input('address');
        $emp->save();
        return redirect('/employee');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
         $emp=Employee::find($id);
    //    return $emp;
    return view('Employee.show')->with('emp',$emp);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $emp=Employee::find($id);
    //    return $emp;
    return view('Employee.edit')->with('emp',$emp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $emp=Employee::find($id);
        $emp->Firstname=$request->input('Firstname');
        $emp->Lastname=$request->input('Lastname');
        $emp->address=$request->input('address');
        $emp->save();
        return redirect('/employee');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     $emp=Employee::find($id);
     $emp->delete();
     return redirect('/employee');
    }
}
