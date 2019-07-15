@extends('layouts.index')
@section('content')

<div class="section">
    <div class="card-panel purple darken-3 white-text">Beranda</div>
</div>

<div class="section">
    @foreach($datas as $data)

    <div class="row">
        <div class="col s12">
            <h5>{{ $data->tujuan }}</h5>

            <div class="divider"></div>
            
            <h5>{{ $data->nama }}</h5>
            <h5>{{ $data->tanggal }}</h5>
            <h5>{{ $data->jamn }}</h5>
                
            <a href="{{ url('read', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Detail <i class="material-icons right">send</i></a>
            <a href="{{ url('edit', $data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Ubah <i class="material-icons right">mode_edit</i></a>
            <a href="{{ url('delete', $data->id) }}" onclick="return confirm('Apakah Anda yakin mau hapus data ini ?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Hapus <i class="material-icons right">delete</i></a>
        </div>
    </div>
    @endforeach

</div>

{{ $datas->render() }}

<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="{{ url('add') }}" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
 </div>


@endsection