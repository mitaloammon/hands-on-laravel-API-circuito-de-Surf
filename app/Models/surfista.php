<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surfista extends Model
{
    protected $table = 'surfistas';

    protected $primaryKey = 'numero';

    protected $fillable = ['nome', 'pais', 'numero'];

    protected $guarded = ['numero'];

    use HasFactory;

    public function ondas()
    {
        return $this->hasMany(onda::class, 'id');
    }
}
