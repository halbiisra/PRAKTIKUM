<?php

namespace PRAKTIKUM\Marketplace;

require_once('./halbi.php');

use PRAKTIKUM\Marketplace\produk;

class jasa {

    use produk;
    
    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "hanya bisa va dan qris"
        };
    }
}