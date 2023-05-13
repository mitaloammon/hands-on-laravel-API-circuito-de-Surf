<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class nota extends Model
{
    protected $table = 'notas';

    protected $fillable = ['id', 'onda', 'notaParcial1', 'notaParcial2', 'notaParcial3'];

    protected $guarded = ['id'];

    use HasFactory;

    public function onda()
    {
        return $this->belongsTo(onda::class, 'id', 'id');
    }
}
