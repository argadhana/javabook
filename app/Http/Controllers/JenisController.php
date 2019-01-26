<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Jenis_buku;

class JenisController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$datas = Jenis_buku::orderBy('created_at','desc')->get();
		return view('admin.jenis.table', compact('datas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$header = "Tambah";
		return view('admin.jenis.form',compact('header'));
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
			'jenis_buku' => 'required',
			'keterangan' => 'required'
		]);
		$data =  new Jenis_buku([
			'id' => Uuid::uuid4()->getHex(),
			'jenis_buku' => $request->get('jenis_buku'),
			'keterangan' => $request->get('keterangan')
		]);
		$data->save();
		return redirect('/admin/jenis')->with('success','Data berhasil disimpan !!');
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
		$data = Jenis_buku::findOrFail($id);
		return view('admin.jenis.form', compact('data','header'));
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
			'jenis_buku' => 'required',
			'keterangan' => 'required'
		]);
		$data =  Jenis_buku::findOrFail($id)->update($request->all());
		return redirect('/admin/jenis')->with('success','Edit data berhasil !!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$data = Jenis_buku::findOrFail($id);
		$data->delete();
		return redirect('/admin/jenis')->with('success','Data berhasil dihapus !!');
	}
}
