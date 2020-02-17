<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgaos extends Model
{
    protected $table = "tb_orgao";
    protected $fillable = [
        'no_orgao',
    ];
}
