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

                <!-- Menampilkan list Artikel -->
                @foreach($data as $row)
                    <div>
                        <h3>{{$row->title}}</h3> 
                        <h5>Category: <strong>{{$row->category->category_name}}</strong></h5>                       
                            <div class="nav">
                                <div >
                                    <a href="">edit </a>|                                
                                    <a href="{{url($row->slug)}}">tampilkan</a> |
                                    <a href="">hapus</a>
                                </div>
                            </div>
                        <hr>
                    </div>
                @endforeach
                {{$data}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
