@extends('layouts.themplate2')

@section('content')

<div class="row">
          <div class="col-12">
            <div class="row mb-2">
                <div class="col-sm">
                <a class="btn btn-default btn-sm" href="">Add New Post</a> 
                </div>
                
            </div>
         

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Responsive Hover Table</h3> -->

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php $i=1; @endphp
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$post->title}} <br>
                         <div style="color:gray;">
                            <a style="color:gray;" href="">Edit</a> |
                            <a style="color:gray;" href="">Show</a> |
                            <a style="color:gray;" href="">Delete</a> |
                            <a style="color:gray;" href="">Created : {{$post->created_at}}</a>
                         </div>

                      </td>
                      <td>{{$post->category->category_name}}</td>
                      <td>{{$post->status}}</td>
                      <td>
                        <a class="btn btn-primary btn-xs" href="">Show</a> 
                        <a class="btn btn-success btn-xs" href="">Edit</a> 
                        <a class="btn btn-danger btn-xs" href="">Delete</a> 
                      
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

@endsection
