<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan = Iklan::all();
        return view('back.iklan.index', compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iklan = Iklan::all();
        return view('back.iklan.create', compact('iklan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();

        $data['gambar_iklan'] = $request->file('gambar_iklan')->store('iklan');
        Iklan::create($data);

        Alert::success('Success', 'Data Berhasil Disimpan');
        return redirect()->route('iklan.index');
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
        $iklan = Iklan::find($id);

        return view('back.iklan.edit', compact('iklan'));
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
        if (!empty($request->file('gambar_iklan'))) {
            $data = $request->all();
            $data['gambar_iklan'] = $request->file('gambar_iklan')->store('iklan');

            $iklan = Iklan::findOrFail($id);

            Storage::delete($iklan->gambar_iklan);
            $iklan->update($data);

            Alert::warning('Success', 'Data Berhasil Diupdate');
            return redirect()->route('iklan.index');
        } else {
            $data = $request->all();

            $iklan = Iklan::findOrFail($id);
            $iklan->update($data);

            Alert::warning('Success', 'Data Berhasil Diupdate');
            return redirect()->route('iklan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iklan = Iklan::find($id);
        Storage::delete($iklan->gambar_iklan);
        $iklan->delete();

        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('iklan.index')->with(['success' => 'Data Berhasil Di Hapus']);
    }
}
