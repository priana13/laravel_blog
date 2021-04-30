@extends('layouts.themplate2')

@section('content')



<div class="row">
    <div class="col-md-8">
            <div class="card card-primary">

                <!-- /.card-header -->
                <div class="card-body">
                <!-- <h4>Input</h4> -->
                <div class="form-group">
                    <!-- <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label> -->
                    <input type="text" class="form-control form-control-border" id="judul" placeholder="Tulis Judul Post">
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label> -->
                    <input type="text" class="form-control form-control-border border-width-0" id="url" placeholder="url">
                </div>


                <div class="form-group">
                <textarea id="summernote" style="display:none">
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
                <select class="custom-select form-control-border" id="exampleSelectBorder">
                <option>Draft</option>
                <option>Published</option>
                <option>Cenceled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelectBorderWidth2">Categories</label>
                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                <option>Value 1</option>
                <option>Value 2</option>
                <option>Value 3</option>
                </select>
            </div>

                
                <div class="form-group">
                  <label>Tags</label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->


            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            <!-- /.card-body -->
        </div>

    <!-- akhir div col sideber kanan -->
    </div>

<!-- akhir row -->
</div>



@endsection