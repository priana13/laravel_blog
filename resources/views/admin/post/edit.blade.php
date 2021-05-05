@extends('layouts.themplate2')

@section('content')



<div class="row">
    <div class="col-md-8">
            <div class="card card-primary">

                <!-- /.card-header -->
                <div class="card-body">
                <!-- <h4>Input</h4> -->
                <form action="{{route('updatepost',$post->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <!-- <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label> -->
                    <input type="text" class="form-control form-control-border" name="title" id="title" placeholder="Tulis Judul Post" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label> -->
                    <input type="text" class="form-control form-control-border border-width-0" name="slug" id="slug" placeholder="url" value="{{$post->slug}}">
                </div>


                <div class="form-group">
                <textarea id="summernote" name="desc" style="display:none" value="{{$post->desc}}">
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
                <select class="custom-select form-control-border" name="status" value="{{$post->status}}" id="exampleSelectBorder">
                    <option value="draft" <?php if($post->status == 'draft'){echo 'selected';} ?>>Draft</option>
                    <option value="published" <?php if($post->status == 'published'){echo 'selected';} ?>>Published</option>
                    <option value="cenceled" <?php if($post->status == 'cenceled'){echo 'selected';} ?>>Cenceled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelectBorderWidth2">Categories</label>
                <select class="custom-select form-control-border border-width-2" value="{{$post->category_id}}" name="category_id" id="exampleSelectBorderWidth2">
              @foreach($categories as $category)  
                <option value="{{$category->id}}"<?php if($post->category_id == $category->id){echo 'selected';} ?> >{{$category->category_name}}</option>
              @endforeach
                </select>
            </div>

                
                <div class="form-group">
                  <label>Contoh</label>
                  <div class="select2-purple">
                    <select id="pilihan" class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
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


@push('scripts')
    <script>
    
        $('#pilihan').val({{$tags_terpilih->pluck('id')}}).change();
    
    </script>
@endpush


@endsection