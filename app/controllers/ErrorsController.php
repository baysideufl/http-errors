<?php

class ErrorsController extends \BaseController {

	/**
	 * Display a listing of errors
	 *
	 * @return Response
	 */
	public function index()
	{
		$errors = Error::all();

		return View::make('errors.index', compact('errors'));
	}

	/**
	 * Show the form for creating a new error
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('errors.create');
	}

	/**
	 * Store a newly created error in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Error::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Error::create($data);

		return Redirect::route('errors.index');
	}

	/**
	 * Display the specified error.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$error = Error::findOrFail($id);

		return View::make('errors.show', compact('error'));
	}

	/**
	 * Show the form for editing the specified error.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$error = Error::find($id);

		return View::make('errors.edit', compact('error'));
	}

	/**
	 * Update the specified error in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$error = Error::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Error::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$error->update($data);

		return Redirect::route('errors.index');
	}

	/**
	 * Remove the specified error from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Error::destroy($id);

		return Redirect::route('errors.index');
	}

}
