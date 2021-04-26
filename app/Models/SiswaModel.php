<?php
namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'siswa';

    protected $allowedFields = ['NISN', 'nama','kelas'];
}