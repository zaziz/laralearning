@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;">
<h1>Edit Employee </h1>
</div>
<form action="{{action('EmployeesController@handleEdit')}}" method="post" role="form">
{{$errors->first('firstName')}}<br>
{{$errors->first('lastName')}}<br>
{{$errors->first('email')}}<br>

<input type="hidden" name="id" value="{{ $employee->id }}">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" value="{{ $employee->firstName }}" />
        </div>
        <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" value="{{ $employee->lastName }}" />
        </div>
        <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $employee->email }}" />
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('EmployeesController@index') }}" class="btn btn-link">Cancel</a>

</form>


