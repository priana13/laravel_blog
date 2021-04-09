@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                        <form action="{{route('form')}}" method="post">
                            @csrf
                            <input type="text" name="nama">
                            <button type="submit">Kirim</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
