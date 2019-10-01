<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeri';

    protected $fillable = [
        'direktori',
        'kategori',
        'judul',
        'deskripsi',
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
