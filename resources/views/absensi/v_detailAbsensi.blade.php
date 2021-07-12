@extends('layout.v_template')
@section('title','Detail Guru')
@section('content')
  
<table  class="table"  >

<tr>
<th width="100px" > Nama pegawai </th>
<th width="30pxpx" > : </th>
<th  >  {{$absensi-> id_absensi}}</th>
</tr>

<tr>
<th width="100px" > Nama tanggal </th>
<th width="30pxpx" > : </th>
<th  >  {{$absensi-> tanggal}}</th>
</tr>

<tr>
<th width="100px" > jam Masuk </th>
<th width="30pxpx" > : </th>
<th  >  {{$absensi-> jam_masuk}}</th>
</tr>

<tr>
<th width="100px" > jam pulang </th>
<th width="30pxpx" > : </th>
<th  >  {{$absensi-> jam_selesai}}</th>
</tr>

<tr>
<th width="100px" > alamat </th>
<th width="30pxpx" > : </th>
<th  >  {{$absensi-> alamat}}</th>
</tr>

<tr>
<th width="100px" > keterangan </th>
<th width="30pxpx" > : </th>
<th  >  {{$absensi-> keterangan}}</th>
</tr>

<tr>
<th><a href="/absensi"  class="btn btn-sm btn-success" > kembali </a></th>
</tr>




</table>



    @endsection