<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Publicacao;

class empresa extends Model
{
    protected $table = 'empresa'; 
    protected $fillable = ['nome','logo'];
    public $timestamps = true;

    public function publicacoes()
    {
        return $this->hasMany(Publicacao::class);
    }
}
