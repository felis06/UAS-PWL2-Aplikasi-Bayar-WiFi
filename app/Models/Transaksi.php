<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'detail_transaksi',
        'total',
        'status_pembayaran',
        'nomer_transaksi'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
