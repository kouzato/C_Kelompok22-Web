@extends('backend.layouts.template')
@section('content')
<!-- start: Content -->
<div id="content">
  <div class="panel box-shadow-none content-header">
      <div class="panel-body">
          <div class="col-md-12">
              <h3 class="animated fadeInLeft">List Keluhan</h3>
              <p class="animated fadeInDown">
                  Option <span class="fa-angle-right fa"></span>List Keluhan
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
                     
                      </div>
                  </div>
                  <div class="responsive-table">

                      <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                          <thead>
                              <tr>

                                  <th>Nama</th>
                                  <th>Email</th>
                                  <th>Isi</th>
                                  <th>Foto</th>
                              </tr>

                              @foreach ($keluhan as $item)
                          </thead>
                          <tbody>
                              <tr>

                                  <td>{{$item->nama}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->isi}}</td>
                                  <td><img src="{{asset('img/'.$item->foto)}}" height ="10%" width ="50%"></td>
                                </tr>
                                <td>
                        <div class="btn-group">
                          <form action="{{ route('keluhan.destroy',$item->id)}}" method="POST">
                                      <a href="https://mail.google.com"
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
