<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta htttp-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Fremwork Programming</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/bootstrap_4_3_1/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
	<script type="text/javascript" src="{{ asset('public/js/respond.min.js') }}"></script>
</head>
<body>

<div class="cointainer">


{{--Include file navbar.blade.php --}}
@include('navbar')	
{{-- Memanggil halaman section main --}}
@yield('header')
{{-- Memanggil halaman footer --}}
@yield('footer')

</div>


<script type="text/javascript" src="{{ asset('public/bootstrap_4_3_1/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/jquery_3_3_1.min.js') }}"></script>
</body>
</html>