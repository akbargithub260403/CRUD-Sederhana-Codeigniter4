<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Siswa extends Seeder
{
	public function run()
	{
		$data = [
				'NISN' 		=> '120192',
				'nama'    	=> 'Tresno',
				'kelas'		=> 'XI'
		];

		// Using Query Builder
		$this->db->table('siswa')->insert($data);
		}
}