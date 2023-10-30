<?php

class daftarBarang extends Model{
    private $daftar = [];

    public function getDataAll(){
        $data = [];
        $stmt = "select * from daftarbarang";
        $query = $this->db->query($stmt);

        while ($result = $this->db->fetch_array($query)) {
            $data[] = $result;
        }
        return $data;
    }
    public function getDataByid($id){
        $data = [];
        $stmt = "select * from daftarbarang where id = $id";
        $query = $this->db->query($stmt);
        $data = $this->db->fetch_array($query);
        return $data;
    }

    public function tambahBarang($param){
        $stmt = "insert into daftarbarang (nama,qty) values (:nama,:qty)";
        $query = $this->db->query($stmt, $param);
        if ($this->db->last_id()>0){
            return true;
        }else{
            return false;
        }
    }

    public function hapusBarang($id){
        $stmt = "delete from daftarbarang where id = $id";
        $query = $this->db->query($stmt);
        if ($query->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
}

?>