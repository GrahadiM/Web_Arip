@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header text-white bg-primary" style="font-size: 24px">
            Artikel Terbaru
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($files as $file)
            @if ($file->status == "Active")
            <li class="list-group-item">
                <a href="{{ url('file', $file->id) }}">
                    <h5 style="font-weight: bold; color: black;">{{ $file->judul_tesis }}</h5>
                    <span style="color: grey;">{{ Str::limit($file->abstrak, $limit = 100, $end = '...') }}</span>
                </a>
            </li>
            @endif
            @endforeach
        </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header text-white bg-primary">
                Pencarian
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <!-- SEARCH FORM -->
                <form href="{{ url('search') }}" class="form-inline" method="GET">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-10">
                                <select name="topik_id" id="search" class="form-control select2 form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    <option selected="selected" disabled>Pilih Topik File</option>
                                    @foreach ($topiks as $topik)
                                    <option value="{{ $topik->id }}">{{ $topik->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> --}}
                            <div class="col-2">
                                {{-- <a href="" type="submit" class="btn btn-warning">Search</a> --}}
                                <button type="submit" class="btn btn-warning">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- <form class="form" method="get" action="{{ route('search') }}">
                    <div class="form-group w-100 mb-3">
                        <label for="search" class="d-block mr-2">Pencarian</label>
                        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form> --}}
                </li>
            </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
            <div class="card-header text-white bg-primary">
                Koleksi
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($kategoris as $kategori)
                <li class="list-group-item">
                    <a href="{{ url('kategori', $kategori->id) }}" style="color: rgb(238, 119, 39); font-weight: bold;">
                        <i class="far fa-folder"></i> {{ $kategori->nama }}
                    </a>
                </li>
                @endforeach
            </ul>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection