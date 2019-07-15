@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text"></div>
</div>

<div class="section">
  <form action="{{ url('update', $tampiledit->id) }}" method="POST">
    {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="tujuan" value="{{ $tampiledit->tujuan }}">
            <label for="title">Tujuan</label>
          </div>
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="nama" value="{{ $tampiledit->nama }}">
            <label for="title">Nama</label>
          </div>
    </div>
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="tanggal">{{ $tampiledit->tanggal }}</textarea>
          <label for="textarea1">Tanggal</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="jam" value="{{ $tampiledit->jam }}">
            <label for="title">Jam Berangkat</label>
          </div>
    </div>
      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection