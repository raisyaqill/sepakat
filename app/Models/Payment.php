<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'payment_id';

    protected function casts(): array
    {
        return [
            'jumlah' => 'decimal:2',
            'paid_at' => 'datetime',
            'expired_at' => 'datetime',
        ];
    }

    // Kontrak yang dibayarkan
    public function contract()
    {
        return $this->belongsTo(
            Contract::class,
            'contract_id'
        );
    }
}
