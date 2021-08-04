@extends('layouts.index')

@section('app')
@if ($message = Session::get('success'))
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
            <form action="{{ route('uploadFile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori_id" class="form-control select2">
                            <option selected="selected" disabled>Pilih Kategori File</option>
                            @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputJudulThesis">Judul Thesis</label>
                        <input name="judul_tesis" type="text" class="form-control" id="inputJudulThesis" placeholder="Masukkan Judul Thesis">
                    </div>
                    <div class="form-group">
                        <label for="inputJudulThesisEN">Judul Thesis EN</label>
                        <input name="judul_tesis_en" type="text" class="form-control" id="inputJudulThesisEN" placeholder="Masukkan Judul ThesisEN">
                    </div>
                    <div class="form-group">
                        <label>Topik</label>
                        <select name="topik_id" class="form-control select2">
                            <option selected="selected" disabled>Pilih Topik File</option>
                            @foreach ($topiks as $topik)
                            <option value="{{ $topik->id }}">{{ $topik->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAbstrak">Abstrak</label>
                        <textarea name="abstrak" class="form-control" id="inputAbstrak" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDosenPembimbing">Dosen Pembimbing</label>
                        <input name="dosen_pembimbing" type="text" class="form-control" id="inputDosenPembimbing" placeholder="Masukkan Dosen Pembimbing">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-primary swalDefaultSuccess">Submit</button>
                    <a href="{{ route('uploadFile.index') }}" class="btn btn-outline-danger">Cancel</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- /.row -->
@endsection