<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('back.slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slide.create');
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
            'judul_slide' => 'required|min:4',
            'gambar_slide' => 'mimes:png,jpg,jpeg,gif,jfif'

        ]);

        if (!empty($request->file('gambar_slide'))) {
            $data = $request->all();
            $data['gambar_slide'] = $request->file('gambar_slide')->store('slide');

            Slide::create($data);

            return redirect()->route('slide.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            $data = $request->all();
            Slide::create($data);

            Alert::success('Success', 'Data Berhasil Disimpan');
            return redirect()->route('slide.index');
        }
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
        $slide = Slide::find($id);
        return view('back.slide.edit', compact('slide'));
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
        if (empty($request->file('gambar_slide'))) {
            $playlist = Slide::find($id);
            $playlist->update([
                //$data = $request->all();
                'judul_slide' => $request->judul_slide,
                'link' => $request->link,
                'slug' => Str::slug($request->judul_slide),
                'status' => $request->status
                //$data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');
            ]);
            //Artikel::create($data);
            Alert::warning('updated', 'Data Berhasil Diupdate');
            return redirect()->route('slide.index');
        } else {
            $slide = Slide::find($id);
            Storage::delete($slide->gambar_slide);
            $slide->update([
                //$data = $request->all();
                'judul_slide' => $request->judul_slide,
                'link' => $request->link,
                'slug' => Str::slug($request->judul_slide),
                'status' => $request->status,
                'gambar_slide' => $request->file('gambar_slide')->store('slide'),
            ]);
            Alert::warning('Updated', 'Data Berhasil Diupdate');
            return redirect()->route('slide.index');
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
        $slide = Slide::findOrFail($id);
        if (!$slide) {
            return redirect()->back()->with('success', 'Data Tidak Ada');
        }
        Storage::delete($slide->gambar_slide);

        $slide->delete();

        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('slide.index')->with('success', 'Data Berhasil Dihapus');
    }
}
