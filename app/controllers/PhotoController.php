<?php

class PhotoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$photos = Photo::get();
		return View::make('PhotosList',['photos' => $photos]);
	}


	/**
	 *fet
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('addPhoto');
	}


	/**
	*post
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Photo::insert(Input::all());
		return Redirect::to('photo');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$photo = Photo::find($id);
		return View::make('viewPhoto',['photo' => $photo]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{		
		$photo = Photo::find($id);
		return View::make('editPhoto',['photo' => $photo]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$photo = Photo::find($id);
		$photo->name       = Input::get('name');
		$photo->description= Input::get('description');
		$photo->save();
		return Redirect::to('photo');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$photo = Photo::find($id);
		$photo->delete();
		return Redirect::to('photo');
	}


}
