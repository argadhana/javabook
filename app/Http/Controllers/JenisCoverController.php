<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Jenis_cover;

class JenisCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Jenis_cover::orderBy('created_at','decs')->paginate(10);
        return view('admin.jenis_cover.table',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = "Tambah";
		return view('admin.jenis_cover.form',compact('header'));
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
			'jenis_cover' => 'required|max:100',
			'ket' => 'required'
		]);
		$data =  new Jenis_cover([
			'id' => Uuid::uuid4()->getHex(),
			'jenis_cover' => $request->get('jenis_cover'),
			'ket' => $request->get('ket')
		]);
		$data->save();
		return redirect('/admin/jenis-cover')->with('success','Data berhasil disimpan !!');
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
		$data = Jenis_cover::findOrFail($id);
		return view('admin.jenis_cover.form', compact('data','header'));
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
			'jenis_cover' => 'required|max:100',
			'ket' => 'required'
        ]);
        $data =  Jenis_cover::findOrFail($id)->update($request->all());
		return redirect('/admin/jenis-cover')->with('success','Edit data berhasil !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jenis_cover::findOrFail($id);
		$data->delete();
		return redirect('/admin/jenis-cover')->with('success','Data berhasil dihapus !!');
    }
}
