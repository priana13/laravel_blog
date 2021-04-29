@extends('layouts.themplate2')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md">

        <a class="btn btn-primary btn-sm" href="">Tambah</a>
            <div class="card">
            
                              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    


            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>                   
                </thead>

                <tbody>
                @php $i=1; @endphp
                @foreach($data as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->created_at}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->category->category_name}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm" href="">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>

            {{$data}}


                </div>
            </div>
        </div>
    </div>

@endsection
