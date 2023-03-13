 <!-- Left Sidenav -->
 <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    @if(Auth::user()->jabatan_id == 1)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Pemohon</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/pengirim"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Permohonan</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Draft</a></li> 
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->jabatan_id == 2)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Penerima</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/penerima"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Penerima</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/penerima"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                  
                    @if(Auth::user()->jabatan_id == 3)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Manager</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/manager"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/manager"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->jabatan_id == 4)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Penyelia</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/penyelia"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Penyelia</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/penyelia"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->jabatan_id == 5)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Penguji</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/penyelia"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Penguji</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/penyelia"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                    
                    <hr class="hr-dashed hr-menu">
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>BENDAHARA</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/manager"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Bendahara</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/dartar_harga"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Daftar Harga</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>                        
                    </li>    
                </ul>
    
            </div>
        </div>
        <!-- end left-sidenav-->