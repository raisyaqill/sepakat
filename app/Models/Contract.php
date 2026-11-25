<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $primaryKey = 'contract_id';

    protected $fillable = [
        'contract_name',
        'barang',
        'jumlah_barang',
        'harga',
        'jadwal_kirim',
        'start_date',
        'end_date',
        'syarat_bayar',
    ];

    protected function casts(): array
    {
        return [
            'harga' => 'decimal:2',
            'total_harga' => 'decimal:2',
            'jadwal_kirim' => 'date',
            'start_date' => 'date',
            'end_date' => 'date',
            'waktu_acc' => 'datetime',
        ];
    }

    // Client pemilik kontrak
    public function client()
    {
        return $this->belongsTo(
            User::class,
            'client_id',
            'user_id'
        );
    }

    // Vendor penerima kontrak
    public function vendor()
    {
        return $this->belongsTo(
            User::class,
            'vendor_id',
            'user_id'
        );
    }

    // Riwayat versi kontrak
    public function versions()
    {
        return $this->hasMany(
            ContractVersion::class,
            'contract_id'
        );
    }

    // Riwayat pembayaran
    public function payments()
    {
        return $this->hasMany(
            Payment::class,
            'contract_id'
        );
    }

    // Bukti blockchain
    public function blockchainRecord()
    {
        return $this->hasOne(
            BlockchainRecord::class,
            'contract_id'
        );
    }

    // Riwayat aktivitas
    public function logs()
    {
        return $this->hasMany(
            ContractLog::class,
            'contract_id'
        );
    }
}
