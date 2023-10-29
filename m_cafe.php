<?php

require "./koneksiMVC.php";

class m_cafe
{
    private $database;
    protected $tablename = "cafe";

    public function __construct()
    {
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }

    public function setCafe($Pesanan, $Jumlah, $Catatan)
    {
        $Pesanan = $this->database->real_escape_string($Pesanan);
        $Jumlah = $this->database->real_escape_string($Jumlah);
        $Catatan = $this->database->real_escape_string($Catatan);

        $query = "INSERT INTO $this->tablename (Pesanan, Jumlah, Catatan) VALUES ('$Pesanan', '$Jumlah', '$Catatan')";
        return $this->database->query($query);
    }

    public function getAll()
    {
        $result = $this->database->query("SELECT * FROM $this->tablename");
        $programs = $result->fetch_all(MYSQLI_ASSOC);
        return $programs;
    }

    public function delete($id)
    {
        $id = $this->database->real_escape_string($id);
        return $this->database->query("DELETE FROM $this->tablename WHERE Pesanan = '$id'");
    }

    public function update($id, $jum, $cat)
    {
        $id = $this->database->real_escape_string($id);
        $jum = $this->database->real_escape_string($jum);
        $cat = $this->database->real_escape_string($cat);

        return $this->database->query("UPDATE $this->tablename SET Jumlah = '$jum', Catatan = '$cat' WHERE Pesanan = '$id'");
    }
}
