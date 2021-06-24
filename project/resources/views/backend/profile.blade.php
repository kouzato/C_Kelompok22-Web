@extends('backend.layouts.template')
@section('content')

          <!-- start: Content -->
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src="asset/img/avatar.jpg"/>
                      <h2>{{ Auth::user()->name }}</h2>
                      <input type="button" class="btn btn-danger" value="follow" />
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="asset/img/bg1.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1></h1>
                          <p></p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1></h1>
                           <p></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1></h1>
                          <p></p>
                        </div>
                    </div>
                </div>
             </div>
             <div class="col-md-12 col-sm-12 profile-v1-body">
                <div class="col-md-7">
                   <div class="box-v5 panel">
                    <div class="panel-heading padding-0 bg-white border-none">
                        <textarea placeholder="what do you think?"></textarea>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12 padding-0">
                        <div class="col-md-6 col-sm-6 col-xs-6 tool">
                          <a href="#">
                            <span class="fa fa-map-marker fa-2x"></span>
                          </a>
                          <a href="#">
                            <span class="fa fa-camera fa-2x"></span>
                          </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-0">
                          <button class="btn btn-round pull-right">
                            <span>SEND</span>
                            <span class="icon-arrow-right icons"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="panel box-v7">
                        <div class="panel-body">
                          <div class="col-md-12 padding-0 box-v7-header">
                              <div class="col-md-12 padding-0">
                                  <div class="col-md-10 padding-0">
                                  <img src="asset/img/avatar.jpg" class="box-v7-avatar pull-left" />
                                  <h4>{{ Auth::user()->name }}</h4>
                                  <p>Today 21:10 Am - 14.07.1997</p>
                                  </div>
                                  <div class="col-md-2 padding-0">
                                    <div class="btn-group right-option-v1">
                                    <i class="icon-options-vertical icons box-v7-menu" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                  </div>
                                  </div>
                              </div>
                          </div>
                         <div class="col-md-12 padding-0 box-v7-body">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              <div class="col-md-12 top-20">
                                  <button class="btn">
                                    <i class="icon-like icons"></i> 2819
                                  </button>
                                  <button class="btn">
                                    <i class="icon-bubble icons"></i> 2
                                  </button>
                                  <button class="btn">
                                    <i class="icon-loop icons"></i> 7071
                                  </button>
                              </div>
                          </div>
                          <div class="col-md-12 padding-0 box-v7-comment">

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar2.png" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Fulan</h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-like icons"></i> 2819
                                   </a>
                                   <a href=""> | Comment</a>
                                </div>
                              </div>

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar3.png" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Fulanah</h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                   </p>
                                   <a href="">
                                     <i class="icon-like icons"></i> 2819
                                   </a>
                                   <a href=""> | Comment</a>
                                </div>
                              </div>

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar.jpg" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <textarea class="box-v7-commenttextbox" placeholder="write comments..."></textarea>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="panel box-v7">
                        <div class="panel-body">
                          <div class="col-md-12 padding-0 box-v7-header">
                              <div class="col-md-12 padding-0">
                                  <div class="col-md-10 padding-0">
                                  <img src="asset/img/avatar.jpg" class="box-v7-avatar pull-left" />
                                  <h4>{{ Auth::user()->name }}</h4>
                                  <p>Today 21:10 Am - 14.07.1997</p>
                                  </div>
                                  <div class="col-md-2 padding-0">
                                    <div class="btn-group pull-right">
                                    <i class="icon-options-vertical icons box-v7-menu" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                  </div>
                                  </div>
                              </div>
                          </div>
                         <div class="col-md-12 padding-0 box-v7-body">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                              <img src="asset/img/bg2.jpg" class="img-thumbnail"/>

                              </p>
                              <div class="col-md-12 top-20">
                                  <button class="btn">
                                    <i class="icon-like icons"></i> 2819
                                  </button>
                                  <button class="btn">
                                    <i class="icon-bubble icons"></i> 2
                                  </button>
                                  <button class="btn">
                                    <i class="icon-loop icons"></i> 7071
                                  </button>
                              </div>
                          </div>
                          <div class="col-md-12 padding-0 box-v7-comment">

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar2.png" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Fulan</h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-like icons"></i> 2819
                                   </a>
                                   <a href=""> | Comment</a>
                                </div>
                              </div>

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar3.png" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Fulanah</h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-like icons"></i> 2819
                                   </a>
                                   <a href=""> | Comment</a>
                                </div>
                              </div>

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar.jpg" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <textarea class="box-v7-commenttextbox" placeholder="write comments..."></textarea>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="panel box-v7">
                        <div class="panel-body">
                          <div class="col-md-12 padding-0 box-v7-header">
                              <div class="col-md-12 padding-0">
                                  <div class="col-md-10 padding-0">
                                  <img src="asset/img/avatar.jpg" class="box-v7-avatar pull-left" />
                                  <h4>{{ Auth::user()->name }}</h4>
                                  <p>Today 21:10 Am - 14.07.1997</p>
                                  </div>
                                  <div class="col-md-2 padding-0">
                                    <div class="btn-group pull-right">
                                    <i class="icon-options-vertical icons box-v7-menu" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                  </div>
                                  </div>
                              </div>
                          </div>
                         <div class="col-md-12 padding-0 box-v7-body">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
                              <div class="col-md-12">
                                  <h4><span class="icon-music-tone-alt icons"></span> &nbsp Al-Baqarah.mp3</h4>
                                  <audio src="asset/media/demo.mp3"></audio>
                              </div>
                              </p>
                              <div class="col-md-12 top-20">
                                  <button class="btn">
                                    <i class="icon-like icons"></i> 2819
                                  </button>
                                  <button class="btn">
                                    <i class="icon-bubble icons"></i> 2
                                  </button>
                                  <button class="btn">
                                    <i class="icon-loop icons"></i> 7071
                                  </button>
                              </div>
                          </div>
                          <div class="col-md-12 padding-0 box-v7-comment">

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar2.png" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Fulan</h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <a href="">
                                     <i class="icon-like icons"></i> 2819
                                   </a>
                                   <a href=""> | Comment</a>
                                </div>
                              </div>

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar3.png" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Fulanah</h4>
                                   <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                   </p>
                                   <a href="">
                                     <i class="icon-like icons"></i> 2819
                                   </a>
                                   <a href=""> | Comment</a>
                                </div>
                              </div>

                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="asset/img/avatar.jpg" class="media-object box-v7-avatar"/>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <textarea class="box-v7-commenttextbox" placeholder="write comments..."></textarea>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
               <!-- <div class="col-md-5">
                     <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Report</h4>
                                </div>
                                <div class="panel-body">

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-folder icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Document Handling</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">UI/UX Development</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-energy icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Server Optimation</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-user icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">User Status</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="media">
                                    <div class="media-left">
                                        <span class="icon-fire icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Firewall Status</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel-footer bg-white border-none">
                                    <center>
                                      <input type="button" value="download as pdf" class="btn btn-danger box-shadow-none"/>
                                    </center>
                                </div>
                              </div>
                </div>
             </div>
           -->
          </div>
          <!-- end: content -->


@endsection
