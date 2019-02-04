<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Genre;

class GenreController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$datas = Genre::orderBy('created_at','desc')->paginate(10);
		return view('admin.genre.table', compact('datas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$header = "Tambah";
		return view('admin.genre.form',compact('header'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'genre' => 'required',
			'keterangan' => 'required'
		]);
		$data = new Genre([
			'id' => Uuid::uuid4()->getHex(),
			'genre' => $request->get('genre'),
			'keterangan' => $request->get('keterangan')
		]);
		$data->save();
		return redirect('/admin/genre')->with('success','Data berhasil disimpan !!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$header = "Edit";
		$data = Genre::find($id);
		return view('admin.genre.form',compact('data','header'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
			'genre' => 'required',
			'keterangan' => 'required'
		]);
		$data = Genre::findOrFail($id)->update([
			'genre' => $request->get('genre'),
			'keterangan' => $request->get('keterangan')
		]);
		return redirect('/admin/genre')->with('success','Edit data berhasil !!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$data = Genre::findOrFail($id);
		$data->delete();
		return redirect('/admin/genre')->with('success','Data berhasil dihapus !!');
	}
}
