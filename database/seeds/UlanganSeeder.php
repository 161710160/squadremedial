<?php

use Illuminate\Database\Seeder;
use App\dosen;
use App\jurusan;
use App\mahasiswa;
use App\matkul;
use App\wali;

class UlanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->delete();
        DB::table('jurusans')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('matkuls')->delete();
        DB::table('matkul_mahasiswas')->delete();


        $dosen1 = dosen::create(array(
        	'nama' => 'Arul','nipd'=>'222','alamat'=>'Bocil','mata_kuliah'=>'English'
        ));
        $dosen2 = dosen::create(array(
        	'nama' => 'Sagu','nipd'=>'333','alamat'=>'City Woods','mata_kuliah'=>'Kuli'
        ));
        $this->command->info('Data Dosen Telah Diisi !');

        $rpl = jurusan::create(array(
         	'nama_jurusan'=>'Rekayasa Perangkat Lunak'
         ));
        $tkr = jurusan::create(array(
         	'nama_jurusan'=>'Teknik Kendaraan Ringan'
         ));
        $ngurek = jurusan::create(array(
         	'nama_jurusan'=>'Ngurek'
         ));
        $this->command->info('Data Jurusan Telah Diisi !');

        $katun = mahasiswa::create(array(
        'nama_mahasiswa'=> 'Katun','nis'=>'00001','id_dosen'=>$dosen1->id,'id_jurusan'=> $tkr->id
        ));

        $seblak = mahasiswa::create(array(
        'nama_mahasiswa'=> 'Seblak','nis'=>'00002','id_dosen'=>$dosen1->id,'id_jurusan'=> $rpl->id
        ));
        $kardi = mahasiswa::create(array(
        'nama_mahasiswa'=> 'Kardi','nis'=>'00003','id_dosen'=>$dosen2->id,'id_jurusan'=> $ngurek->id
        ));

        $this->command->info('Mahasiswa Parantos Diisi!');

        wali::create(array(
        'nama'=>'Bpk. Katun',
        'alamat'=>'Cilebak',
        'id_mahasiswa'=>$katun->id
        ));
        wali::create(array(
        'nama'=>'Bpk. Seblak',
        'alamat'=>'rencong',
        'id_mahasiswa'=>$seblak->id
        ));
        wali::create(array(
        'nama'=>'Bpk. Kardi',
        'alamat'=>'baleendah',
        'id_mahasiswa'=>$kardi->id
        ));

		$this->command->info('Wali Parantos Diisi !');

		$english = matkul::create(array('nama_matkul'=>'English','kkm'=>'85'));
		$kuli = matkul::create(array('nama_matkul'=>'Kuli','kkm'=>'80'));

		$katun->matkul()->attach($english->id);
		$katun->matkul()->attach($kuli->id);
		$seblak->matkul()->attach($kuli->id);
		$kardi->matkul()->attach($english->id);

		$this->command->info('Mahasiswa dan Mata Kuliah Parantos Diisi !'); 
    }
}
