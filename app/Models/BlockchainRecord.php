<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockchainRecord extends Model
{
    protected $table = 'blockchain_records';

    protected $primaryKey = 'blockchain_id';

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'waktu' => 'datetime',
        ];
    }

    // Kontrak yang dicatat ke blockchain
    public function contract()
    {
        return $this->belongsTo(
            Contract::class,
            'contract_id'
        );
    }

    // Versi kontrak yang dicatat
    public function version()
    {
        return $this->belongsTo(
            ContractVersion::class,
            'version_id'
        );
    }
}
