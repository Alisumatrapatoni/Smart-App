@extends('layouts.default')

@section('content')
    <div class="page-inner mt--5">

        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            <div class="card-title ml-5">Form Kategori</div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('kategori.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="kategori">Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" id="text"
                                    placeholder="Enter Kategori">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
