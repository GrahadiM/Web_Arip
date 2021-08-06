@extends('layouts.index')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="ml-3 font-weight-bold">UPT.PERPUSTAKAAN - Universitas Esa Unggul</h5>
                <span class="ml-3" >Kampus Emas UEU - Jakarta Barat</span>
                <br>
                <span class="ml-3" >Phone   : 021-5674223, ext 282</span>
                <br>
                <span class="ml-3" >E-mail  : library@esaunggul.ac.id</span>
                <br>
                <span class="ml-3" >Website : http://library.esaunggul.ac.id</span>
                <br>
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Komentar</h3>
                {{-- <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-sm btn-outline-primary">Create</a>
                </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Detail</th>
                            <th>Alat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komentars as $komentar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $komentar->nama }}</td>
                            <td>{{ $komentar->email }}</td>
                            <td>{{ $komentar->subjek }}</td>
                            <td>{{ $komentar->detail }}</td>
                            <td>
                                <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- <a href="" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a> --}}
                                {{-- <a href="" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a> --}}
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Detail</th>
                            <th>Alat</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->
@endsection