 <!-- start: Header -->

 <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="{{url('dashboard')}}" class="navbar-brand">
                 <b>Veterinary care</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      
                      <span class="bar"></span>
                      
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span class="username">{{ Auth::user()->name }}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{ asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                    
                     
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-power-off "></span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                @csrf
                              </form></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class=><span class=></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
