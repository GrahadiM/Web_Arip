@extends('layouts.index')

@section('app')
{{-- @if ($message = Session::get('success'))
    <!-- Page specific script -->
    <script>
        $(function() {
            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                icon: 'success',
                title: {{ $message }}
                })
            });
        });
    </script>
@endif --}}
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@endsection

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-white bg-primary" style="font-size: 24px">
            Upload Data
            </div>
            <!-- form start -->
            <form action="{{ route('validasi.update', $file->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control select2">
                            <option value="Active">Active</option>
                            <option value="Non-Active">Non-Active</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori_id" class="form-control select2">
                            <option selected="selected" value="{{ $file->kategori->id }}">{{ $file->kategori->nama }}</option>
                            @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputJudulThesis">Judul Thesis</label>
                        <input name="judul_tesis" type="text" class="form-control" id="inputJudulThesis" value="{{ $file->judul_tesis }}">
                    </div>
                    <div class="form-group">
                        <label for="inputJudulThesisEN">Judul Thesis EN</label>
                        <input name="judul_tesis_en" type="text" class="form-control" id="inputJudulThesisEN" value="{{ $file->judul_tesis_en }}">
                    </div>
                    <div class="form-group">
                        <label for="inputTopikThesis">Topik Thesis</label>
                        <input name="topik_tesis" type="text" class="form-control" id="inputTopikThesis" value="{{ $file->topik_tesis }}">
                    </div>
                    <div class="form-group">
                        <label for="inputTopikThesisEN">Topik Thesis EN</label>
                        <input name="topik_tesis_en" type="text" class="form-control" id="inputTopikThesisEN" value="{{ $file->topik_tesis_en }}">
                    </div>
                    <div class="form-group">
                        <label for="inputAbstrak">Abstrak</label>
                        <textarea name="abstrak" class="form-control" id="inputAbstrak" rows="8">{{ $file->abstrak }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDosenPembimbing">Dosen Pembimbing</label>
                        <input name="dosen_pembimbing" type="text" class="form-control" id="inputDosenPembimbing"  value="{{ $file->dosen_pembimbing }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <p>{{ $file->file }}</p>
                    </div> --}}
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-primary swalDefaultSuccess">Submit</button>
                    <a href="{{ route('validasi.index') }}" class="btn btn-outline-danger">Cancel</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- /.row -->
@endsection