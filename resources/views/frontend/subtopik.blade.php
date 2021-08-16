@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white bg-primary" style="font-size: 24px">
                {{ $topik->nama }}
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($subtopiks as $subtopik)
                    @if ($subtopik->topik->id == $topik->id)
                    <li class="list-group-item">
                        <a href="{{ route('allfile', $subtopik->id) }}">
                            <h5 style="font-weight: bold; color: rgb(190, 174, 174)90, 174, 174);">
                                {{ $subtopik->nama }}
                            </h5>
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection