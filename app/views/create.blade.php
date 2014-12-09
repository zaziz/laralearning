@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3">
    <h1>Add New Employee</h1>

    <form action="{{action('EmployeesController@handleCreate')}}" method="post" role="form">
       <div class="form-group">

       {{$errors->first('firstName')}}<br>
       {{$errors->first('lastName')}}<br>
       {{$errors->first('email')}}<br>

       </div>

        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName">

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <input type="submit" class="btn btn_primary" value="Add">
        <a href="{{action('EmployeesController@index')}}">Cancel</a>
    </form>
</div>

@stop