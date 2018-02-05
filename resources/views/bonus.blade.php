<!DOCTYPE html>
<html>
	<head>

		<title>Bonus</title>

	</head>
	<body class="container">
			<center><strong><font color ='grey'>Bonus</font></strong></h3></center>
			@foreach ($mahasiswa as $dendi)
				<h3> <small><strong>Nama Mahasiswa : </strong><font color ='grey'>{{$dendi->nama_mahasiswa}}</font></small><br>
				<small><strong>Nis :</strong> <font color ='grey'>[{{$dendi->nis}}]</font></small></h3>


					<li><strong>Nama Wali :</strong> <font color ='grey'>{{$dendi->wali->nama}}</font></li>
					<li><strong>Alamat Wali : <font color ='grey'></strong>{{$dendi->wali->alamat}}</font></li>					

				</h4>
				<hr/>
				<h4>
					<li><strong>Nama Dosen :</strong> <font color ='grey'>{{$dendi->dosen->nama}}</font></li>
					<li><strong>Jurusan : </strong> <font color ='grey'>{{$dendi->jurusan->nama_jurusan}}</font></li>
					<li><strong>Mata Kuliah :</strong> 
					<font color ='grey'>@foreach($dendi->matkul as $navi) 
					{{$navi->nama_matkul}},
					@endforeach
					</font></li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>