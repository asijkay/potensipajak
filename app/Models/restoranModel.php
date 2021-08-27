<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restoranModel extends Model
{
    protected $table        = 'restoran';
    protected $fillabble    =[
        'id',
        'nama_restoran',
        'nama_pemilik',
        'alamat',
        'jenis_restoran',
        'kapasitas',
        'skt_ramai',
        'skt_normal',
        'skt_sepi',
        'tkt_ramai',
        'tkt_normal',
        'tkt_sepi',
        'prt',
        'potensi_pajak_ramai',
        'potensi_pajak_normal',
        'potensi_pajak_sepi',
        'potensi_pajak',
        'created_at',
        'updated_at'
    ];
}
