<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onda extends Model
{
    protected $table = 'ondas';

    protected $fillable = ['id', 'bateria', 'surfista'];

    protected $guarded = ['id'];

    public function baterias()
    {
        return $this->hasMany(bateria::class, 'id', 'id');
    }

    public function surfista()
    {
        return $this->belongsTo(surfista::class, 'id');
    }

    use HasFactory;
}
