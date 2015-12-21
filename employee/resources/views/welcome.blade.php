
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
                   <?php
                     require_once('delete_confirm.php');
                    ?>
                   <div class="table-responsive"> 
                   <table  class="table table-striped table-bordered table-hover table-condensed">
                        <thead><tr><th>Name</th><th>Email</th><th>Addreess</th><th>Telephone</th><th>Salary</th><th>Date of Birth</th><th>Date of Hire</th><th>edit </th><th>delete </th></tr></thead>   
                        @foreach ($employees as $employee)
                        <tbody> 
                        <tr> 
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->telephone}}</td>
                            <td>{{$employee->salary}}</td>
                            <td>{{$employee->data_of_birth}}</td>
                            <td>{{$employee->data_of_hire}}</td>
                            <td> <a href="http://localhost/employee/public/edit/{{$employee->id}}"> <button type="button" class="btn btn-info btn-xs" ><i class="glyphicon glyphicon-edit"></i>Edit</button> </a></td>
                            <td>
                              <form method="GET" action="http://localhost/employee/public/delete/{{$employee->id}}" accept-charset="UTF-8" style="display:inline">
                                  <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Employee" data-message="Are you sure you want to delete this Employee ?">
                                      <i class="glyphicon glyphicon-trash"></i> Delete
                                  </button>
                              </form>
                            </td>                            
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                    </div>
                    <center>
                      {!! $employees->render(); !!}
                    </center>
                    <center>
                    <a href="http://localhost/employee/public/add"><button class="btn btn-lg btn-primary" type="button" >
                                      <i class="glyphicon glyphicon-plus"></i> Add New Employee
                    </button></a>
                    <form method="GET" action="http://localhost/employee/public/delete" accept-charset="UTF-8" style="display:inline">
                                  <button class="btn btn-lg btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete All Employee" data-message="Are you sure you want to delete All Employees ?">
                                      <i class="glyphicon glyphicon-trash"></i> Delete All Employee
                                  </button>
                    </form>
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
