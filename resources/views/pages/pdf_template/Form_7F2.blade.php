<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    /* CSS RESETTER START */
    /* http://meyerweb.com/eric/tools/css/reset/
    v2.0 | 20110126
    License: none (domain)
    */
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        /* vertical-align: baseline; */
    }

    /* HTML5 display-role reset for older browsers */
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    body {
        line-height: 1;
    }

    /* ol,
    ul {
        list-style: none;
    } */

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    /* CSS RESTTER END */
    html {
        font-family: calibri, sans-serif !important;
    }

    body {
        margin-top: 48px;
        margin-bottom: 48px;
    }

    .footer {
        position: absolute;
        bottom: 0;
        left: 20px;
        right: 20px;
        width: 100%;
        height: 300px;
        display: block;
        /* background: red; */
        z-index: 1;
    }

    .header {
        position: relative;
        top: 20px;
        /* left: 0; */
        width: 100%;
        padding: 20px;
        /* height: 150px; */
        display: block;
        /* background: yellow; */
        align-items: center;
    } 

    .content {
        position: relative;
        padding: 20px;
        /* top: 150px; */
        width: 100%;
        display: block;
        /* background: blue; */
        z-index: 1;
    }

    #qrcode {
        display: inline-block;
        /* width: 100%;
        height: 100%; */
    }

    .icon {
        display: inline-block;
        height: 100px;
        margin-top: 15px;
        margin-right: 10px;
    }

    .title-bordered {
        display: inline-block;
        height: 100px;
        border: 1px solid #000;
        padding: 15px 20px 0px 5px;
        margin: 0 10px 0 0;
        font-size: 14px;
    }

    .second-border {
        padding-left: 30px;
    }

    .bold-text {
        font-size: 12px;
        font-weight: bold;
        line-height: 14px;
    }

    .float-left {
        float: left;
    }

    .float-right {
        float: right;
    }

    .inner-content {
        position: relative;
        display: block;
        margin-left: 75px;
    }

    .table-header{
        padding: 0.1em;
    }

    .has-padding td {
        font-size: 12px;
        padding: 0.3em;
    }

    .draft-img {
        position: fixed;
        top: 150px;
        left: 0;
        width: 100vw;
        height: 100vh;
        opacity: .3;
        z-index: -1;
    }

    td p {
        text-align: justify;
        line-height: 16px;
        font-size: 12px;
    }
    ol {
        margin: 10px 0px 10px 20px;
    }

    li {
        text-align: justify;
        line-height: 16px;
        font-size: 12px;
    }

    table, th, td {
        border: 1px solid;
        
        }
    img{
        padding: 0.5em;
        
    }
    .flex-container {
        margin-top: 1em;
        display: flex;
        flex-direction: row;
    }    

.flex-container div {
  width: 100%;
  margin: 0;
  text-align: left;
  font-size: 15px;
}

.header-list1 tr td {
    border-style: none;
}
.header-list2 tr td {
    border-style: none;
}
.tabel_sample{
    font-size: small;
    width:100%; 
    border-style: hidden
}
.tabel_sample tr td{
    border-style: none;
    padding: 0.5em;
}
.tanda_tangan{
    margin-top: 20px;
    width: 100% ;
    vertical-align: middle;
}
.td-kanan{
    float: right
}
.tanda_tangan tr td{
    border-style: none;
}
.td_pj{
    float: right;
    padding-top: 20px;
}

</style>

<body  style="
margin-left: 50px;
margin-right: 80px;
margin-top: 30px;
margin-bottom: 48px;
">
    <div class="content">

        <div class="header">
            <table class="has-padding" style="width: 100%">
              <tr>
                <td
                  style="
                    border: 1px solid #000;
                    border-right: 0px;
                    text-align: right;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    width: 10%;
                  "
                >
                  <img
                    style="width: 90px"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Coat_of_arms_of_Banten.png/1200px-Coat_of_arms_of_Banten.png"
                    alt=""
                  />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    border-left: 0px;
                    text-align: center;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    width: 40%;
                    padding: 15px 10px 15px;
                  "
                >
                  <span class="bold-text">UNIT PELAKSANA TEKNIS DAERAH</span><br />
                  <span class="bold-text">PELAYANAN DAN PENGUJIAN VETERINER</span
                  ><br />
                  <span class="bold-text">DINAS PERTANIAN PROVINSI BANTEN</span><br />
                  <br />
                  <span class="bold-text" style="font-size: 35px">FORMULIR</span
                  ><br />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    text-align: left;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 15px 10px 15px;
                  "
                >
                  <span class="bold-text">No.Bagian</span><br />
                  <span class="bold-text">Halaman</span><br />
                  <span class="bold-text">Terbitan/Revisi</span><br />
                  <span class="bold-text">Tanggal/Terbitan</span><br />
                  <span class="bold-text">Tanggal/Revisi</span><br />
                  <span class="bold-text">Disetujui Kepala UPTD</span><br />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    text-align: left;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 15px 6px 15px;
                  "
                >
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    text-align: left;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 28px 6px 26px;
                  "
                >
                  <span class="bold-text">7 F 2</span><br />
                  <span class="bold-text">1 dari 1</span><br />
                  <span class="bold-text">4/0</span><br />
                  <span class="bold-text">21 Januari 2022</span><br />
                  <span class="bold-text">-</span><br />
                  <span class="bold-text"></span><br />
                </td>
              </tr>
              <tr>
                <td
                  colspan="5"
                  style="
                    border: 1px solid #000;
                    text-align: center;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 15px 10px 15px;
                  "
                >
                  <span class="bold-text" style="font-size: 25px"
                    >KAJI ULANG PERMINTAAN</span
                  ><br />
                </td>
              </tr>
            </table>
          </div>
        
        <div class="flex-container" >
            <div class="header-list1">
                <table style="width: 100%; border-style: hidden;">
                    <tr>
                        <td style="width:70%">Tanggal Terima</td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td>Tanggal Diserahkan Ke MT</td>
                        <td>:.....</td>
                    </tr>
                </table>
            
            </div>
            <div class="header-list2">
                <table style="float:right;width: 100%;border-style: hidden;">
                    <tr>
                        <td style="width: 50%;">No.Contoh Uji</td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td>No.Epi</td>
                        <td>:.....</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        
        <div class="table-content">
            <div class="container">
                <table class="has-padding" style="width: 100%;" style>
                    <tr>
                        <td rowspan="2">No</td>
                        <td rowspan="2">Jenis</td>
                        <td rowspan="2">Jenis Contoh Uji</td>
                        <td rowspan="2">Jumlah Contoh Uji</td>
                        <td rowspan="2">Bahan Pengawet</td>
                        <td colspan="2">Kondisi</td>
                        <td colspan="2">Jumlah Contoh Uji</td>
                        <td rowspan="2">Metode Uji Yang Di Mohon</td>
                        <td colspan="2">Ketersediaan Alat, Bahan, Media dan SDM (laboratorium)</td>
                    </tr>
                    <tr>
                        <td>Baik</td>
                        <td>Kurang Baik</td>
                        <td>Memenuhi</td>
                        <td>Kurang</td>
                        <td>Tersedia</td>
                        <td>Tidak Tersedia</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </table>
           </div>
        </div>
    
        <div class="tanda_tangan">
            <table style=" border-style: hidden">
                <tr>
                    <td style="width: 100%;">
                            <span>Penerima Contoh Uji</span><br />
                           
                            <br />
                            <br />
                            <br />
                            <br />
                           
                            <br /><br /><br /><br />
                        
                            <span>.......................</span>
                    </td>
                    <td style="float: right;width:100%">
                            <span>Serang,...................</span><br />
                            <span>Pengirim Contoh Uji</span><br />
                           
                            <br />
                            <br />
                            <br />
                            <br />
                           
                            <br /><br /><br /><br />
                        
                            <span>.......................</span>
                    </td>
                </tr>
            </table>
        </div>
    
        <div style="padding: 20px;">
            <text>Data Sampel/Contoh : Ruang Lingkup Akreditasi</text>
        </div>
    
        <div class="flex-container" >
            <div class="data_sample">
                <table class="tabel_sample">
                    <tr>
                        <td style="width:50%">1.Tanggal Penerima</td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">2.Pengiriman Sampel </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">3.Jenis Sampel </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">4.Jumlah Sampel </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">5. Metode Uji </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">6. Biaya Uji </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">7. Laboratorium </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">8. No. Epid/Contoh Uji </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td style="width:50%">8. Lama Pengujian </td>
                        <td>:.....</td>
                    </tr>
                </table>
                <br>
                <br>
                <table class="ceklist_tabel" width="80%">
                    <tr>
                        <th>Dilanjutkan</th>
                        <th>Disubkontrak</th>
                        <th>Tidak Dapat Dilakukan Pengujian</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>      
                </table>
                <text>Catatan : Bubuhkan tanda </text>
            </div>
            <div class="list_jenis">
                <table style="font-size:x-small;width:100%;">
                    <tr style="text-align: center;">
                        <td>Jenis Pengujian atau 
                            <br>sifat-sifat yang diukur</td>
                        <td>Metode Pengujian, teknik yang di gunakan</td>
                        
                    </tr>
                    <tr>
                        <tr>
                            <td>
                                <span>Seriologi</span><br>
                                <span>Rose Bengal Test(RBT)</span><br>
                            </td>
                            <td>OIE Terrestrial Manual 2018, Chapter 3.1.4:368-369</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Pulorum test</span><br>
                            </td>
                            <td>OIE Terrestrial Manual 2018, Chapter 3.3.11:922-923</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Haemoaglutianation/ Haemoaglutianation Inhibition test untuk Ai</span><br />
                            </td>
                            <td>OIE Terrestrial Manual 2018, Chapter 3.3.4:830-831</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Haemoaglutianation/ Haemoaglutianation Inhibition test untuk ND</span><br>
                                <td>OIE Terrestrial Manual 2018, Chapter 3.3.14:970-971</td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Parasitologi:</span><br>
                                <span>Uji Sedimentasi (telur cacing Fasiola sp paramphistomum)</span><br />
                            </td>
                            <td>3.3 Manual Standar Metode Diagnosa Laboratorium Kesehatan Hewan Tahun 1990 Hal 38-51</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Uji Kualitatif telur cacing</span><br>
                            </td>
                            <td>3.3 Manual Standar Metode Diagnosa Laboratorium Kesehatan Hewan Tahun 1990 Hal 34-37</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Formaldehyde</span><br>
                            </td>
                            <td>7IK 1.7(Kuantitatif)</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Total Plate Count (TPC)</span><br>
                            </td>
                            <td>SNI 2987:2008, butir 1</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Coliform</span><br>
                            </td>
                            <td>ISO 16649-2:2001</td>
                        </tr>
                        <tr>
                            <td>
                                <span>E Coli</span><br>
                            </td>
                            <td>ISO 16649-2:2001</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Salmonelia sp</span><br>
                            </td>
                            <td>SNI 2987:2008, butir 4</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Indetifikasi spesies babi(pork)</span><br>
                            </td>
                            <td>User Manual IQ Plus tm, User manual Procine ingredient Reagent Set Tahun 2012(Poumerase Chain Reaction)</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Identifikasi Avian Influenza</span><br>
                            </td>
                            <td>User Manual IQ Plus tm, User Manual Pockit  Avian Influenza H5 Detection KIT H5 Detection KIT Tahun 2012(Polymerase Chain Reaction)</td>
                        </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="td_pj" >
                <table>
                    <tr>
                        <span>Mengetahui</span><br>
                        <span>Penanggung Jawab Teknis</span><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <span>.......................................</span>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
