@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white bg-primary" style="font-size: 24px">
                {{ __('List Topik') }}
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($topiks as $topik)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-11">
                                {{-- <a href="{{ url('subtopik', $topik->id) }}"> --}}
                                    <h5 style="font-weight: bold; color: rgb(190, 174, 174)90, 174, 174);">
                                        {{ $topik->nama }} {{ "(".$topik->nama_en.")" }}
                                    </h5>
                                {{-- </a> --}}
                            </div>
                            <div class="col-1 d-flex justify-content-end">
                                <a href="{{ url('subtopik', $topik->id) }}">
                                    <span>{{ \DB::table('sub_topiks')->where('topik_id', $topik->id)->count() }}</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection