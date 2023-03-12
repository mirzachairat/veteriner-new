@extends('layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">APPROVAL MANAGER</h4>
                <p class="text-muted mb-0">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                </p>
            </div><!--end card-header-->
            <div class="card-body">  
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{env('APP_URL')}}/permohonan" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="hewan" class="col-sm-2 col-form-label text-right">Jenis Hewan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="jenis_hewan" id="hewan">
                                </div>
                            </div>
                            <!-- Contoh UJI/Jenis_sampel -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jenis_sampel">Contoh Uji/Jenis Sampel</label>
                                            <input type="text" class="form-control" id="jenis_sampel" name="jenis_sampel[0]">
                                        </div>
                                    </div>      
                                    <div class="card-body">
                                        <div class="jenis_uji">
                                            <div class="row" data-index="0">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="jenis_pengujian-0">Jenis Pengujian</label>
                                                        <select type="text" class="form-control" id="jenis_pengujian-0" name="jenis_pengujian[]" onchange="getPrice(0)">
                                                            <option value selected disabled>=== PILIH JENIS PENGUJIAN ===</option>
                                                            @foreach($data_harga as $data)                                  
                                                                <option value="{{$data->id}}">{{$data->jenis_pengujian}}</option>
                                                            @endforeach  
                                                        </select>
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="jumlah_contoh">Jumlah Contoh Uji</label>
                                                        <input type="text" onkeyup="totalHarga(0)" class="form-control input-jumlah_contoh" id="jumlah_contoh-0" name="jumlah_contoh[]">
                                                    </div>
                                                </div>
    
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="harga_satuan">Harga Satuan</label>
                                                        <input type="text" class="form-control input-harga_satuan" id="harga_satuan-0" name="harga_satuan[]">
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="total_harga">Total Harga</label>
                                                        <input type="text" class="form-control input-total_harga" id="total_harga-0" name="total_harga[]">
                                                    </div>
                                                </div> 
                                                <input type="hidden" value = "0" id="status" name="status" >    
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <span class="btn btn-primary add-btn">Tambah</span>
                                                    </div>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <!-- END contoh UJI     -->
                            <button style="float:left" type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>                                                                      
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

@endsection

@section('script')
<script type="text/javascript">
    $(".add-btn").click(function(){
        let key = uuidv4();

        $(".jenis_uji").append(
            `<div class="row row-sample-${key} align-items-center">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="jenis_pengujian-${key}">Jenis Pengujian</label>
                        <select type="text" class="form-control" id="jenis_pengujian-${key}" name="jenis_pengujian[]" onchange="getPrice('${key}')">
                            <option value selected disabled>=== PILIH JENIS PENGUJIAN ===</option>
                            @foreach($data_harga as $data)
                                <option value="{{$data->id}}">{{$data->jenis_pengujian}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="jumlah_contoh-${key}">Jumlah Contoh Uji</label>
                        <input type="text" onkeyup=totalHarga('${key}') class="form-control input-jumlah_contoh" id="jumlah_contoh-${key}" name="jumlah_contoh[]">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="harga_satuan-${key}">Harga Satuan</label>
                        <input type="text" class="form-control input-harga_satuan" id="harga_satuan-${key}" name="harga_satuan[]">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="total_harga-${key}">Total Harga</label>
                        <input type="text" class="form-control input-total_harga" id="total_harga-${key}" name="total_harga[]">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-danger" onclick="removeRow('${key}')">Remove</button>
                    </div>
                </div>
            </div>`
        );   
    });

    function uuidv4() {
        return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );
    }


    function removeRow(key){
        if(key !== 0){
            $(`.row-sample-${key}`).remove();
        }
    } 

    function totalHarga(key){
        const jumlah = $(`#jumlah_contoh-${key}`).val();
        const harga = $(`#harga_satuan-${key}`).val()
    
        let total = parseFloat(jumlah * harga)
        if(total === NaN || total === undefined){
            total = 0
        }

        $(`#total_harga-${key}`).val(total)
    }

    function getPrice(key){
        let id = $(`#jenis_pengujian-${key}`).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            type: "GET",
            url: "{{url('/daftar_harga/select')}}",
            data: {id},
            cache: false,
            success: function(data)
            {
                $(`#harga_satuan-${key}`).val(data.tarif);
            } 
        });
    }

    // $('#jenis_pengujian').on('change',function(){
    //     var id=$(this).val();

    //     console.log({ id })
    //     $.ajax
    //         ({
    //             headers: {
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             },
    //             type: "GET",
    //             url: "{{url('/daftar_harga/select')}}",
    //             data: {id},
    //             cache: false,
    //             success: function(data)
    //             {
    //                 $('#harga_satuan').val(data.tarif);
    //             } 
    //         });
    // });
        
    </script>
@endsection