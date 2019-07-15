<div id='karyawan'>
	<h1>passing data controller</h1>
	<p>Passing data controller ke view laravel</p>
</div>

<p>nama : {{ $nama }}</p>

<p>Mengampu Mata Kuliah Z</p>

<ul>
	@foreach($matkul as $m)
	<li> {{ $m }}</li>
	@endforeach
</ul>