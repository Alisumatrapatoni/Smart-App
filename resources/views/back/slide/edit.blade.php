@extends('layouts.default')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    {{-- <h2 class="text-white pb-2 fw-bold">Dashboard</h2> --}}
                    <h1 class="text-white mb-2 text-center">Halaman Slide Banner</h1>
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
                            <a href="{{ route('slide.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            <div class="card-title ml-5">Slide Banner {{ $slide->judul_slide }}</div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('slide.update', $slide->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Slide Banner</label>
                                <input type="text" name="judul_slide" value="{{ $slide->judul_slide }}"
                                    class="form-control" placeholder="Enter Judul slide">
                            </div>

                            <div class="form-group">
                                <label for="judul">Slide Banner</label>
                                <input type="text" name="link" value="{{ $slide->link }}" class="form-control"
                                    placeholder="Enter Link">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $slide->status == '1' ? 'selected' : '' }}>Publish</option>
                                    <option value="0" {{ $slide->status == '0' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar Slide</label>
                                <div class="pl-2">
                                    <label for="gambar">Gambar saat ini</label>
                                </div>
                                <div class="pl-2">
                                    <img src="{{ asset('uploads/' . $slide->gambar_slide) }}" width="100" alt="">
                                    <div>
                                        <input type="file" name="gambar_slide" class="form-control">
                                    </div>
                                </div>
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
