<?php 

class Barang {
    private $id;
    private $nama;
    private $qty;

    public function __construct() {
        $this->id = "B01";
        $this->nama = "Beras";
        $this->qty = "100";
    }

    public function getData() {
        return "Data yang diminta dari model barang : $this->nama, $this->id, $this->qty";
    }

    public function getdataOne() {
        $data = [
            'id'=>$this->id,
            'nama'=>$this->nama,
            'qty'=>$this->qty,
        ];
        return $data;
    }
}

?>