<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table='blog';

    protected $fillable = [
        'judul',
        'tanggal',
        'jam',
        'kategori',
        'detail',
        'foto'
    ];

    public function Kategori(){
    	return $this->belongsTo("App\kategori",'kategori','id');
    }

    public function deleteLinked($lokasi){
        $cek = (public_path().($lokasi));
            if($lokasi && file_exists($cek)){
                unlink($cek);
                return true;
            }
            else 
                return false;
    }
}
