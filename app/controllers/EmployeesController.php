<?php

class EmployeesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
       // $employees = Employee::all();
        $employees = Employee::paginate(3);
        return View::make('index', compact('employees'));
        // Show a listing of employees.
       // $employees = Employee::all();
       // return View::make('index', compact('employees'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('create');
	}
    public function handleCreate(){

        $employee = New Employee();
        $addRules = array(
            'firstName' =>'required',
            'lastName' => 'required',
            'email' => 'unique:employees,email|required|email'
        );
        $validator = Validator::make(Input::all(),$addRules);
        if($validator->fails()){
            Return Redirect::action('EmployeesController@create')
                ->witherrors($validator);
        }else{

        $employee->firstName = Input::get('firstName');
        $employee->lastName = Input::get('lastName');
        $employee->email = Input::get('email');
        $employee->save();
        return Redirect::action('EmployeesController@index');
        }
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Employee $employee)
	{
		//
       // echo $employee;
       // exit;
        return View::make('edit',compact('employee'));
	}
    public function handleEdit(){

        $rules = array(
            'firstName' =>'required',
            'lastName' => 'required',
            'email' => 'unique:employees,email|required|email'
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails()){
            $id = Input::get('id');
            return Redirect::action('EmployeesController@edit',$id)
                ->witherrors($validator);
        }else{
            $employee = Employee::findOrFail(Input::get('id'));
            $employee->firstName = Input::get('firstName');
            $employee->lastName = Input::get('lastName');
            $employee->email = Input::get('email');
            $employee->save();
            return Redirect::action('EmployeesController@index');
        }
    }

    public function delete(Employee $employee){

        //echo $employee;
       // exit;
        return View::make('delete',compact('employee'));
    }
    public function handleDelete(){
        $id = Input::get('employee');
        //echo $id;
        //exit;
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return Redirect::action('EmployeesController@index');
    }
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
