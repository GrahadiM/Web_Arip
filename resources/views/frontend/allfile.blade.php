@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header text-white bg-primary" style="font-size: 24px">
            {{ $subtopik->nama }}
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($files as $file)
            @if ($file->status == "Active")
            @if ($file->subtopik->id == $subtopik->id)
            <li class="list-group-item">
                <div class="mb-3">
                    <a href="{{ url('file', $file->id) }}">
                        <h5 style="font-weight: bold; color: black;">{{ $file->judul_tesis }}</h5>
                        <span style="color: grey;">{{ Str::limit($file->abstrak, $limit = 100, $end = '...') }}</span>
                        <br>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-10">
                                    <span style="color: grey;">Author : {{ $file->user->name }}</span>
                                    <br>
                                    <span style="color: grey;">Tanggal Upload : {{ $file->created_at->format('Y-m-d') }}</span>
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <form action="{{ route('uploadFile.destroy', $file->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            @endif
            @endif
            @endforeach
        </ul>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection