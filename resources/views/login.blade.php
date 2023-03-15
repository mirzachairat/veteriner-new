
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Halamana Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <link rel="stylesheet" href="https://labs.easyblog.it/maps/leaflet-search/src/leaflet-search.css">
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin="">
        </script>
        <style>
        #mapid { min-height: 250px; }
        </style>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Leaflet CSS -->
    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/banten.ico" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">LOVE-BANTEN APPS</h4>   
                                        <p class="text-muted  mb-0">Sign in to continue.</p>  
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-semibold" data-toggle="tab" href="#Register_Tab" role="tab">Register</a>
                                        </li>
                                    </ul>
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form" method="POST" action="{{route('login')}}">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label for="email">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                                    </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label for="password">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                                        <div class="invalid-tooltip">
                                                            {{$errors}}
                                                        </div>
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <div class="m-3 text-center text-muted">
                                            </div>
                                        </div>
                                        <div class="tab-pane px-3 pt-3" id="Register_Tab" role="tabpanel">
                                            <div class="container" id="mapid"></div>
                                            <form class="form-horizontal auth-form" action="{{env('APP_URL')}}/register">
                                                
                                                <div class="form-group mb-2">
                                                    <label for="nama">Nama</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="isi nama pengguna">
                                                    </div>                                    
                                                </div><!--end form-group--> 

                                                <div class="form-group mb-2">
                                                    <label for="mo_number">Mobile Number</label>                                            
                                                    <div class="input-group">                                 
                                                        <input type="text" class="form-control" name="no_hp" id="no_number" placeholder="isi nomor telp">
                                                    </div>                               
                                                </div><!--end form-group-->  

                                                <div class="form-group mb-2">
                                                    <label for="instansi">Instansi/Perusahaan</label>                                            
                                                    <div class="input-group">                                 
                                                        <input type="text" class="form-control" name="instansi" id="instansi" placeholder="isi nama instansi atau perusahaan">
                                                    </div>                              
                                                </div><!--end form-group-->  

                                                <div class="form-group mb-2">
                                                    <label for="alamat">alamat</label>                                            
                                                    <div class="input-group">                                 
                                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="isi alamat">
                                                    </div>                              
                                                </div><!--end form-group-->  
                                                
                                                <div class="form-group mb-2">
                                                    <label for="jabatan">Jabatan</label>                                            
                                                    <div class="input-group">                                 
                                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="isi jabatan">
                                                    </div>                               
                                                </div><!--end form-group-->  

                                                 <input type="hidden" name="jabatan_id" id="jabatan_id" value="1">
                                                
                                                 <div class="form-group mb-2">
                                                    <label for="useremail">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="isi Email">
                                                    </div>                                    
                                                </div><!--end form-group-->
                    
                                                <div class="form-group mb-2">
                                                    <label for="userpassword">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="isi password">
                                                    </div>                               
                                                </div><!--end form-group--> 
            
                                                <div class="form-group mb-2">
                                                    <label for="conf_password">Confirm Password</label>                                            
                                                    <div class="input-group">                                   
                                                        <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Confirm Password">
                                                    </div>
                                                </div><!--end form-group-->
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Daftar <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <p class="my-3 text-muted">Sudah punya account ?<a href="" class="text-primary ml-2">Log in</a></p>                                                    
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Veteriner apps © 2023</span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/feather.min.js')}}"></script>
        <script src="{{asset('js/simplebar.min.js')}}"></script>

    <script>
        var map = L.map('mapid').setView([{{ config('leafletsetup.map_center_latitude') }},
            {{ config('leafletsetup.map_center_longitude') }}],
            {{ config('leafletsetup.zoom_level') }});
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    </script>
    </body>

</html>