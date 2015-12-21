<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
use App\Employee ;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $employees = DB::table('employee')->paginate(2);
          return view('welcome', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //open create view
        return view('employee.create' ); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation 
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'address' => 'required',
            'telephone' => 'telephone|required|max:10',
            'salary' => 'required|integer|min:1',
            'birth' => 'required|date_format:Y-m-d',
            'hire' => 'required|date_format:Y-m-d',
        ]);
        //get data from input 
        $input = $request->all();
        $name=$input['name'] ; //get name 
        $email=$input['email'] ; //get email
        $address=$input['address'] ; //get name 
        $telephone=$input['telephone'] ; //get telephone
        $salary=$input['salary'] ; //get salary
        $birth=$input['birth'] ; //get date of birth
        $hire=$input['hire'] ; //get date of hire
        
        // insert data into database
        $employee = new Employee ;
        $employee->name =$name ;
        $employee->email =$email ;
        $employee->address =$address ;
        $employee->telephone =$telephone ;
        $employee->salary =$salary ;
        $employee->data_of_birth =$birth ;
        $employee->data_of_hire =$hire ; 
        $employee->save();  
        // after save data will redirect to index page 
        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit employee
        //return 'this edit page ';
        $employee = Employee::find($id);
        return view('employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //find id
        $employee = Employee::find($id);
        //validation 
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'salary' => 'required',
            'birth' => 'required',
            'hire' => 'required',
        ]);
        //get data from input 
        $input = $request->all();
        $name=$input['name'] ; //get name 
        $email=$input['email'] ; //get email
        $address=$input['address'] ; //get name 
        $telephone=$input['telephone'] ; //get telephone
        $salary=$input['salary'] ; //get salary
        $birth=$input['birth'] ; //get date of birth
        $hire=$input['hire'] ; //get date of hire
        
        // update data into database
        $employee->name =$name ;
        $employee->email =$email ;
        $employee->address =$address ;
        $employee->telephone =$telephone ;
        $employee->salary =$salary ;
        $employee->data_of_birth =$birth ;
        $employee->data_of_hire =$hire ; 
        $employee->save();  
        // after save data will redirect to index page 
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //delete row by its id 
        Employee::where('id', $id)->delete();
        return redirect('/');
    }
    /* delete all employee  */
    public function delete()
    {
        //
        DB::table('employee')->delete();
        return redirect('/');
    }
}
