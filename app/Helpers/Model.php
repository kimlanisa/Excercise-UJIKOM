<?php

use App\Models\{Paket, Pembayaran, Transaksi};

class Rupiah {
    public static function getRupiah($value) {
        $format = "Rp " . number_format($value, 0, ',', '.');
        return $format;
    }
}
    