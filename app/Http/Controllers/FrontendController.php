<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use App\Models\Slide;
use App\Models\Materi;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
        ]);
    }

    public function smart()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.smart', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
        ]);
    }

    public function saintek()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.saintek', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
        ]);
    }

    public function soshum()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.soshum', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
        ]);
    }

    public function detail($slug){
        $kategori = Kategori::all();
        $materi = Materi::where('slug', $slug)->first();
        $artikel = Artikel::where('slug', $slug)->first();
        $iklanA = Iklan::where('id', '1')->first();
        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit('5')->get();



        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'iklanA' => $iklanA,
            'postinganTerbaru' => $postinganTerbaru,
            'materi' => $materi
        ]);

    }
}
