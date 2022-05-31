@extends('layouts.default')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    {{-- <h2 class="text-white pb-2 fw-bold">Dashboard</h2> --}}
                    <h1 class="text-white mb-2 text-center">Halaman Materi</h1>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Customer</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">

        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <a href="{{ route('materi.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            <div class="card-title ml-5">Edit Materi{{ $materi->judul_materi }}</div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materi.update', $materi->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul Materi</label>
                                <input type="text" name="judul_materi" class="form-control" id="text"
                                    value="{{ $materi->judul_materi }}">
                            </div>

                            <div class="form-group">
                                <label for="kategori">Playlist</label>
                                <select name="playlist_id" class="form-control">
                                    @foreach ($playlist as $row)
                                        @if ($row->id == $materi->playlist_id)
                                            <option value={{ $row->id }} selected='selected'>
                                                {{ $row->judul_playlist }}</option>
                                        @else
                                            <option value="{{ $row->id }}">
                                                {{ $row->judul_playlist }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" {{ $materi->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                    <option value="0" {{ $materi->is_active == '0' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar Materi</label>
                                <input type="file" name="gambar_materi" class="form-control">
                                <div class="pl-2">
                                    <label for="gambar">Gambar saat ini</label>
                                </div>
                                <div class="pl-2">
                                    <img src="{{ asset('uploads/' . $materi->gambar_materi) }}" width="100" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="body">Deskripsi</label>
                                <textarea name="deskripsi" id="editor1" class="form-control" rows="4">{{ $materi->deskripsi }}</textarea>
                            </div>

                            <div class="form-group mt-3">
                                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                                <button class="btn btn-info btn-sm ml-3" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
