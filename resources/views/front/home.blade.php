 @extends('front.layouts.frontend')

 @section('content')
     <marquee scrollamount="10" behavior="" direction="left">
        <h2 class="text-center" style="color: black"><b>Selamat Datang di Aplikasi SMART</b></h2>
     </marquee>
     @include('front.includes.slide')
     <div class="pt-4">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand"></a>
            {{-- <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <a href=""><button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search</button></a>
            </form> --}}
          </nav>
     </div>


     <div class="row pb-4 pt-3">

         @forelse ($artikel as $row)
             <div class="col-md-4 mt-3">
                 <div class="card ">
                     <img src=" {{ asset('uploads/' . $row->gambar_artikel) }}" class="card-img-top" height="200"
                         width="100" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">
                             <a href="{{ route('detail-artikel', $row->slug) }}" style="text-decoration: none">
                                 {{ $row->judul }}
                             </a>
                         </h5>
                         <div>
                             <p class="card-text">{{ Str::limit($row->body, 100, $end = '...') }} <a
                                     href="{{ route('detail-artikel', $row->slug) }}"><button type="button"
                                         class=" btn btn-primary btn-sm ">Read More</button></a></p>
                         </div>

                     </div>
                     <div class="container-fluid pb-2">
                        <a class="card-link badge badge-success" style="color: white">{{ $row->users->name }}</a>
                        <a href="" class="pl-5 pr-5"></a>
                        <a class="badge badge-warning" style="color: white" href="{{ $row->kategori->nama_kategori }}">{{ $row->kategori->nama_kategori }}</a>
                    </div>

                 </div>
             </div>
         @empty
             <p class="container">data masih kosong dan silahkan login dan upload sebagai admin agar data bisa
                 ditampilkan!!</p>
         @endforelse
     </div>
 @endsection
