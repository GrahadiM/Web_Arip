@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white bg-primary" style="font-size: 24px">
            {{ $topik->nama }} {{ "(".$topik->nama_en.")" }}
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($files as $file)
                @if ($file->status == "Active")
                @if ($file->topik->id == $topik->id)
                <li class="list-group-item">
                    <a href="{{ url('file', $file->id) }}">
                        <h5 style="font-weight: bold; color: black;">{{ $file->judul_tesis }}</h5>
                        <span style="color: grey;">{{ Str::limit($file->abstrak, $limit = 150, $end = '...') }}</span>
                    </a>
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