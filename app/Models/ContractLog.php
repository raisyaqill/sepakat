<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractLog extends Model
{
    protected $table = 'contract_logs';

    protected $primaryKey = 'logs_id';

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    // Kontrak yang memiliki aktivitas
    public function contract()
    {
        return $this->belongsTo(
            Contract::class,
            'contract_id'
        );
    }

    // Pengguna yang melakukan aktivitas
    public function actor()
    {
        return $this->belongsTo(
            User::class,
            'pelaku_id',
            'user_id'
        );
    }
}
