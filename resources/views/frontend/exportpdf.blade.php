@extends('layouts.index')

@section('content')


<embed type="application/pdf" src="{{ asset('file/sertifikat')."/".$file->file}}" width="600" height="400"></embed>

@endsection