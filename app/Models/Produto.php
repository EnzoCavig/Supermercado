<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;

    public $table = 'produto';

    protected $fillable = [
        'categoria_id',
        'name',
        'description',
        'validade',
        'price',
        'image'
    ];

    public function Venda(): HasMany
    {
        return $this->hasMany(Venda::class);
    }

    public function Categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
