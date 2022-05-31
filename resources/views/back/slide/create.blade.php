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
                            <div class="card-title ml-5">Form Slide Video</div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('slide.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul Slide</label>
                                <input type="text" name="judul_slide" class="form-control" id="text"
                                    placeholder="Enter Judul Slide">
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" class="form-control" id="text" placeholder="Enter link">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar Slide</label>
                                <input type="file" name="gambar_slide" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Publish</option>
                                    <option value="0">Draft</option>
                                </select>
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
