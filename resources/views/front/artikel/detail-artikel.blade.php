@extends('front.layouts.frontend')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-4">
                <div class="div">
                    <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" class="img-fluid" height="1000px"
                        width="900px">
                </div>
                <div class="detail-content mt-2 p-4">
                    <div class="detail-badge">
                        <a href="" class="badge badge-warning">{{ $artikel->kategori->nama_kategori }}</a>
                        <a href="" class="badge badge-primary">{{ $artikel->users->name }}</a>
                    </div>
                    <h2>{{ $artikel->judul }}</h2>

                    <div class="detail-body">
                        <p>{!! $artikel->body !!}</p>
                    </div>

                    <div class="link-materi pt-3 text-center">Materi Video Silahkan Klik Link Dibawah ini: <br>
                        <iframe width="560" height="315" src="{{ $materi->link }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <a href="{{ $materi->link }}"><button
                                class="btn btn-primary btn-sm rounded text-white text-decoration-none">Klik Aku
                                Donk</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="detail-sidebar-iklan">
                    <hr>
                    <div>
                        <h4>{{ $iklanA->judul }}</h4>
                        <a href="">
                            <img src="{{ asset('uploads/' . $iklanA->gambar_iklan) }}" width="270" height="180">
                        </a>
                    </div>
                </div>
                <div class="detail-sidebar-kategori pt-5">
                    <h4 class="mt-4 pt-3">Kategori</h4>
                    <hr>
                    @foreach ($kategori as $row)
                        <div class="sidebar-kategori d-flex flex-wrap pt-2">
                                <p>{{ $row->nama_kategori }}</p>
                            <p class="ml-auto text-right"><span class="badge-dark">{{ $row->artikel->count() }}</span>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
