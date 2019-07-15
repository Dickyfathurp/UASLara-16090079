@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Laravel</div>
</div>

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->tujuan }}</h5>

            <div class="divider"></div>
            <p>{!! $tampilkan->nama !!}</p>
            <p>{!! $tampilkan->tanggal !!}</p>
            <p>{!! $tampilkan->jam !!}</p>
                
		</div>
	</div>

</div>

@endsection