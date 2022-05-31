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
                            <div class="card-title">Data Materi</div>
                            <a href="{{ route('materi.create') }}" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive table-sm">
                            <table class="table table-bordered table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Materi</th>
                                        <th>Slug</th>
                                        <th>Playlist</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($materi as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->judul_materi }}</td>
                                            <td>{{ $row->slug }}</td>
                                            <td>{{ $row->playlist->judul_playlist }}</td>
                                            <td>
                                                @if ($row->is_active == '1')
                                                    Active
                                                @else
                                                    Draft
                                                @endif
                                            </td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $row->gambar_materi) }}" width="100"
                                                    alt="">
                                            </td>

                                            <td>
                                                <a href="{{ route('materi.edit', $row->id) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                                                <form action="{{ route('materi.destroy', $row->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm ml-1">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
