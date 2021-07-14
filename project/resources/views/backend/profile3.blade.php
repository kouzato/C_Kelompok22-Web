@extends('backend.layouts.template3')
@section('content')
<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Form Keluhan</h3>
                <p class="animated fadeInDown">
                    Form Menu <span class="fa-angle-right fa"></span> Form Keluhan
                </p>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-8">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Tulis Keluhan</h4>
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <form class="cmxform" id="signupForm" method="POST" action="{{ isset($keluhan) ? route('keluhan.update',$keluhan->id) : route('keluhan.store') }}" enctype="multipart/form-data">
                            <div class="col-md-6">
                                {!! csrf_field() !!}
                                {!! isset($keluhan) ? method_field('PUT') : '' !!}
                                <input type="hidden" name="id" value="{{ isset($keluhan) ? $keluhan->id : ''}}">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="nama" name="nama"
                                        required value="{{ isset($keluhan) ? $keluhan->nama : ''}}">
                                    <span class="bar"></span>
                                    <label>Nama</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="email" name="email"
                                        required value="{{ isset($keluhan) ? $keluhan->email : ''}}">
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>

                            </div>
                            <div class="col-md-12">
                            <label></label>
                                
                                <div class="box-v5 panel">
                                    <div class="panel-heading padding-0 bg-white border-none">
                                        <textarea id="isi" name="isi" placeholder="what do you think?" style="resize: none;">{{ isset($keluhan) ? $keluhan->isi : ''}}
                                    </textarea>
                                    </div>
                                    <div class="panel-body">
                                        <div class="sub-left-menu scroll">
                                            <ul class="nav nav-list">
                                                <li class="active ripple">
                                                    <a class="tree-toggle nav-header"><span
                                                            class="fa fa-camera fa-2x"></span>
                                                    </a>
                                                    <ul class="nav nav-list tree">
                                                        <li>
                                                            <div class="form-group form-animate-checkbox">
                                                                <label>Foto Keluhan</label>
                                                                <input type="file" name="foto"
                                                                    class="fileupload-v1-file hidden" />
                                                                <input type="text"
                                                                    class="form-control fileupload-v1-path"
                                                                    placeholder="File Path..." enable>
                                                                <span class="input-group-btn">
                                                                    <button class="btn fileupload-v1-btn"
                                                                        type="button"><i class="fa fa-folder"></i>
                                                                        Choose File</button>
                                                                </span>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#">
                                            <span class=""></span>
                                        </a>
                                    </div>
                                </div>
                                <input class="submit btn btn-danger" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
             


@endsection
