@extends('backend.layouts.template')
@section('content')

<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Biodata Dokter</h3>
                <p class="animated fadeInDown">
                    Form Menu <span class="fa-angle-right fa"></span> Biodata Dokter
                </p>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-8">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Biodata Dokter</h4>
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <form class="cmxform" id="signupForm" method="POST" action="{{ isset($biodata_dokter) ? route('biodatadokter.update',$biodata_dokter->id) : route('biodatadokter.store') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {!! isset($biodata_dokter) ? method_field('PUT') : '' !!}
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="nama_dokter"
                                        name="nama_dokter" required value="{{ isset($biodata_dokter) ? $biodata_dokter->nama_dokter : ''}}">
                                    <span class="bar"></span>
                                    <label>Nama Dokter</label>
                                </div>

                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="alamat" name="alamat"
                                        required value="{{ isset($biodata_dokter) ? $biodata_dokter->alamat_dokter : ''}}">
                                    <span class="bar"></span>
                                    <label>Alamat</label>
                                </div>

                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="username_dokter" name="username_dokter"
                                        required value="{{ isset($biodata_dokter) ? $biodata_dokter->username_dokter : ''}}">
                                    <span class="bar"></span>
                                    <label>Username Dokter</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="password" class="form-text" id="password_dokter"
                                        name="password_dokter" required value="{{ isset($biodata_dokter) ? $biodata_dokter->password_dokter : ''}}">
                                    <span class="bar"></span>
                                    <label>Password Dokter</label>
                                </div>

                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="password" class="form-text" id="confirm_password_dokter"
                                        name="confirm_password_dokter" required value="{{ isset($biodata_dokter) ? $biodata_dokter->confirm_password_dokter : ''}}">
                                    <span class="bar"></span>
                                    <label>Confirm Password Dokter</label>
                                </div>

                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="email_dokter" name="email_dokter"
                                        required value="{{ isset($biodata_dokter) ? $biodata_dokter->email_dokter : ''}}">
                                    <span class="bar"></span>
                                    <label>Email Dokter</label>
                                </div>
                            </div>
                            <!--<div class="col-md-12">
                                <div class="form-group form-animate-checkbox">
                                    <label>Foto Dokter</label>
                                    <input type="file" name="manualfile" class="fileupload-v1-file hidden" />
                                    <input type="text" class="form-control fileupload-v1-path"
                                        placeholder="File Path..." disabled>
                                    <span class="input-group-btn">
                                        <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i>
                                            Choose File</button>
                                    </span>
                                </div>
                                <div class="form-group form-animate-checkbox">
                                    <label>Foto Ijazah</label>
                                    <input type="file" name="manualfile" class="fileupload-v1-file hidden" />
                                    <input type="text" class="form-control fileupload-v1-path"
                                        placeholder="File Path..." disabled>
                                    <span class="input-group-btn">
                                        <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i>
                                            Choose File</button>
                                    </span>
                                </div>
                                <div class="form-group form-animate-checkbox">
                                    <input type="checkbox" class="checkbox" id="validate_agree" name="validate_agree">
                                    <label>Please agree to our policy</label> -->
                                </div>
                                <input class="submit btn btn-danger" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
    @endsection
