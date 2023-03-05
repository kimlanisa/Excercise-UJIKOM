<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
            'customer_id',
            'user_id',
            'tgl_transaksi',
            'customer',
            'status_order',
            'status_payment',
            'harga_id',
            'kg',
            'hari',
            'harga',
            'tgl',
            'tgl_ambil',
            'invoice',
            'disc',
            'bulan',
            'tahun',
            'harga_akhir',
            'email_customer',
            'jenis_pembayaran'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function harga()
    {
        return $this->belongsTo(Harga::class, 'harga_id', 'id');
    }

    
}
