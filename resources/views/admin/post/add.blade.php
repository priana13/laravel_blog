@extends('layouts.themplate2')

@section('content')



<div class="row">
    <div class="col-md-8">
            <div class="card card-primary">

                <!-- /.card-header -->
                <div class="card-body">
                <!-- <h4>Input</h4> -->
                <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <!-- <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label> -->
                    <input type="text" class="form-control form-control-border" name="title" id="title" placeholder="Tulis Judul Post">
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label> -->
                    <input type="text" class="form-control form-control-border border-width-0" name="slug" id="slug" placeholder="url" >
                </div>


                <div class="form-group">
                <textarea id="summernote" name="desc" style="display:none" >
                    ini adalah konten nya
                </textarea>
                </div>



                <!-- <h4>Custom Select</h4> -->
                <!-- <div class="form-group">
                    <label for="exampleSelectBorder"> Short Desc </label>
                    
                    <textarea row="5">
                
                    </textarea>

                </div> -->

            </div>

                <!-- /.card-body -->
            </div>

    <!-- /.col-md-8 -->
    </div>


    <div class="col-md-4">

        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-body">

            <!-- <h4>Custom Select</h4> -->
            <div class="form-group">
                <label for="exampleSelectBorder">Status</label>
                <select class="custom-select form-control-border" name="status"  id="exampleSelectBorder">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="cenceled">Cenceled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelectBorderWidth2">Categories</label>
                <select class="custom-select form-control-border border-width-2" name="category_id" id="exampleSelectBorderWidth2">
              @foreach($categories as $category)  
                <option value="{{$category->id}}">{{$category->category_name}}</option>
              @endforeach
                </select>
            </div>

                
                <div class="form-group">
                  <label>Tags</label>
                  <div class="select2-purple">
                    <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                     @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                     @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->


            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            </form>
            <!-- /.card-body -->
        </div>

    <!-- akhir div col sideber kanan -->
    </div>

<!-- akhir row -->
</div>



@endsection