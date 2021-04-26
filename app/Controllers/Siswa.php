<?php

namespace App\Controllers;

use \App\Models\SiswaModel;

class Siswa extends BaseController
{
	protected $siswaModel;

	public function __construct()
	{
		$this->siswaModel = new SiswaModel();
	}
	public function index()
	{
		$data 	= $this->siswaModel->findAll();

		return view('index',['data' => $data]);
	}

	public function create()
	{
		session();

		$data = [
			'validation'	 => \Config\Services::validation()
		];
		// $validation 	= \Config\Services::validation();

		return view('tambah-data',$data);
	}

	public function store()
	{
		session();

		if (!$this->validate([
			'NISN'		=> "required",
			'nama'		=> "required",
			'kelas'		=> "required"
		])) {
			$validation 	= \Config\Services::validation();

			return redirect()->to('/tambah-data')->withInput()->with('validation', $validation);
		}

		$this->siswaModel->insert([
			'NISN'		=> $this->request->getVar('NISN'),
			'nama'		=> $this->request->getVar('nama'),
			'kelas'		=> $this->request->getVar('kelas'),
		]);

		return redirect()->to('/')->with('status', 'berhasil creating');
	}

	public function update($id)
	{
		session();
		
		$data 	= $this->siswaModel->find($id);
		$validation 	= \Config\Services::validation();

		return view('update',[
			'data'			=> $data,
			'validation'	=> $validation
		]);
	}

	public function update_proses()
	{
		session();

		if (!$this->validate([
			'NISN'		=> "required",
			'nama'		=> "required",
			'kelas'		=> "required"
		])) {
			$validation 	= \Config\Services::validation();

			return redirect()->back()->withInput()->with('validation', $validation);
		}

		$id 	= $this->request->getVar('id');

		$this->siswaModel->update($id,[
			'NISN'		=> $this->request->getVar('NISN'),
			'nama'		=> $this->request->getVar('nama'),
			'kelas'		=> $this->request->getVar('kelas'),
		]);
		
		return redirect()->to('/')->with('status', 'berhasil update');
	}

	public function delete($id)
	{
		$this->siswaModel->delete($id);

		return redirect()->to('/')->with('status', 'berhasil delete');
	}
}
