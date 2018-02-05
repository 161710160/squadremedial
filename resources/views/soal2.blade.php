<!DOCTYPE html>
<html>
	<head>

		<title>Soal 2</title>

	</head>
	<body class="container">
		<center><h4><big><font color ='grey'>Soal 2</font></big></h4><h3><small>One To One</small></h3></center>
			@foreach ($wali as $dendi)
				<h3> <small>Nama Wali: <font color ='grey'>{{$dendi->nama}}</font></small><br>
					<li>Nama Mahasiswa : <font color ='grey'>{{$dendi->mahasiswa->nama_mahasiswa}}
					</font></li>
				</h3>
				<hr/>
			@endforeach
		</div>
	</body>
</html>