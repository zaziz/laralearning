@extends('layout');
@section('content')
    <div class="page-header" style="border: 1px solid #0077b3; text-align: center">
    <h1>EMS <small>Employee Management </small> </h1>
    </div>
    <div class="panel panel-default">
    <div class="panel-body">
        <a href="{{action('EmployeesController@create')}}" class="btn btn-info" > Add New Employee</a>
    </div>
    </div>
    @if($employees->isEmpty())
    There are no Emplopyees :(
    @else
     <table class="table table-striped">
            <tr>
                <th>First Name</th>
                <th>Las Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->firstName}}</td>
                <td>{{$employee->lastName}}</td>
                <td>{{$employee->email}}</td>
                <td><a href="{{action('EmployeesController@edit',$employee->id)}}" class="btn btn-default">EDIT</a>
                <a href="{{action('EmployeesController@delete',$employee->id)}}" class="btn btn-danger">DELETE</a></td>
             </tr>

                @endforeach



            </tbody>
     </table>
       <labe class="pagination">{{ $employees->links(); }}</labe>
@endif

@stop