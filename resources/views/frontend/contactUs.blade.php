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
            <div class="card-body">
                <h5 class="ml-3 font-weight-bold">Contact Us</h5>
                <form action="{{ url('/contactPost') }}" method="POST">
                    @csrf
                    <div class="row ml-2">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input name="nama" type="text" class="form-control" id="inputName" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email address</label>
                                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Subject</label>
                                <input name="subjek" type="text" class="form-control" id="inputSubject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Detail</label>
                                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection