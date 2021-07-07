@extends('backend.layouts.template')
@section('content')

<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Form Artikel</h3>
                <p class="animated fadeInDown">
                    Form Menu <span class="fa-angle-right fa"></span> Form Artikel
                </p>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-8">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Tulis Artikel</h4>
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <form class="cmxform" id="signupForm" method="get" action="">
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="judul" name="Judul"
                                        required>
                                    <span class="bar"></span>
                                    <label>Judul</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="penulis" name="Penulis"
                                        required>
                                    <span class="bar"></span>
                                    <label>Penulis</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="date" class="form-text" id="tanggal" name="Tanggal"
                                        required>
                                    <span class="bar"></span>
                                    <label>Tanggal</label>
                                </div>

                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="keterangan"
                                        name="Keterangan" required>
                                    <span class="bar"></span>
                                    <label>Keterangan</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <label>Isi</label>
                                <div class="box-v5 panel">
                                    <div class="panel-heading padding-0 bg-white border-none">
                                        <textarea placeholder="what do you think?" style="resize: none;"></textarea>
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
                                                                <label>Foto Artikel</label>
                                                                <input type="file" name="manualfile"
                                                                    class="fileupload-v1-file hidden" />
                                                                <input type="text"
                                                                    class="form-control fileupload-v1-path"
                                                                    placeholder="File Path..." disabled>
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
<!-- end: content -->
@endsection
