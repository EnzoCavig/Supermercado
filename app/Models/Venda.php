<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venda extends Model
{
    use HasFactory;

    public $table = 'venda';

    protected $fillable = [
        'produto_id'
    ];

    public function Produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
}
