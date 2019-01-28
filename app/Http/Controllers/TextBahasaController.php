<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Text_bahasa;

class TextBahasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Text_bahasa::orderBy('created_at','desc')->get();
		return view('admin.text_bahasa.table', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = "Tambah";
		return view('admin.text_bahasa.form',compact('header'));
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
			'bahasa' => 'required|max:100',
            'negara' => 'required|max:100',
            'iso' => 'required|max:2',
		]);
		$data =  new Text_bahasa([
			'id' => Uuid::uuid4()->getHex(),
            'negara' => $request->get('negara'),
            'bahasa' => $request->get('bahasa'),
            'iso' => $request->get('iso'),
			'ket' => $request->get('ket')
		]);
		$data->save();
		return redirect('/admin/text-bahasa')->with('success','Data berhasil disimpan !!');
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
		$data = Text_bahasa::findOrFail($id);
		return view('admin.text_bahasa.form', compact('data','header'));
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
			'bahasa' => 'required|max:100',
            'negara' => 'required|max:100',
            'iso' => 'required|max:2',
        ]);
        $data =  Text_bahasa::findOrFail($id)->update($request->all());
		return redirect('/admin/text-bahasa')->with('success','Edit data berhasil !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Text_bahasa::findOrFail($id);
		$data->delete();
		return redirect('/admin/text-bahasa')->with('success','Data berhasil dihapus !!');
    }
}
