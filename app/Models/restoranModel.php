<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restoranModel extends Model
{
    protected $table      = 'restoran';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields=['id','nama_restoran','kapasitas','potensi_pajak'];

    public function scopeRestoran($id = false)
    {
        if($id == false)
        {
            return $this->All();
        }
            return $this->where(['id'=>$id])->first();
    }
}
