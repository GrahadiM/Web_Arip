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
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-10">
                                <span style="color: grey;">Author : {{ $file->user->name }}</span>
                                <br>
                                <span style="color: grey;">Tanggal Upload : {{ $file->created_at->format('Y-m-d') }}</span>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                @auth
                                    @if ($file->user->id == auth()->user()->id)
                                        <form action="{{ route('uploadFile.destroy', $file->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    @elseif (auth()->user()->role->id == 1)
                                        <form action="{{ route('uploadFile.destroy', $file->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    @else
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                Keyword Ilmu Komputer.
                            </div>
                            <div class="col-3">
                                <a href="{{ route('topik') }}" class="btn btn-sm btn-primary">
                                    Search
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Pencarian
                    </div>
                    <div class="card-body">
                        <!-- SEARCH FORM -->
                        <form href="{{ url('search') }}" class="form-inline" method="GET">
                            <div class="row">
                                <div class="col-8">
                                    <select name="subtopik_id" id="search" class="form-control select2 form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                        <option selected="selected" disabled>Pilih Topik File</option>
                                        @foreach ($subtopiks as $subtopik)
                                        <option value="{{ $subtopik->id }}">{{ $subtopik->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-sm btn-warning">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
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