

@extends('layout.v_template')

@section('content')
  

<table class="table table-boardered">

<thead>
    <tr>
    <th>no </th>
    <th>nama pegawai</th>
    <th>tanggal</th>
    <th>jam masuk</th>
    <th>jam pulang </th>
    <th>alamat </th>
    <th>keterangan</th>
    <th>aksi</th>
    </tr>
</thead>

<tbody>
<?php   $no=1;     

//  <td> <img src="{{url('foto_guru/'.$data->foto_guru)}}" width="150px" alt=""> </td> 
?>

        @foreach ($absensi as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data -> id_pegawai}}</td>
            <td>{{$data -> tanggal}}</td>
            <td>{{$data -> jam_masuk}}</td>
            <td>{{$data -> jam_selesai}}</td>
            <td>{{$data -> alamat}}</td>
            <td>{{$data -> keterangan}}</td>
          
            <td>
            <a href="/absensi/detail/{{$data -> id_absensi}}" class="btn btn-sm btn-success" > detail </a>
            <a href="/absensi/edit/{{$data -> id_absensi}}" class="btn btn-sm btn-warning" > edit </a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_absensi}}">delete</button>
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >

@foreach($absensi  as $data)



<div class="modal fade" id="delete{{$data->id_absensi}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->id_pegawai}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>apakah kamu ingin mengahapus absensi ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button href="/absensi/delete/{{$data->id_absensi}}" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="/absensi/delete/{{$data->id_absensi}}" class="btn btn-danger btn-sm" > delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

@endsection