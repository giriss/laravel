<?php

class WelcomeController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make("form");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function form()
	{
		//
                $name = Input::get("name");
                $user = User::create(array('fullName' => $name, 'email' => 'akhile@dr.com', 'password' => 'chat754'));
                $ret = "you posted name to be ".$name;
                return $ret;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function urlRedirect($link_id)
	{
		//
		$ret = "So you are searching for url id: ".$link_id;
		return $ret;
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
		//
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
