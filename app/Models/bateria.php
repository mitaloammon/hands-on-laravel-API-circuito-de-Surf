<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bateria extends Model
{
    protected $table = 'baterias';

    protected $fillable = ['id', 'surfista1', 'surfista2'];

    protected $guarded = ['id'];

    public function ondas()
    {
        return $this->hasMany(onda::class, 'bateria', 'id');
    }


    use HasFactory;
}
