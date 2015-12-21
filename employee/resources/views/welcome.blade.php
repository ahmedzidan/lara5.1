@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                    employees
            </div> 
            <div class="panel-body">
                @if (count($employees) > 0)
                   <table style="width:100% ; border: 1px solid black;">
                        <tr><th>Name</th><th>Email</th><th>Addreess</th><th>Telephone</th><th>Salary</th><th>Date of Birth</th><th>Date of Hire</th><th>edit product</th><th>delete product</th></tr>   
                        @foreach ($employees as $employee)
                        <tr> 
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->telephone}}</td>
                            <td>{{$employee->salary}}</td>
                            <td>{{$employee->data_of_birth}}</td>
                            <td>{{$employee->data_of_hire}}</td>
                            <td><a href="http://localhost/employee/public/edit/{{$employee->id}}"> <button type="button" class="btn btn-info btn-md">Edit</button> </a></td>
                            <td><a href="http://localhost/employee/public/delete/{{$employee->id}}"> <button type="button" class="btn btn-danger btn-md">Delete</button> </a></td>                           
                        </tr>
                        @endforeach
                    </table>
                    <center>
                      {!! $employees->render(); !!}
                    </center>
               @else
                   <center>
                   <h1>lets start by adding new employee</h1>
                   <a href="http://localhost/employee/public/add"> <button type="button" class="btn btn-primary btn-md">Add New employee</button> </a>
                   </center>
               @endif     
            </div>
        </div>
    </div>
</div>          

@endsection
