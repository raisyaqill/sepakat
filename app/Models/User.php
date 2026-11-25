<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_name',
        'user_email',
        'password',
        'business_name',
        'nib',
        'nib_document',
        'business_address',
        'business_category'
    ];

    protected $hidden = [
        'password'
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function clientContracts()
    {
        return $this->hasMany(
            Contract::class,
            'client_id',
            'user_id'
        );
    }

    public function vendorContracts()
    {
        return $this->hasMany(
            Contract::class,
            'vendor_id',
            'user_id'
        );
    }

    public function contractVersions()
    {
        return $this->hasMany(
            ContractVersion::class,
            'created_by',
            'user_id'
        );
    }

    public function contractLogs()
    {
        return $this->hasMany(
            ContractLog::class,
            'pelaku_id',
            'user_id'
        );
    }
}
