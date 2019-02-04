<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Buku;
use App\Text_bahasa;
use App\Jenis_cover;
use App\Jenis_buku;
use App\Genre;

class BukuController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$datas = Buku::orderBy('created_at','desc')->paginate(10);
		return view('admin.buku.table',compact('datas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$jenis_buku = Jenis_buku::orderBy('created_at','asc')->get();
		$genres = Genre::orderBy('created_at','asc')->get();
		$covers = Jenis_cover::orderBy('created_at','asc')->get();
		$bahasa = Text_bahasa::orderBy('created_at','asc')->get();
		$header = "Tambah";
		return view('admin.buku.form',compact('header','bahasa','covers','jenis_buku','genres'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
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
		//
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
