<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		 // $this->beforeFilter('auth', except('login', 'postLogin'));
		$this->beforeFilter('admin', array('except'=>array('login', 'postLogin')));
		// $this->beforeFilter('admin', array('only'=>array('login', 'postLogin')));
		// $this->beforeFilter('admin');
	}

	public function index()
	{
		$users = User::all();
		return View::make('index')->with('users',$users);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		
		$roles = Permission::find(2)->role;

		dd($roles);
		return View::make('login');
	}

	public function postLogin()
	{
		$input = Input::all();
		$user = array('email' => $input['email'],
			'password' => $input['password']
		);
		if (Auth::attempt($user)) {
			return Redirect::action('UsersController@index');
		}
		else{
			return Redirect::action('UsersController@login')->with('message', 'sai thong tin dang nhap');
		}
	}	
	public function logout()
	{
		Auth::logout();
		return Redirect::action('UsersController@login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return View::make('add');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postcreate()
	{				
		User::create(Input::all());
		return Redirect::action('UsersController@index');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
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
	public function edit($id)
	{

		
		$users = User::find($id);

		return View::make('edit')->with('users',$users);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		// $user = User::find($id);
		// $user->email = $input['email'];
		// $user->name = $input['name'];
		// $user->save();
		$input = Input::except('_token');
		
		$user = User::find($id);
		$user->update($input);
		return Redirect::action('UsersController@index');
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function remove($id)
	{
		$user = User::find($id);
		$user->delete();
		return Redirect::action('UsersController@index');
	}


}
