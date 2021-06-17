@extends('backend.layouts.template')
@section('content')



      <!-- start: Content -->
        <div id="content">
          <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">File Upload</h3>
                    <p class="animated fadeInDown">
                       <span class="fa-angle-right fa"></span> Upload File
                    </p>
                </div>
              </div>
          </div>
          <div class="col-md-12">
              <div class="panel">
                  <div class="panel-heading"></div>
                  <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="input-group fileupload-v1">
                            <input type="file" name="manualfile" class="fileupload-v1-file hidden"/>
                            <input type="text" class="form-control fileupload-v1-path" placeholder="File Path..." disabled>
                            <span class="input-group-btn">
                              <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                            </span>
                          </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                      </div><!-- /.row -->
                  </div>
              </div>

              <div class="panel">
                  <div class="panel-body">
                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
                  </div>
              </div>
          </div>
        </div>
      <!-- end: content -->


        
@endsection
