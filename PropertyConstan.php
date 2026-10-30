
<?php

namespace Pbo\marketplace;

class Produk {

    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Konstanta
    public const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method static menghitung persentase pajak
    public static function pajak() {
        return self::PAJAK * 100;
    }

    // Method static menghitung total harga
    public static function total($harga) {
        return $harga + ($harga * self::PAJAK);
    }
}
