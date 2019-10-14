<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_berita extends Model
{
	use SoftDeletes;
    protected $fillable = ['id', 'nama', 'users_id', 'created_at'];
    protected $table = 'kategori_berita';

    protected $casts = ['deleted_at' => 'datetime'];
}