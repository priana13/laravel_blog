@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a class="btn btn-primary" href="">Tambah</a>
                              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    

                    <h2>{{$data->title}}</h2>
                    <p>{{$data->desc}}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
