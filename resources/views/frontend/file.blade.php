@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white bg-primary" style="font-size: 24px">
            {{ $file->judul_tesis }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ url('file', $file->id) }}">
                        <h5 style="font-weight: bold; color: black;">{{ $file->topik_tesis }}</h5>
                        <div class="row">
                            <h6 style="color: grey;" class="col-sm-6">Dosen Pembimbing : {{ $file->dosen_pembimbing }}</h6>
                            <h6 style="color: grey;" class="col-sm-6 d-flex justify-content-end">Tanggal Upload : {{ $file->created_at->format('Y-m-d') }}</h6>
                        </div>
                        <span style="color: grey;">{!! $file->abstrak !!}</span>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <a href="{{ url('download', $file->file)}}" target="_blank" rel="noopener noreferrer">{{ $file->file }}</a>
                            </div>
                            <div class="col-sm-6"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection