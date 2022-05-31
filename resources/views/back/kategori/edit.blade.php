@extends('layouts.default')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    {{-- <h2 class="text-white pb-2 fw-bold">Dashboard</h2> --}}
                    <h1 class="text-white mb-2 text-center">Halaman Kategori</h1>
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
                            <div class="card-title">Edit Kategori <i>{{ $kategori->nama_kategori }}</i>
                            </div>
                            <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm ml-auto"> Back </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kategori">Nama Kategori</label>
                                <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}"
                                    class="form-control" id="text" placeholder="Enter Kategori">
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
