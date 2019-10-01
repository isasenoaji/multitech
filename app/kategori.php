<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{
	use SoftDeletes;
    protected $table='kategori';

    protected $fillable = [
        'kategori',
        'key'
    ];
}
