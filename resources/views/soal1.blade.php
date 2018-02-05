<!DOCTYPE html>
<html>
	<head>

		<title>Soal 1</title>
		
	</head>
	<body class="container">
		<center><h4><big><font color ='grey'>Soal 1</font></big></h4><h3><small>One To Many</small></h3></center>
			@foreach ($dosen as $temp)
				<h3> <small>Nama Dosen: <font color ='grey'> {{$temp->nama}}</font></small><br>
					<li>Nama Mahasiswa : <font color ='grey'>
					@foreach($temp->mahasiswa as $tampung) 
					</font>{{$tampung->nama_mahasiswa}},
					@endforeach
					</li>
				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>