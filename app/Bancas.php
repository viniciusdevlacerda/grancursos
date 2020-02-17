<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bancas extends Model
{
    protected $table = "tb_banca";
    protected $fillable = [
        'no_banca',
    ];
}
