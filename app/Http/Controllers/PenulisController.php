<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Penulis::orderBy('created_at','decs')->get();
        return view('admin.penulis.table',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = "Tambah";
		return view('admin.penulis.form',compact('header'));
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
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $id = Uuid::uuid4()->getHex();
        $file = $request->img;
        if ($file) {
            $fileName = $id.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
        }else{
            $fileName = $file;
        }
        $data =  new Penulis([
			'id' => $id,
            'nama' => $request->get('nama'),
            'mulai_debut' => date('Y-m-d',strtotime($request->get('mulai_debut'))),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tgl_lahir' => date('Y-m-d',strtotime($request->get('tgl_lahir'))),
            'img' => $fileName,
			'ket' => $request->get('ket')
		]);
		$data->save();
		return redirect('/admin/penulis')->with('success','Data berhasil disimpan !!');
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
		$data = Penulis::findOrFail($id);
		return view('admin.penulis.form', compact('data','header'));
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
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $file = $request->img;
        if ($file) {
            $fileName = $id.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
        }else{
            $fileName = $file;
        }
		$data =  Penulis::findOrFail($id)->update([
            'nama' => $request->get('nama'),
            'mulai_debut' => date('Y-m-d',strtotime($request->get('mulai_debut'))),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tgl_lahir' => date('Y-m-d',strtotime($request->get('tgl_lahir'))),
            'img' => $fileName,
			'ket' => $request->get('ket')
        ]);
		return redirect('/admin/penulis')->with('success','Edit data berhasil !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penulis::findOrFail($id);
        if ($data->img) {
            unlink(public_path().'/img/'.$data->img);
        }
		$data->delete();
		return redirect('/admin/penulis')->with('success','Data berhasil dihapus !!');
    }
}
