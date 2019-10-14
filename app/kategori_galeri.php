<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_galeri extends Model
{
	use SoftDeletes;
    protected $fillable = ['id', 'nama', 'users_id', 'created_at'];
    protected $table = 'kategori_galeri';

    protected $casts = ['deleted_at' => 'datetime'];
}