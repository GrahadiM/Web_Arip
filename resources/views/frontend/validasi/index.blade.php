@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white bg-primary" style="font-size: 24px">
                Validasi Admin
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr style="background-color: rgb(190, 190, 181);">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Status</th>
                            <th>Alat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="font-weight: bold;">{{ $file->judul_tesis }}</td>
                            <td>{{ $file->user->name }}</td>
                            <td>{{ $file->status }}</td>
                            <td>
                            <a href="{{ route('validasi.edit', $file->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- endCard -->
    </div>
    <!-- endColmd12 -->
</div>
<!-- /.row -->
@endsection