@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Tujuan Keberangkatan</div>
</div>

<div class="section">
  <form action="{{ url('store') }}" method="POST">
    {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="tujuan">
            <label for="title">Tujuan</label>
          </div>
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="nama"></textarea>
          <label for="textarea1">Nama</label>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="tanggal"></textarea>
          <label for="textarea1">Tanggal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="jam"></textarea>
          <label for="textarea1">Jam</label>
        </div>
      </div>  
      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection