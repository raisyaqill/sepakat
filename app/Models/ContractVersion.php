<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractVersion extends Model
{
    protected $table = 'contract_versions';

    protected $primaryKey = 'version_id';

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'version_number' => 'integer',
            'created_at' => 'datetime',
        ];
    }

    // Kontrak yang memiliki versi ini
    public function contract()
    {
        return $this->belongsTo(
            Contract::class,
            'contract_id'
        );
    }

    // Pengguna yang membuat versi
    public function creator()
    {
        return $this->belongsTo(
            User::class,
            'created_by',
            'user_id'
        );
    }

    // Bukti blockchain dari versi final
    public function blockchainRecord()
    {
        return $this->hasOne(
            BlockchainRecord::class,
            'version_id'
        );
    }
}
