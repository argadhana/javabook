<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Penerbit;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Penerbit::orderBy('created_at','decs')->get();
		return view('admin.penerbit.table',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = "Tambah";
		return view('admin.penerbit.form',compact('header'));
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
			'nama' => 'required|max:32',
			'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
		$id = Uuid::uuid4()->getHex();
		$file = $request->img;
		if ($file) {
			$fileName = $id.'.'.$file->getClientOriginalExtension();
			$file->move(public_path('img/penerbit'), $fileName);
		}else{
			$fileName = $file;
		}
		$data =  new Penerbit([
			'id' => $id,
			'nama' => $request->get('nama'),
            'didirikan' => date('Y-m-d',strtotime($request->get('didirikan'))),
            'kantor_pusat' => $request->get('kantor_pusat'),
            'pemilik' => $request->get('pemilik'),
            'induk_perusahaan' => $request->get('induk_perusahaan'),
            'situs_web' => $request->get('situs_web'),
			'img' => $fileName,
			'ket' => $request->get('ket')
		]);
		$data->save();
		return redirect('/admin/penerbit')->with('success','Data berhasil disimpan !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $header = "Detail";
		$data = Penerbit::findOrFail($id);
		return view('admin.penerbit.view', compact('data','header'));
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
		$data = Penerbit::findOrFail($id);
		return view('admin.penerbit.form', compact('data','header'));
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
			'nama' => 'required|max:32',
			'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
		$file = $request->img;
		if ($file) {
			$fileName = $id.'.'.$file->getClientOriginalExtension();
			$file->move(public_path('img/penerbit'), $fileName);
		}else{
			$fileName = $file;
		}
		$data =  Penerbit::findOrFail($id)->update([
			'nama' => $request->get('nama'),
            'didirikan' => date('Y-m-d',strtotime($request->get('didirikan'))),
            'kantor_pusat' => $request->get('kantor_pusat'),
            'pemilik' => $request->get('pemilik'),
            'induk_perusahaan' => $request->get('induk_perusahaan'),
            'situs_web' => $request->get('situs_web'),
			'img' => $fileName,
			'ket' => $request->get('ket')
		]);
		return redirect('/admin/penerbit')->with('success','Edit data berhasil !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penerbit::findOrFail($id);
		if ($data->img) {
			unlink(public_path().'/img/'.$data->img);
		}
		$data->delete();
		return redirect('/admin/penerbit')->with('success','Data berhasil dihapus !!');
    }
}
