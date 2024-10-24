<?php
class Barang {
    public $nama = "PC";
    public $id = "793847293";
    public $harga = "15000000";
    public $stok = "100";

    public function __construct($nama = '', $id = 0, $harga = 0, $stok = 0) {
        $this->nama = $namaProduk;
        $this->id = $id;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function pesanBarang() {
        return "";
    }
}

class Customer {
    public $namaCust;
    public $nohp;
    public $alamat;

    public function __construct($namaCust = '', $nohp = 0, $alamat = '') {
        $this->namaCust = $namaCust;
        $this->nohp = $nohp;
        $this->alamat = $alamat;
    }

    public function Pembelian() {
        return "";
    }
}

$Stokakhir = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panggilProduk = new Produk ();
    $panggilProduk -> nohp = intval($_POST['nohp']);
    $panggilProduk -> pembelian = intval($_POST['pembelian']);

    $Stokakhir = $panggilProduk->stokAkhirProduk();
}
?>