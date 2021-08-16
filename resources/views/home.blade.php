@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to the master(magister) repository website for the faculty of computer science') }} <br>
                    {{ __('You are email ') }}{{ Auth::user()->email }} <br>
                    {{ __('You are name ') }}{{ Auth::user()->name }} <br>
                    {{ __('You are role ') }}{{ Auth::user()->role->name }} <br>
                    {{ __('You are logged in!') }} <br>
                    @if(auth()->user()->role->id == 1)
                    <hr>
                    {{ __('Total File : ') }} {{ \DB::table('upload_files')->count() }}<br>
                    {{ __('Total Topik : ') }} {{ \DB::table('topiks')->count() }}<br>
                    {{ __('Total Sub Topik : ') }} {{ \DB::table('sub_topiks')->count() }}<br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
