@extends('backend.layouts.template')
@section('content')
<div id="content">
            <div class="col-md-12 padding-0">
              <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Dashboard</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Welcome To Veterinary care.
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-12 padding-0">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-12 padding-0">
                      <div class="panel box-shadow-none content-header">

                  <div class="container">
                    <div class="card">
                      <div class="card-body">
                        <h2 > ARTIKEL </h2>

                        @foreach ($tabel_artikel as $tabel_artikel)
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <img width="250px" height="200px" src="/img/{{$tabel_artikel->foto}}"
                            alt="">
                            <div class="ml-3">
                              <h3><a href="{{url('post3').'/'.$tabel_artikel->id}}">{{ $tabel_artikel->judul}}</a></span> </h3>
                              <p>{{ $tabel_artikel->keterangan}}</p>
                              <p class="text-muted">{{$tabel_artikel->created_at}} &middot;</p>
                            </div>

                          </div>
                        </div>
                        <!--<button class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </button>
                    <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                    </button>-->

                        @endforeach

                    </div>

                  </div>

                </div>
@endsection