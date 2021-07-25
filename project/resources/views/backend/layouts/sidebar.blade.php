 <!-- start:Left Menu -->
 <div id="left-menu">
     <div class="sub-left-menu scroll">
         <ul class="nav nav-list">
             <li>
                 <div class="left-bg"></div>
             </li>
             <li class="time">
                 <h1 class="animated fadeInLeft">21:00</h1>
                 <p class="animated fadeInRight">Sat,October 1st 2029</p>
             </li>
             <li class="active ripple">
                 <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard
                     <span class="fa-angle-right fa right-arrow text-right"></span>
                 </a>
                 <ul class="nav nav-list tree">
                     <li><a href="{{ asset('dashboard')}}">Dashboard Utama</a></li>
                     <li><a href="{{ asset('dashboard2')}}">Dashboard Pengguna</a></li>
                 </ul>
             </li>

             <li class="ripple"><a class="tree-toggle nav-header"><span class="fa-diamond fa"></span> Option <span
                         class="fa-angle-right fa right-arrow text-right"></span> </a>
                 <ul class="nav nav-list tree">
                     <li><a href="{{ asset('profile')}}">List Keluhan</a></li>
                     <li><a href="{{ asset('profile2')}}">List Keluhan 2</a></li>
                     <li><a href="{{ asset('listdokter')}}">List Dokter</a></li>
                     <li><a href="{{ asset('listartikel')}}">List Artikel</a></li>
                 </ul>
             </li>
             <li class="ripple">
                 <a class="tree-toggle nav-header">
                     <span class="fa fa-check-square-o"></span> Form Menu
                     <span class="fa-angle-right fa right-arrow text-right"></span>
                 </a>
                 <ul class="nav nav-list tree">
                     <li><a href="{{ asset('artikel')}}">Form Artikel</a></li>
                 </ul>
                 <ul class="nav nav-list tree">
                     <li><a href="{{ asset('biodatadokter')}}">Biodata Dokter</a></li>
                 </ul>
             </li>
             <li><a href="{{ asset('credits')}}">Tentang Kami</a></li>
         </ul>
     </div>
 </div>
 <!-- end: Left Menu -->
