<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
      content: "";
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

    .table-header {
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
      opacity: 0.3;
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

    table,
    th,
    td {
      border: 1px solid;
    }
    img {
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

    .tabel_sample {
      font-size: small;
      width: 100%;
      border-style: hidden;
    }
    .tabel_sample tr td {
      border-style: none;
      padding: 0.5em;
    }
    .tanda_tangan {
      margin-top: 20px;
      width: 100%;
      vertical-align: middle;
    }
    .td-kanan {
      float: right;
    }
    .tanda_tangan tr td {
      border-style: none;
    }
    .paragraf {
      margin-top: 20px;
    }
    .paragraf tr td {
      border-style: none;
      padding: 0.5em;
    }
  </style>

  <body
    style="
      margin-left: 50px;
      margin-right: 50px;
      margin-top: 28px;
      margin-bottom: 48px;
    "
  >
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
            <span class="bold-text">7 F 3</span><br />
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
              >KONTRAK PENGUJIAN</span
            ><br />
          </td>
        </tr>
      </table>
    </div>

      <div class="paragraf" style="margin-top:50px">
          <text
            >Pada hari ini ......... tanggal .......... bulan ........ tahun
            ........ kami yang bertanda tangan dibawah ini:
          </text>
          <br />
          <br />
            <table style="width: 100%; border-style: hidden">
              <tr>
                <td rowspan="4" style="font-size: 18px; vertical-align: top">I.</td>
                <td>Nama</td>
                <td>:</td>
                <td>{{$nama}}</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>Perusahaan</td>
                <td>:</td>
                <td>{{$instansi}}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: ...................................................</td>
              </tr>
              <tr>
                <td></td>
                <td colspan="2">
                  <span
                    >Selanjutnya disebut sebagai
                    <span style="font-weight: bold">PIHAK PERTAMA</span></span
                  >
                </td>
              </tr>
            </table>
            <br />
            <table style="width: 100%; border-style: hidden">
              <tr>
                <td rowspan="4" style="font-size: 18px; vertical-align: top">
                  II.
                </td>
                <td>Nama</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>Instansi</td>
                <td style="font-weight: bold">
                  : UPTD PELAYANAN DAN PENGUJIAN VETERINER (UPTD PPV)
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>
                  : Jl. Raya Cilegon KM. 04 Desa Drangong Kec. Taktakan Kota Serang
                  42162
                </td>
              </tr>
              <tr>
                <td></td>
                <td colspan="2">
                  <span
                    >Selanjutnya disebut sebagai
                    <span style="font-weight: bold"> PIHAK KEDUA </span></span
                  >
                </td>
              </tr>
            </table>
          <br />
          <p>
            Dengan ini kedua belah pihak sepakat melakukan kontrak pengujian.
            PIHAK PERTAMA menyerahkan pekerjaan pengujian kepada PIHAK KEDUA,
            PIHAK KEDUA menerima pekerjaan pengujian dari PIHAK PERTAMA sebagai
            berikut:
          </p>
      </div>
      <br />
      <div class="table-content">
        <div class="container">
          <table style="width: 100%">
            <tr>
              <th>No.</th>
              <th>Kode Sampel</th>
              <th>Jenis Sampel</th>
              <th>Jenis Uji</th>
              <th>Tarif Uji</th>
              <th>Keterangan</th>
            </tr>
            @foreach($jenis as $key=>$item)
            <tr>
              <td>{{$key+1}}</td>
              <td></td>
              <td>{{$item->jenis_sampel}}</td>
              <td>{{$item->jenis_pengujian}}</td>
              <td>{{ formatRupiah($item->total_harga) }}</td>
              <td></td>
            </tr>
            @endforeach
          </table>
          <br />
          <p>
            Biaya Pengujian dibebankan sebesar Rp. {{$jumlah}}
            (...........................) kepada
            <span style="font-weight: bold">PIHAK PERTAMA</span> sesuai
            Peraturan dan Perundang-undangan yang berlaku.
          </p>
          <br />
          <p>
            Demikian surat perjanjian ini dibuat dalam rangkap 2 (dua) pada
            hari, tanggal, bulan dan tahun seperti tersebut diatas
          </p>
        </div>
      </div>

      <div class="tanda_tangan">
        <table style="border-style: hidden; width:100%">
          <tr>
            <td style="width: 65%">
              <span style="font-weight: bold">PIHAK PERTAMA</span><br />
              <span>Pelanggan</span>
              <br />
              <br />

              <br /><br /><br /><br />

              <span>{{$nama}}</span>
            </td>
            <td>
              <span style="font-weight: bold">PIHAK KEDUA</span><br />
              <span>UPTD PPV</span><br />
              <br />
              
              <br />

              <br /><br /><br /><br />

              <span>.......................</span>
              <span>NIP.</span>
            </td>
          </tr>
        </table>
      </div>
    </div>
 
    <script>
      function terbilang(angka) {
        $bilne = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
        if (angka < 12) {
            return bilne[angka];
        } else if (angka < 20) {
            return terbilang(angka - 10) + " belas";
        } else if (angka < 100) {
            return terbilang(Math.floor(parseInt(angka) / 10)) + " puluh " + terbilang(parseInt(angka) % 10);
        } else if (angka < 200) {
            return "seratus " + terbilang(parseInt(angka) - 100);
        } else if (angka < 1000) {
            return terbilang(Math.floor(parseInt(angka) / 100)) + " ratus " + terbilang(parseInt(angka) % 100);
        } else if (angka < 2000) {
            return "seribu " + terbilang(parseInt(angka) - 1000);
        } else if (angka < 1000000) {
            return terbilang(Math.floor(parseInt(angka) / 1000)) + " ribu " + terbilang(parseInt(angka) % 1000);
        } else if (angka < 1000000000) {
            return terbilang(Math.floor(parseInt(angka) / 1000000)) + " juta " + terbilang(parseInt(angka) % 1000000);
        } else if (angka < 1000000000000) {
            return terbilang(Math.floor(parseInt(angka) / 1000000000)) + " milyar " + terbilang(parseInt(angka) % 1000000000);
        } else if (angka < 1000000000000000) {
            return terbilang(Math.floor(parseInt(angka) / 1000000000000)) + " trilyun " + terbilang(parseInt(angka) % 1000000000000);
        }
    }
    </script>
  </body>
</html>
