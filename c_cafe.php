<?php

include_once("m_cafe.php");

class c_cafe
{
    public $model;

    public function __construct()
    {
        $this->model = new m_cafe();
    }

    public function invoke(){
            $cafe = $this->model->getAll();
            include 'v_cafe.php';
    }


    public function insert($Pesanan, $Jumlah, $Catatan)
    {
        $this->model->setCafe($Pesanan, $Jumlah, $Catatan);
        header('Location: ' . "index.php");
    }

    public function deleteAction($num)
    {
        $this->model->delete($num);
        header('Location: ' . "index.php");
    }

    public function updateAction($num, $jum, $cat)
    {
        $this->model->update($num, $jum, $cat);
        header('Location: ' . "index.php");
        
    }
}
