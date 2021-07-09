@extends('backend.layouts.template')
@section('content')

<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">List Dokter</h3>
                <p class="animated fadeInDown">
                    Option <span class="fa-angle-right fa"></span>List Dokter
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12 padding-0" style="padding-bottom:20px;">
                        <div class="col-md-6" style="padding-left:10px;">
                        </div>
                        <div class="col-md-6">
                            <div class="col-lg-12">
                            <form action="{{url('')}}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="cari sini">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">search</button>
                                        </div>
                                    </div>

                                </form>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div>
                    </div>
                    <div class="responsive-table">

                        <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="icheck" name="checkbox1" /></th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Username Dokter</th>
                                    <th>Password</th>
                                    <th>Confirm Password</th>
                                    <th>Email Dokter</th>
                                </tr>

                                @foreach ($biodatadokter as $item)
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
                                    <td>{{$item->nama_dokter}}</td>
                                    <td>{{$item->alamat_dokter}}</td>
                                    <td>{{$item->username_dokter}}</td>
                                    <td>{{$item->password_dokter}}</td>
                                    <td>{{$item->confirm_password_dokter}}</td>
                                    <td>{{$item->email_dokter}}</td>
                                  </tr>
                                  <td>
                          <div class="btn-group">
                            <form action="{{ route('biodatadokter.destroy',$item->id)}}" method="POST">
                                        <a href=" {{ route('biodatadokter.edit',$item->id) }} "
                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" name="button"
                                            onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                        </form>
                                        </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                </div>
                <div class="col-md-6" style="padding-top:20px;">
                    <span></span>
                </div>
                <div class="col-md-6">
                    <ul class="pagination pull-right">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                       <!-- <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end: content -->

@endsection
