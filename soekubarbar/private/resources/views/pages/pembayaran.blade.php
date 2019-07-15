<!DOCTYPE html>
<html>

	<head>
	<title>Pembayaran</title>
	
	     <!-- Bootstrap core CSS -->
  
        <link href="{{ asset('public/css/vendor/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('public/css/vendor/css/full.css" rel="stylesheet"></head>
<body>
	<form name="randform">
			<input type="button" value="Klik Untuk Masukkan Kode" onClick="randomString();">&nbsp;<br><br>
			<input type="text" readonly name="randomfield" value="">
	</form>
<script language="javascript" type="text/javascript">
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	document.randform.randomfield.value = randomstring;
}
</script>


<div class="frm-add">
	<form name="frmAdd" action="" method="POST">
		 <div class="demo-form-row">
  	  		<label>Kode: </label><br>
	 	 	<input type="text" name="kode" class="demo-form-field" required />
  		</div>
  <div class="demo-form-row">
	  <label>Jam Berangkat: </label><br>
	  <select name="travel" class="demo-form-field" rowa="5" required />
   			<option selected="selected">--pilih--</option>
  			<option>08.00 WIB</option>
  			<option>09.30 WIB</option>
  			<option>14.30 WIB</option>
  			<option>16.30 WIB</option>
       </select>
  </div>
  <div class="demo-form-row">
	  <label>Tujuan: </label><br>
	   <select name="tujuan" class="demo-form-field" rowa="5" required />
   			<option selected="selected">--pilih--</option>
  			<option>Tegal - Yogyakarta</option>
  			<option>Tegal - Jakarta</option>
  			<option>Yogyakarta - Tegal</option>
  			<option>Jakarta - Tegal</option>
       </select>
  </div>
  <div class="demo-form-row">
	  <label>Jumlah Pembayaran: </label><br>
	  <select name="jumlah_pembayaran" class="demo-form-field" rowa="5" required />
   			<option selected="selected">--pilih--</option>
  			<option>Rp.500.000</option>
  	  </select>
  </div>
  <div class="demo-form-row">
	  <label>Nama Lengkap: </label><br>
	  <input type="text" name="nama_lengkap" class="demo-form-field" required />
  </div>
   <div class="demo-form-row">
	  <label>Nama Bank: </label><br>
	    <select name="nama_bank" class="demo-form-field" rowa="5" required />
   			<option selected="selected">--pilih--</option>
  			<option>BRI</option>
  			<option>MANDIRI</option>
  			<option>BNI</option>
  			<option>BCA</option>
       	</select>
  </div>


   <div class="demo-form-row">
	  <label>No. Rekening: </label><br>
	  <input type="number" name="no_rekening" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Atas Nama: </label><br>
	  <input type="text" name="atas_nama" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Tanggal Berangkat: </label><br>
	  <input type="date" name="tanggal" class="demo-form-field" required />
  </div> 
    <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Bayar" class="demo-form-submit">
  </div>
  </form>
</body>
</html>

<html>
<head>
<title></title>
<style>
body{width:1357px;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>
<div style="text-align:right;margin:20px 45px;"><a href="cetak.php" class="button_link"><img src="" title="" style="vertical-align:bottom;" /> Cetak Nota pembayaran</a>&nbsp&nbsp<a href="index.html" class="button_link">Kembali</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="5%">Kode</th>
	  <th class="table-header" width="5%">Travel</th>
	  <th class="table-header" width="5%">Tujuan</th>
	  <th class="table-header" width="5%">Jumlah Pembayaran</th>
	  <th class="table-header" width="5%">Nama Lengkap</th>
	  <th class="table-header" width="5%">Nama Bank</th>
	  <th class="table-header" width="5%">Atas Nama</th>
	  <th class="table-header" width="5%">Tanggal Berangkat</th>
	</tr>
  </thead>
</table>
</body>
</html>