@extends('layouts.main')
@section('content')
    <ul class="list-unstyled topbar-nav mb-0">    
        <li class="creat-btn">
            <div class="nav-link">
                <a class=" btn btn-sm btn-soft-primary" href="{{env('APP_URL')}}/form" role="button"><i class="fas fa-plus mr-2"></i>Tambah Permohonan</a>
            </div>                                
        </li>
    </ul>        
    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabel Permohonan</h4>
                                    <p class="text-muted mb-0">Add <code>.table-bordered</code> for
                                        borders on all sides of the table and cells.
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>ID Permohonan</th>
                                                <th>Nama Pemohon</th>
                                                <th>Jenis Hewan</th>
                                                <th>Status</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $items)
                                            <tr>
                                                <td>{{$items->id}}</td>
                                                <td>{{$items->nama}}</td>
                                                <td>{{$items->jenis_hewan}}</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/view/pengirim/{{$items->id}}" class="btn btn-primary btm-sm">Lihat</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
@endsection

