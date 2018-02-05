<!DOCTYPE html>
<html>
	<head>

		<title>Soal 3</title>
	</head>
	<body class="container">
		<center><h4><font color ='grey'>Soal 3</font></h4><h3><small>One To Many</small></h3></center>
			@foreach ($jurusan as $dendi)
				<h3> <small>Nama Jurusan: <font color ='grey'>{{$dendi->nama_jurusan}}</font></small><br>
					<li>Nama Mahasiswa : <font color ='grey'>@foreach($dendi->mahasiswa as $navi) 
					{{$navi->nama_mahasiswa}},
					@endforeach
					</font></li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>